<html>
    <head>

    <title>Get_Connected</title>
    <meta name-"viewport" content-type="width=device-width inital-scale=1">
    <link rel="stylesheet"  href="css/now.css">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

    </head>
<body>

    <div class="menu">

        <ul>
                 <h1>DTH Services</h1>
            <li><a href="home.html">HOME</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
             <li><a href="packages.html">Packages</a></li>



             <li class="right"><a href="logout.php">Logout</a></li>
             <li class="right"><a href="getconnected.php"><b>Get Connected</b></a></li>
             <li class="right"><a href="custlogin.html">Login</a></li>

        </ul>
    </div>


    <div class="info">

       <h1>Register Here </h1><br>

    </div>
    <br>
    <br>
    <br>

    <div class="container">

            <p> Enter your personal details </p>
            <form action="register.php" method="POST" name="regForm" onsubmit="return validateForm()">
                   <div id="error" class="val_error">P.S- Only block letters allowed. * required field.</div>
                    <div class="form-input">
                        <input type="text" name="firstname" placeholder="Enter your First Name">
                        <span class="star">*</span>
                        <div id="firstname_error" class="val_error"></div>
                        

                        <input type="text" name="lastname" placeholder="Enter your Last Name">
                        <span class="star">*</span>
                 <div id="lastname_error" class="val_error"></div>

                        </div>

                    <div class="form-input">

                        <div class="form-input">
                                <input type="number" name="mobile" placeholder="Enter contact number" min="7000000000" max="9999999999">
                                <span class="star">*</span>
                                <div id="mobile_error" class="val_error"></div>                      

                                </div>
                        <input type="text" name="email" placeholder="Enter your Email-ID">
                           <span class="star">*</span>
                            <div id="email_error" class="val_error"></div>
                            </div>
                                <br>
                                <br>
                                <div class="form-input">
                                        <p> Enter your address details </p>
                                        <input type="text" name="building" placeholder="Flat Number, Building Name">
                                        <span class="star">*</span>
                                        <div id="building_error" class="val_error"></div>
                                        <input type="text" name="street" placeholder="Street Number and/or Street Name">
                                        <span class="star">*</span>
                                        <div id="street_error" class="val_error"></div>
                                        <input type="text" name="landmark" placeholder="Neighbourhood / Landmark">
                                        <div id="landmark_error" class="val_error"></div>
                                        <input type="text" name="locality" placeholder="Locality">
                                        <div id="locality_error" class="val_error"></div>
                                        <input type="number" name="pincode" placeholder="Pincode" min="100000" max="999999">
                                        <span class="star">*</span>
                                        <div id="pincode_error" class="val_error"></div>
                                        </div>
                                        <div class="form-input">
                                                <select name="city" placeholder="City">
                                                    <option value="">Please select City name here</option>
                                                    <option value="pune">Pune</option>
                                                    <option value="mumbai">Mumbai</option>
                                                    <option value="hyderabad">Hyderabad</option>
                                                    <option value="nashik">Nashik</option>
                                                </select>
                                                <span class="star">*</span>
                                                <div id="city_error" class="val_error"></div>
                                                </div>
                                                <p> Create a Password </p>
                                        <div class="form-input">
                                        <div id="error" class="val_error">Password is case-sensitive</div>

                                                <input type="password" name="password" placeholder="Enter a password">
                                                <span class="star">*</span>
                                                </div>
                                                <div id="password_error" class="val_error"></div>

                                                <div class="form-input">
                                                        <input type="password" name="confirmpassword" placeholder="Confirm password">
                                                        <span class="star">*</span>
                                                        </div>
                                                        <div id="confirmpasssword_error" class="val_error"></div>

                                                        <br>

                        <input type="submit" name="register" class="btn-login" value="REGISTER">
                        </form><br>
    </div>
    <script>
    
     //GETTING ALL INPUT TEXT OBJECTS
    var mobile = document.forms["regForm"]["mobile"];
    var email = document.forms["regForm"]["email"]; 
    var firstname = document.forms["regForm"]["firstname"]; 
    var lastname = document.forms["regForm"]["lastname"];
    var building = document.forms["regForm"]["building"];
    var street = document.forms["regForm"]["street"];
    var city = document.forms["regForm"]["city"];
    var pincode = document.forms["regForm"]["pincode"];
    var locality = document.forms["regForm"]["locality"];
    var landmark = document.forms["regForm"]["landmark"];
    var password = document.forms["regForm"]["password"];
    var confirmpassword = document.forms["regForm"]["confirmpassword"];
      
     //GETTING ALL ERROR DISPLAY OBJECTS
     var firstname_error = document.getElementById("firstname_error");
     var lastname_error = document.getElementById("lastname_error");
     var mobile_error = document.getElementById("mobile_error");
     var email_error = document.getElementById("email_error");
     var building_error = document.getElementById("building_error");   
     var street_error = document.getElementById("street_error");
     var city_error = document.getElementById("city_error");
     var pincode_error = document.getElementById("pincode_error");   
     var locality_error = document.getElementById("locality_error");
     var landmark_error = document.getElementById("landmark_error");
     var password_error = document.getElementById("password_error");
     var confirmpassword_error = document.getElementById("confirmpassword_error");


     //SETTING ALL EVENT LISTENERS
    firstname.addEventListener("blur", firstnameVerify, true);
    lastname.addEventListener("blur", lastnameVerify, true);
    mobile.addEventListener("blur", mobileVerify, true);
     email.addEventListener("blur", emailVerify, true);
    building.addEventListener("blur", buildingVerify, true);
    street.addEventListener("blur", streetVerify, true);
     pincode.addEventListener("blur", pincodeVerify, true);
    city.addEventListener("blur", cityVerify, true);
    locality.addEventListener("blur", localityVerify, true);
    landmark.addEventListener("blur", landmarkVerify, true);
    password.addEventListener("blur", passwordVerify, true);
    confirmpassword.addEventListener("blur", confirmpasswordVerify, true);
    
     function validateForm() {

      if(firstname.value ==""){
        firstname.style.border = "3px solid #e01688";
        firstname_error.textContent = "Firstname is required";
        firstname.focus();
        return false;
      }
    
     if(!firstname.value.match(/^[A-Z]*$/))
     {
      firstname.style.border = "3px solid #e01688";
        firstname_error.textContent = "Only block letters allowed!";
        firstname.focus();
        return false;
     }
      if(lastname.value ==""){
        lastname.style.border = "3px solid #e01688";
        lastname_error.textContent = "Lastname is required";
        lastname.focus();
        return false;
      }

if(!lastname.value.match(/^[A-Z]*$/))
     {
      lastname.style.border = "3px solid #e01688";
        lastname_error.textContent = "Only block letters allowed!";
        lastname.focus();
        return false;
     }
      if(mobile.value ==""){
        mobile.style.border = "3px solid #e01688";
        mobile_error.textContent = "Mobile number is required";
        mobile.focus();
        return false;
      }
    
    if(!mobile.value.match(/^[0-9]*$/))
     {
      mobile.style.border = "3px solid #e01688";
        mobile_error.textContent = "Only digits allowed!";
        mobile.focus();
        return false;
     }

      if(email.value ==""){
        email.style.border = "3px solid #e01688";
        email_error.textContent = "Email is required";
        email.focus();
        return false;
      }

     if(!email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        email.style.border = "3px solid #e01688";
        email_error.textContent = "Invalid Email-ID";
        email.focus();
        return false;
      }


      if(building.value ==""){
        building.style.border = "3px solid #e01688";
        building_error.textContent = "Building info is required";
        building.focus();
        return false;
      }


     if(!building.value.match(/^[^a-z]*$/)){
        building.style.border = "3px solid #e01688";
        building_error.textContent = "Only Block letters allowed!";
        building.focus();
        return false;
      }

      if(street.value ==""){
        street.style.border = "3px solid #e01688";
        street_error.textContent = "Street info is required";
        street.focus();
        return false;
      }

     if(!street.value.match(/^[^a-z]*$/)){
        street.style.border = "3px solid #e01688";
        street_error.textContent = "Only block letters allowed!";
        street.focus();
        return false;
      }


     if(!landmark.value.match(/^[^a-z]*$/)){
        landmark.style.border = "3px solid #e01688";
        landmark_error.textContent = "Only block letters allowed!";
        landmark.focus();
        return false;
      }


      if(!locality.value.match(/^[^a-z]*$/)){
        locality.style.border = "3px solid #e01688";
        locality_error.textContent = "Only block letters allowed!";
        locality.focus();
        return false;
      }
      if(pincode.value ==""){
        pincode.style.border = "3px solid #e01688";
        pincode_error.textContent = "Pincode is required";
        pincode.focus();
        return false;
      }

if(!pincode.value.match(/^[0-9]*$/))
     {
      pincode.style.border = "3px solid #e01688";
        pincode_error.textContent = "Only digits allowed!";
        pincode.focus();
        return false;
     }

      if(city.value ==""){
        city.style.border = "3px solid #e01688";
        city_error.textContent = "City  is required";
        city.focus();
        return false;
      }

      if(password.value ==""){
        password.style.border = "3px solid #e01688";
        password_error.textContent = "Password  is required";
        password.focus();
        return false;
      }


      if(!password.value.match(/^[a-zA-Z-_@$.d]*\w{6,20}$/)){
        password.style.border = "3px solid #e01688";
        password_error.textContent = "Minimum 6 characters,case-sensitive, (@,$,_,-) allowed";
        password.focus();
        return false;
      }

      if(confirmpassword.value ==""){
        confirmpassword.style.border = "3px solid #e01688";
        confirmpassword_error.textContent = "Password  is required";
        confirmpassword.focus();
        return false;
      }

      if(!confirmpassword.value.match(/^[a-zA-Z-_@$.d]*\w{6,20}$/)){
        confirmpassword.style.border = "3px solid #e01688";
        confirmpassword_error.textContent = "Minimum 6 characters,case-sensitive, (@,$,_,-) allowed";
        confirmpassword.focus();
        return false;
      }
      
      if(password.value != confirmpassword.value){
       password.style.border = "3px solid #e01688";
        //password.focus();
       confirmpassword.style.border = "3px solid #e01688";
        confirmpassword_error.textContent = "Two passwords do not match!";
        //confirmpassword.focus();
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

  function mobileVerify(){
    if(mobile.value != ""){
      mobile.style.border = "1px solid #5e6e66";
      mobile_error.innerHTML = "";
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
  function buildingVerify(){
    if(building.value != ""){
      building.style.border = "1px solid #5e6e66";
      building_error.innerHTML = "";
      return true;
      
    }
  }

  function streetVerify(){
    if(street.value != ""){
      street.style.border = "1px solid #5e6e66";
      street_error.innerHTML = "";
      return true;
      
    }
  }


function landmarkVerify(){
    if(landmark.value != ""){
      landmark.style.border = "1px solid #5e6e66";
      landmark_error.innerHTML = "";
      return true;
      
    }
  }

function localityVerify(){
    if(locality.value != ""){
      locality.style.border = "1px solid #5e6e66";
      locality_error.innerHTML = "";
      return true;
      
    }
  }

function pincodeVerify(){
    if(pincode.value != ""){
      pincode.style.border = "1px solid #5e6e66";
      pincode_error.innerHTML = "";
      return true;
      
    }
  }

  function cityVerify(){
    if(city.value != ""){
    city.style.border = "1px solid #5e6e66";
      city_error.innerHTML = "";
      return true;
      
    }
  }

function passwordVerify(){
    if(password.value != ""){
      password.style.border = "1px solid #5e6e66";
      password_error.innerHTML = "";
      return true;
      
    }
  }

function confirmpasswordVerify(){
    if(confirmpassword.value != ""){
      confirmpassword.style.border = "1px solid #5e6e66";
      confirmpassword_error.innerHTML = "";
      return true;
      
    }
  }


  </script>


</body>
</html>
