<?php
include ('connect.php');

class db{
    public static function allPost(){
        global $dbh;
        $query = $dbh->query('SELECT * from books');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function sendPost(){
        global $dbh;
        if($_POST['type'] == 'newpost'){
            $query = $dbh->prepare('INSERT INTO books (`name`,`author`,`year`) 
                                     VALUES (:name, :author, :year)');
            $result = $query->execute([':name' =>$_POST['name'],':author' =>$_POST['author'],':year' =>$_POST['year']]);
            if($result){
                echo '<span style="color: green">Сохранено</span>';
            }else{
                echo '<span style="color: red">Книга не была добавлена</span>';
            }

        }
    }

    public static function onePost() {
        global $dbh;
        $query = $dbh->prepare('SELECT * FROM books WHERE id = :id');
        $query->execute(['id' => $_GET['id']]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return  $result;
    }

    public static function editPost(){
        global $dbh;
        if($_POST['type'] == 'edit'){
            $query= $dbh->prepare('UPDATE books SET name = :name, author = :author, year = :year WHERE id = :id');
            $result = $query->execute([':name' => $_POST['name'], ':author' => $_POST['author'], ':year' => $_POST['year'], ':id' => $_POST['id']]);

            if($result){
                echo '<span style="color: green">Сохранено</span>';
            }else{
                echo '<span style="color: red">Не сохранено</span>';
            }
        }
    }
}