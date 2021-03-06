<!DOCTYPE html>
<html lang="en">

<head>
       <style type="text/css">
    
   Button{
width:60%;

background-color:#FFBC00;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:18px;
cursor:pointer;
border-radius: 12px;
margin-top:10px;
margin-right:21px;
margin-bottom:15px;
}
 input[type=submit]{
width:80%;
background-color:#0000FF;
color:#fff;
border:2px solid #FFCB00;
padding:10px;
font-size:16px;
cursor:pointer;
border-radius:5px;
margin-top:10px;
margin-right:20px;
margin-bottom:15px;
}
}
  </style>
    
  <title>Rgistration|Know Your Disease</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><h1>Register As Lab Technician</h1></div>
      <div class="card-body">
        <form method="post" action="register.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="ln">First name</label>
                <input class="form-control" id="fn" type="text" name="fn" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="ln">Last name</label>
                <input class="form-control" id="ln" type="text" name="ln" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
            </div>
          </div>
        
          <div class="form-group">
            <label for="email">Email address</label>
            <input class="form-control" id="email" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>

           <div class="form-group">
            <label for="cinfo">Contact Number</label>
            <input class="form-control" id="cn" type="tel" name="cn" aria-describedby="emailHelp" placeholder="Enter phone number">
          </div>

           <div class="form-group">
            <label for="date">DOB</label>
            <input class="form-control" id="date" type="date" name="date" aria-describedby="emailHelp" placeholder="DOB">
          </div>
          Gender:
      <div class="radio">
  <input type="radio" value="male" name="gender">Male
</div>

<div class="radio">
  <label><input type="radio" value="female" name="gender">Female</label>
</div>

            <div class="form-group">
            <label for="uname">UserName</label>
            <input class="form-control" id="uname" type="text" name="uname" aria-describedby="emailHelp" placeholder="UserName">
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="pass">Password</label>
                <input class="form-control" id="pass" type="password" name="pass" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="cpass" type="password" name="c" placeholder="Confirm password">
              </div>

                <div class="col-md-6">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address" cols="10" rows="10"></textarea>
              </div>

            </div>
 
            </div>
          </div>
         <div align="center">
          <input class="" type="submit" value="Register">
        </div>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login Page</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
        
           <div align="center"><br><form>
          <button ><a href ="http://localhost/kyd6/patient/register.html">  Register As Patient</a></button><br><br>
          <button ><a href ="http://localhost/kyd6/chemist1/register.html">  Register As Chemist</a></button><br><br>
          <button  ><a href ="http://localhost/kyd6/doctor/register.html">Register As Doctor</a></button><br><br><br>

      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
