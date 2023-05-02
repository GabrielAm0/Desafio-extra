<?php
class UpdateController

{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('view');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache', 'auto_reload' => true
        ]);
        $template = $twig->load('update.php');
        return $template->render();
    }


}