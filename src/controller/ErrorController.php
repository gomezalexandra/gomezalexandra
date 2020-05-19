<?php
namespace App\src\controller;

class ErrorController extends Controller
{
    public function Error404()
    {
        echo $this->twig->render('error_404.html.twig');
    }

    public function Error500()
    {
        echo $this->twig->render('error_500.html.twig');
    }
}