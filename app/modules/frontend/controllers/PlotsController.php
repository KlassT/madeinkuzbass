<?php

namespace App\Frontend\Controllers;

use App\Models\Plots;
use Phalcon\Mvc\View;
use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class PlotsController extends ControllerBase
{

    public function indexAction()
    {
        $this->tag->setTitle('Партнеры');
        $this->view->plots = Plots::find([
            'order' => 'id DESC'
        ]);
        $this->view->isPartners = false;
    }

    public function plotAction($id)
    {
        $plot = Plots::findFirst($id);
        $this->tag->setTitle($plot->title);
        $this->view->plot = Plots::findFirst($id);
        $this->view->plots = Plots::find([
            'id < ' . $plot->id,
            'order' => 'id DESC',
            'limit' => 4
        ]);
        $this->view->pageData = $plot;
    }

}