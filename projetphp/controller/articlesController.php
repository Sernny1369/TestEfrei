<?php
include_once('model\articlesModel.php');

class ArticlesController
{
    private $model;
    public function __construct()
    {
        $this->model = new ArticlesModel;
    }

    public function getArticles()
    {
        $articles=$this->model->getArticles();
        include_once('view\articles.php');
    }  
}

