<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "abhi";
$dbname = "login";
session_start();
$_SESSION['message']='';
$mysqli = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);



if($_SERVER[REQUEST_METHOD]=='POST'){
    if($_POST['password']==$_POST['confirmpassword']){
        $firstname=$mysqli->real_escape_string($_POST['firstname']);
        $lastname=$mysqli->real_escape_string($_POST['lastname']);
        $password=$mysqli->real_escape_string($_POST['password']);
        $mobile=$mysqli->real_escape_string($_POST['mobile']);
        $email=$mysqli->real_escape_string($_POST['email']);
        $address=$mysqli->real_escape_string($_POST['address']);
        $street=$mysqli->real_escape_string($_POST['street']);
        $lankmark=$mysqli->real_escape_string($_POST['landmark']);
        $locality=$mysqli->real_escape_string($_POST['locality']);
        $pincode=$mysqli->real_escape_string($_POST['pincode']);
       
        $sql="INSERT INTO users VALUES("$firstname","$lastname","$mobile","$email","$address","$street","$landmark","$locality","$pincode","$password")";
        $mysqli->query($sql);
        if($mysqli->query($sql)==true){
            $_SESSION['message']='registration success full';
        }

    }
    else{
        echo "wrong password";
    }
}
else{
    echo "wrong post";
}
?>
<html>
    <head>

    <title>one</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="now.css">
    
    </head>
<body>
    
    <div class="menu">
       

        <ul>
                 <h1>DTH Services</h1>
            <li><a href="home.html">HOME</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Packages</a></li>
            
            <li class="right"><a href="now.html">SIGN UP</a></li>
            <li class="right"><a href="one1.html"><b>Customer Login</b></a></li>
            <li class="right"><a href="emplog.html">Employee Login</a></li>
            
            
            

        </ul>
    </div>
    <div id="full">
    <div class="info">
        
       <header> <h1>Registration </h1><br></header>
      
    </div>
    <br>
    <br>
    <br>
    
    <div class="container">
            <p> Enter your personal details </p>
            <form action="now.php" method="POST">
                    <div class="form-input">
                        <input type="text" name="firstname" placeholder="Enter your First Name">
                        <input type="text" name="lasttname" placeholder="Enter your Last Name">
                        </div>
                       
                    <div class="form-input">
                        
                        <div class="form-input">
                                <input type="number" name="mobile" placeholder="Enter contact number" max="9999999999">
                                </div>
                        <input type="text" name="email" placeholder="Enter your Email-ID">
                            </div>
                                <br>
                                <br>
                                <div class="form-input">
                                        <p> Enter your address details </p>
                                        <input type="text" name="building" placeholder="Flat Number, Building Name">
                                        <input type="text" name="street" placeholder="Street Number and/or Street Name">
                                        <input type="text" name="landmark" placeholder="Neighbourhood / Landmark">
                                        <input type="text" name="locality" placeholder="Locality">
                                        <input type="number" name="pincode" placeholder="Pincode" min="000000" max="999999">                                      
                                        </div>
                                        <div class="form-input">
                                                <select name="city" placeholder="City">
                                                    <option value="city">(Select City here)</option>
                                                    <option value="pune">Pune</option>
                                                    <option value="mumbai">Mumbai</option>
                                                    <option value="hyderabad">Hyderabad</option>
                                                    <option value="nashik">Nashik</option>
                                                </select>
                                                </div>
                                                <p> Create a Password </p>
                                        <div class="form-input">
                                                <input type="password" name="password" placeholder="Enter a password">
                                                </div>
                                                <div class="form-input">
                                                        <input type="password" name="confirmpassword" placeholder="Confirm password">
                                                        </div>
                    <input type="submit" name="submit" value="REGISTER" class="btn-login">
                    
                </form><br>
    </div>
</div>
</body>
</html>