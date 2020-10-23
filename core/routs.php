<?php
$nameTub = 'Библиотека';
$url = $_SERVER['REQUEST_URI'];

switch ($url) {
    case '/':
        include ('view/layout/navbar.php');
        include('view/index.php');
    break;

    case '/newpost':
        $nameTub = 'Добавление книги';
        include ('view/layout/navbar.php');
        include('view/newpost.php');

        break;

    case '/edit':
        echo 'edit';
        $nameTub = 'Редоктирование книги';
        include ('view/layout/navbar.php');
        include('view/indexEdit.php');

        break;
    default:
        if(stristr($url,'/editPost')){
            include ('view/layout/navbar.php');
            include('view/edit.php');
            $nameTub = 'Редоктирование книги';
        }else{
            $nameTub = '404 страница не найдена';
            include ('view/layout/navbar.php');
            include('view/error.php');

        }
}