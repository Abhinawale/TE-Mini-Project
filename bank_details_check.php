<?php

session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$mysqli = new mysqli($servername, $username, $password, $dbname);

        $firstname=$_POST['account_no'];
        $lastname=$_POST['password'];
        $check=mysqli_query($mysqli,"SELECT * FROM bank_password WHERE account_no='$firstname' AND password='$lastname'");
        $checkrows=mysqli_num_rows($check);
        if($checkrows>0) {
          header("location:transaction.php"); 
        }
        else{
            echo "wrong inputs";
        }