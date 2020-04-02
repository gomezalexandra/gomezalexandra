<?php
namespace App\src\controller;

class ErrorController
{
    public function Error404()
    {
        require '../templates/error_404.php';
    }

    public function Error500()
    {
        require '../templates/error_500.php';
    }
}