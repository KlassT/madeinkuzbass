<?php

namespace App\Frontend\Controllers;

use App\Models\Plots;
use Phalcon\Mvc\View;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class PartnersController extends ControllerBase
{

    public function indexAction()
    {
        $this->tag->setTitle('Партнеры');
        $this->view->isPartners = true;
        $this->view->plots = Plots::find([
            'order' => 'id DESC'
        ]);

    }

}