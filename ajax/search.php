<?php
    $search = htmlspecialchars($_POST['search']);
    if($search == ''){
        echo 'Заполните поле';
        exit;
    }
//Отправка

?>