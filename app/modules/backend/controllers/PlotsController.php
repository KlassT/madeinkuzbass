<?php

namespace App\Backend\Controllers;

use App\Forms\PlotsForm;
use App\Models\Plots;

class PlotsController extends ControllerBase
{

    public function initialize()
    {
        parent::initialize();
        $this->crumbs->add('plots', 'admin/plots', 'Сюжеты');
    }

    public function indexAction()
    {
        $this->setTitle('Сюжеты');
        $this->view->plots = Plots::find([
            'order' => 'id DESC'
        ]);
    }

    public function addAction()
    {
        $this->crumbs->add('plot', null, 'Добавление сюжета', false);
        $this->setTitle('Добавление сюжета');
        $form = new PlotsForm;
        $this->view->form = $form;

        if($this->request->isPost()) {
            if(!$form->isValid($this->request->getPost())) {
                $this->errorMessages($form->getMessages());
                return;
            }
            $plot = new Plots();

            $title = $this->request->getPost('title', 'string');
            $description = $this->request->getPost('description', 'string');
            $category_id = $this->request->getPost('category_id', 'int');
            $keywords = $this->request->getPost('keywords', 'string');
            $video = $this->request->getPost('video', 'string');
            $place = $this->request->getPost('place', 'string');

            $plot->title = $title;
            $plot->description = $description;
            $plot->category_id = $category_id;
            $plot->keywords = $keywords;
            $plot->video = $video;
            $plot->place = $place;

            if(!$plot->save()) {
                $this->errorMessages($plot->getMessages());
                return;
            }

            $this->flashSession->success('Сюжет успешно добавлен');
            $this->response->redirect('plots');
        }
    }

    public function editAction($id)
    {
        $this->setTitle('Изменение сюжета');
        $plot = Plots::findFirst($id);
        $this->crumbs->add('plot', null, $plot->title, false);
        $form = new PlotsForm($plot, ['edit' => true]);
        $this->view->form = $form;
        $this->view->plot = $plot;

        if($this->request->isPost()) {
            if(!$form->isValid($this->request->getPost())) {
                $this->errorMessages($form->getMessages());
                return;
            }

            $title = $this->request->getPost('title', 'string');
            $description = $this->request->getPost('description', 'string');
            $category_id = $this->request->getPost('category_id', 'int');
            $keywords = $this->request->getPost('keywords', 'string');
            $video = $this->request->getPost('video', 'string');

            $plot->title = $title;
            $plot->description = $description;
            $plot->category_id = $category_id;
            $plot->keywords = $keywords;
            $plot->video = $video;

            if(!$plot->save()) {
                $this->errorMessages($plot->getMessages());
                return;
            }

            $this->flash->success('Сюжет успешно сохранен');
        }
    }

    public function deleteAction($id) {
        $plot = Plots::findFirst($id);
        if(!$plot->delete()) {
            $this->errorMessages($plot->getMessages(), true);
        }
        $this->flashSession->success('Сюжет успешно удален');
        $this->response->redirect('plots');
    }

}