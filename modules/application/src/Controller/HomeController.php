<?php

namespace Application\Controller;


use Core\Controller\AbstractController;

class HomeController extends AbstractController
{

    public function defaultAction(): void
    {
        echo 'defaultAction()<br>';
    }

    public function showAction()
    {
        echo 'showAction()<br>';
    }
}