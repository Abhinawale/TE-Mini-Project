<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'password';
$dbname = 'register';

$user_name=$_SESSION["username"];
$mysqli = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM customer WHERE mobile='$user_name'";
$result=$mysqli->query($sql);
$result1=$mysqli->query($sql);
$result2=$mysqli->query($sql);
$result3=$mysqli->query($sql);
?>


<html>

<head>

<title>My_Account</title>
<meta name-"viewport" content-type="width=device-width inital-scale=1">
<link rel="stylesheet"  href="css/edit.css">
<link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

</head>


<body>
<div class="full">
<div class="menu">


        <ul>
               <h1>DTH Services</h1>
            <li><a href="home.html">HOME</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="packages.html">Packages</a></li>


            <li class="right"><a href="logout.php">Logout</a></li>
            <li class="right"><a href="getconnected.php">Get Connected</a></li>
            <li class="right"><a href="custlogin.html">Login</a></li>


            </ul>

  </div>

  <div class="welcome">

    <h1>

    <?php
  while($eme=mysqli_fetch_assoc($result))
  {
      echo "{$eme['firstname']} {$eme['lastname']}<br>";
      }
      ?>

  </h1>

  </div>



  <div class="profile">
  <ul>
  <li><a href="my_account.php"> My Account </a></li>
  <li><a href="profile.php"> My Profile </a></li>
  <li><a href="active_plans.php"> Active Plans </a></li>
  <li><a href="balance.php"> Balance </a></li>
  <li><a href="regispg2.html"> Upgrade</a></li>
  <li><a href="change_password.php"> Change Password </a></li>
  <li><a href="my_account.php"> My Wallet </a></li>
  <li><a href="my_account.php"> Logout </a></li>
  </ul>

  </div>

<div class="window">

    <h2><center>Edit Profile</h2><br>



    <div class="container">

            <form action="edit_form.php" method="POST" name="regForm" onsubmit="return validateForm()">
                    <div class="form-input">
                    <div id="error" class="val_error">P.S- Only block letters allowed.</div>
                        <input type="text" name="firstname" placeholder="&nbsp;&nbsp;First Name:<?php
                        $em=mysqli_fetch_assoc($result1);
                        echo "{$em['firstname']}";?>">
                       
                        <div id="firstname_error" class="val_error"></div>
                       
                        <input type="text" name="lastname" placeholder="&nbsp;&nbsp;Last Name:<?php
                        $emo=mysqli_fetch_assoc($result2);
                        echo "{$emo['lastname']}";?>">
                       
                        
                        <div id="lastname_error" class="val_error"></div>
                        </div>

                    <div class="form-input">


                        <input type="text" name="email" placeholder="&nbsp;&nbsp;Email-ID:<?php
                        $emi=mysqli_fetch_assoc($result3);
                        echo "{$emi['email']}";?>">
                            
                       <div id="email_error" class="val_error"></div>
                    </div>
                    <input type="submit" name="submit" value="EDIT" class="btn-login">

                </form>
                <br>

  </div>
</div>
</div>
</body>
<script>
 var email = document.forms["regForm"]["email"]; 
    var firstname = document.forms["regForm"]["firstname"]; 
    var lastname = document.forms["regForm"]["lastname"];

var firstname_error = document.getElementById("firstname_error");
     var lastname_error = document.getElementById("lastname_error");
     var email_error = document.getElementById("email_error");

firstname.addEventListener("blur", firstnameVerify, true);
    lastname.addEventListener("blur", lastnameVerify, true);
     email.addEventListener("blur", emailVerify, true);

function validateForm() {

     
     if(!firstname.value.match(/^[A-Z]*$/))
     {
      firstname.style.border = "3px solid #e01688";
        firstname_error.textContent = "Only block letters allowed!";
        firstname.focus();
        return false;
     }
     
     if(firstname.value ==""){
        firstname.style.border = "3px solid #e01688";
        firstname_error.textContent = "Firstname is required";
        firstname.focus();
        return false;
      }
    
if(!lastname.value.match(/^[A-Z]*$/))
     {
      lastname.style.border = "3px solid #e01688";
        lastname_error.textContent = "Only block letters allowed!";
        lastname.focus();
        return false;
     }

      if(lastname.value ==""){
        lastname.style.border = "3px solid #e01688";
        lastname_error.textContent = "Lastname is required";
        lastname.focus();
        return false;
      }

     
     if(!email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        email.style.border = "3px solid #e01688";
        email_error.textContent = "Invalid Email-ID";
        email.focus();
        return false;
      }

      if(email.value ==""){
        email.style.border = "3px solid #e01688";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
      }
}


 function firstnameVerify(){
    if(firstname.value != ""){
      firstname.style.border = "1px solid #5e6e66";
      firstname_error.innerHTML = "";
      return true;

    }
  }

function lastnameVerify(){
    if(lastname.value != ""){
      lastname.style.border = "1px solid #5e6e66";
      lastname_error.innerHTML = "";
      return true;
      
    }
  }

  
  function emailVerify(){
    if(email.value != ""){
      email.style.border = "1px solid #5e6e66";
      email_error.innerHTML = "";
      return true;
      
    }
  }
 
    </script>
</html>
