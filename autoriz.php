<?php
//Создание коротких переменных
$host="localhost";
$user="root";
$pass="";
$db="test";
$usertable="reg";

$link = mysqli_connect($host, $user, $pass, $db)
or die("Ошибка " . mysqli_error($link));

if(isset($_POST['login']) && isset($_POST['parol'])){
$login=$_POST['login'];
$password=$_POST['parol'];
$query= mysqli_query($link,"SELECT * FROM reg WHERE login ='$login' and parol ='$password'");}

$response = 0;

    if(($login == '') || ($password == '')){
        $response = 0;
		echo("не ок");
    }
   	else if(mysqli_num_rows($query)==1 && isset($_POST['login']) && isset($_POST['parol']) ){
	mysqli_fetch_assoc($query);	
	echo("всё ок!");
	}
	else{
		echo("не ок =(");
	}
   