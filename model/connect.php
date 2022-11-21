<?php
function connect(){
    $connect = mysqli_connect('localhost','root', '', 'mvc_crud');
    mysqli_set_charset($connect, 'utf8');
    return $connect;
}

