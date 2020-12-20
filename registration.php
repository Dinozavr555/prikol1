<?php
$Login=$_POST['login'];
$password=$_POST['pirol'];
$povt_pass=$_POST['povt_pass'];

$host="localhost";
$user="root";
$pass="";
$db="test";
$usertable="reg";

$link = mysqli_connect($host, $user, $pass, $db)
or die("Ошибка " . mysqli_error($link));


$response = 0;

    if(($Login == '') || ($password == '')|| ($povt_pass == '')) {
        $response = 0;
    }
    else{
      $query="insert into $usertable (login, parol, povt_par) values
        ('$Login', '$password', '$povt_pass')";

        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        $response = 1;     
    }
    echo json_encode($response);