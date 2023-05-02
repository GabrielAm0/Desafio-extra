<?php
class HomeController

{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache', 'auto_reload' => true
        ]);
        $template = $twig->load('home.php');
        return $template->render();
    }
    public function logout()
    {
        unset($_SESSION['usr']);
        session_destroy();

        header('Location: http://localhost/Desafio/');
    }

}