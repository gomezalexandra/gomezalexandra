<?php

namespace App\src\model;

class View
{
    private $file;
    private $title;
    private $session; //TODOVIEW comment passer autrement la session

    public function render($template, $data = [], $session)
    {
        $this->session = $session;
        $this->file = '../templates/'.$template.'.php';
        $content  = $this->renderFile($this->file, $data);
        $view = $this->renderFile('../templates/base.php', [
            'title' => $this->title,
            'content' => $content
        ]);
        echo $view;
    }

    private function renderFile($file, $data)
    {
        if(file_exists($file)){
            extract($data);
            ob_start();
            var_dump($file);
            require $file;
            return ob_get_clean();
        }
        header('Location: index.php?route=notFound');
    }
}