
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
    <h4>  To Tranfer Amount to Wallet Validate Your Account Number and Password.</h4>
   </div>
<div class="container">

<form action="bank_details_check.php" method="POST">
  <div class="form-input">
<br>
      <input type="number" name="account_no" placeholder="Enter your Account Number">
      <input type="number" name="password" placeholder="Enter your Password">
      
<br>
      <button type="submit" class="btn-login">Validate</button>
        </div>
    </form>
</div>


</body>
</html>
