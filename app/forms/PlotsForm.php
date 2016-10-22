<?php


namespace App\Forms;

use App\Models\Categories;
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Textarea;
use Phalcon\Forms\Element\File;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Validation\Validator\PresenceOf;

class PlotsForm extends Form
{

    public function getCsrf()
    {
        return $this->security->getToken();
    }

    public function initialize($entity = null, $options = [])
    {
        $title = new Text('title', [
            'placeholder' => 'Название'
        ]);
        $title->setLabel('Название');
        $title->addValidators([
            new PresenceOf([
                'message' => 'Название не может быть пустым'
            ]),
        ]);
        $this->add($title);

        $category = new Select('category_id', Categories::find(), [
            'using' => ['id', 'category'],
            'useEmpty' => true,
            'emptyText' => 'Выберите категорию'
        ]);
        $category->setLabel('Категория');
        $category->addValidators([
            new PresenceOf([
                'message' => 'Выберите категорию'
            ])
        ]);
        $this->add($category);

        $keywords = new Text('keywords', [
            'placeholder' => 'Ключевые слова'
        ]);
        $keywords->setLabel('Ключевые слова');
        $this->add($keywords);

        $description = new Textarea('description', [
            'placeholder' => 'Описание'
        ]);
        $description->setLabel('Описание');
        $description->addValidators([
            new PresenceOf([
                'message' => 'Описание не может быть пустым'
            ])
        ]);
        $this->add($description);

        $video = new Text('video', [
            'placeholder' => 'Видео'
        ]);
        $video->addValidators([
            new PresenceOf([
                'message' => 'Видео не может быть пустым'
            ])
        ]);
        $video->setLabel('Видео');
        $this->add($video);

        $place = new Text('place', [
            'placeholder' => 'Место'
        ]);
        $place->setLabel('Место');
        $this->add($place);

        if($options['edit']) {
            $this->add(new Hidden('id'));
        }
    }

}