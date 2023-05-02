<?php
class LoginController

{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache', 'auto_reload' => true
        ]);
        $template = $twig->load('login.php');
        return $template->render();
    }
    public function check()
    {
        try {
            $user = new User();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->validarLogin();

            header('Location: http://localhost/Desafio-extra/home');
//            echo 'deu bom';

        }catch (\Exception $e){

            header('Location: http://localhost/Desafio-extra/');
//            echo 'nao deu bom';

        }

    }

}