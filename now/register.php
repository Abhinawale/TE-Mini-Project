
<html>
    <head>

    <title>one</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="register.css">
    
    </head>
<body>
    
    <div class="menu">
       

        <ul>
                 <h1>DTH Services</h1>
            <li><a href="home.html">HOME</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Packages</a></li>
            
            <li class="right"><a href="now.html">SIGN UP</a></li>
            <li class="right"><a href="../customer-login/one.php"><b>Customer Login</b></a></li>
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
            <form action="form.php" method="POST">
                    <div class="form-input">
                        <input type="text" name="firstname" placeholder="Enter your First Name">
                        <input type="text" name="lastname" placeholder="Enter your Last Name">
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
                                        <input type="number" name="pincode" placeholder="Pincode" min="000000" max="9999999999">                                      
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