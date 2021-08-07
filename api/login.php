<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<script src="js/item-ajax.js"></script>
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
  <link rel="shortcut icon" type="image/png" href="../assets/images/dollar.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
<!--===============================================================================================-->
</head>

<style>
.login100-form-title{
  background-image: linear-gradient(to right,#0F2027, #203A43, #2C5364);
}
.login100-form-btn{
  background-image: linear-gradient(to right,#0F2027, #203A43, #2C5364);
}
.txt2{
	color: #5885AF;
}
.txt3{
	color: #5885AF;
}
</style>

<body>

<?php
  $host = "localhost";
  $port = "5432";
  $dbname = "moneymanagement";
  $user = "postgres";
  $password = "postgres";
  $pg_options = "--client_encoding=UTF8";

  $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
  $dbconn = pg_connect($connection_string);

  if(isset($_POST['submit'])&&!empty($_POST['submit'])){
      
      $hashpassword = md5($_POST['pwd']);
	  $email = pg_escape_string($_POST['email']);
      $sql ="select *from public.user where email = '".$email."' and password ='".$hashpassword."'";
      $data = pg_query($dbconn,$sql); 
	  
      $login_check = pg_num_rows($data);
      if($login_check > 0){ 
        echo "Login Successfully";
        session_start();
        $_SESSION["email"] = $_POST['email'];

        header("Location: ../main.php");
      }else{
		echo '<script type ="text/JavaScript">';  
	   	echo 'alert("Wrong Email or Password")';  
	   	echo '</script>';  
      }
  }
?>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post">
					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please Enter Email">
						<input class="input100" type="email" id="email" placeholder="Email" name="email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please Enter Pasword">
						<input class="input100" type="password" id="pwd" placeholder="Password" name="pwd">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">

						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit" value="Submit">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t Have an Account?
						</span>

						<a href="registration.php" class="txt3">
							Sign Up Now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- <div class="container">
  <h2>Login Here </h2>
  <form method="post">
  
     
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
  </form>
</div> -->

<!--===============================================================================================-->
<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

</body>
</html>