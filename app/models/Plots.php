<?php

namespace App\Models;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Relation;

class Plots extends Model
{

    public $title;
    public $category_id;
    public $keywords;
    public $description;
    public $video;
    public $preview;

    public function initialize()
    {
        $this->hasOne('category_id', 'App\Models\Categories', 'id', [
            'alias' => 'Category',
        ]);
    }

}