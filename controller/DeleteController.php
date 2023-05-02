<?php
class DeleteController

{
    public function index()
    {
        $loader = new \Twig\Loader\FilesystemLoader('controller');
        $twig = new \Twig\Environment($loader, [
            'cache' => '/path/to/compilation_cache', 'auto_reload' => true
        ]);
        $template = $twig->load('delete_client.php');
        return $template->render();
    }


}