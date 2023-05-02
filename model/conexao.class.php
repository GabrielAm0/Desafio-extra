<?php

class Conexao
{

    public static $instance;

    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=localhost;dbname=desafio;", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}


abstract class Connection
{
    private static $conn;
    public static function getConn()
    {
        if (!self::$conn){
            self::$conn = new PDO("mysql:host=localhost;dbname=Desafio;","root","");
        }
        return self::$conn;
    }
}



class User
{
    private $id;
    private $name;
    private $email;
    private $password;


    public function validarLogin()
    {
        $conn = Connection::getConn();
        $sql = 'SELECT * FROM usuario WHERE email = :email';
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $result = $stmt->fetch();

            if ($result['password'] === $this->password) {
                $_SESSION['usr'] = array(
                    'id_user' => $result['id']
//                , 'name_user' => $result['name']
                );

                return true;
            }
        }

        throw new \Exception('Login Inválido');
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


    public function getEmail($email)
    {
        return $this->email = $email;
    }

    public function getName($name)
    {
        return $this->name = $name;
    }

    public function getPassword($password)
    {
        return $this->password = $password;
    }

}





