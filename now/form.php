<?php
$servername = 'localhost';
$username = 'root';
$password = 'abhi';
$dbname = 'register';
session_start();
//$_SESSION['message']='';
$mysqli = new mysqli($servername, $username, $password, $dbname);




    if($_POST['password']==$_POST['confirmpassword']){
        $firstname=$mysqli->real_escape_string($_POST['firstname']);
        $lastname=$mysqli->real_escape_string($_POST['lastname']);
        $password=$mysqli->real_escape_string($_POST['password']);
        $mobile=$mysqli->real_escape_string($_POST['mobile']);
        $email=$mysqli->real_escape_string($_POST['email']);
        $address=$mysqli->real_escape_string($_POST['building']);
        $street=$mysqli->real_escape_string($_POST['street']);
        $landmark=$mysqli->real_escape_string($_POST['landmark']);
        $locality=$mysqli->real_escape_string($_POST['locality']);
        $pincode=$mysqli->real_escape_string($_POST['pincode']);
        $city=$mysqli->real_escape_string($_POST['city']);
        $check=mysqli_query($mysqli,"select * from customer where mobile='$mobile'");
        $checkrows=mysqli_num_rows($check);
    
       if($checkrows>0) {
          echo "customer exists";
       }
       else{
        $sql="INSERT IGNORE INTO customer (firstname, lastname, mobile, email, address, street, landmark, locality, pincode,city, password) VALUES('$firstname','$lastname','$mobile','$email','$address','$street','$landmark','$locality','$pincode','$city','$password')";
        $mysqli->query($sql);
        if($mysqli->query($sql)==true){
            $_SESSION['message']='registration success full';
            echo "succesful";
            header("Location:../regispg2/regispg2.html");
            
        }
    }
       

    }
    else{
        echo "wrong password";
    }

?>