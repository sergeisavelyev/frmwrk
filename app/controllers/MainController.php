<?php

namespace app\controllers;

use core\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Главная страница', 'Описание', 'Keywords');
        debug($this->model->getName());
    }
}
