
<html>
<head>

  <title>Bank</title>
      <meta name-"viewport" content-type="width=device-width initial-scale=1">
      <link rel="stylesheet"  href="css\bank.css">
      <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
      <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

</head>
  <body>
    <div class="welcome">
<h1> Dummy Bank </h1>
<br>
    <h1> Welcome Customer!! </h1>
    <h4>  To create your account please fill in the following details. Your Account Number and Password will be automatically generated.</h4>
   </div>
<div class="container">

<form action="bank_details.php" method="POST">
  <div class="form-input">
<br>
      <input type="text" name="firstname" placeholder="Enter your First Name">
      <input type="text" name="lastname" placeholder="Enter your Last Name">
      <!---<input type="number" name="mobile" placeholder="Enter contact number" max="9999999999">--->

<br>
      <button type="submit" class="btn-login">REGISTER</button>
        </div>
    </form>
</div>


</body>
</html>
