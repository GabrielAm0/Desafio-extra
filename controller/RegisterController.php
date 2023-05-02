<?php
class RegisterController

{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache', 'auto_reload' => true
        ]);
        $template = $twig->load('register.php');
        return $template->render();
    }


}