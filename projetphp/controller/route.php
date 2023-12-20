<?php

$page = $_GET['page'];

if ($page == 'accueil') {
    include('view/accueil.php');
}elseif ($page == 'test') {
    include('view/test.php');
}elseif ($page == 'inscription') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->setUser();
}elseif ($page == 'articles') {
    include_once('controller/articlesController.php');
    $articles = new ArticlesController;
    $articles->getArticles();
} elseif ($page == 'authentification') {
    include_once('controller/usersController.php');
    $user = new UsersController;
    $user->getAuthentification();
}else {
    echo 'page introuvable';}
