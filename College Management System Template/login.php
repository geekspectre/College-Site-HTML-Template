<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // email and password sent from form 
      
      $myemail = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT sid FROM user WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);
      
      // If result matched $myemail and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_start("myemail");
         $_SESSION['login_user'] = $myemail;
         
         header("location: homepagelogin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" type="text/css" href="styling.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(#37474f,#394950,#734b6d,#42275a);background-attachment:fixed;">
<ul>
	<div style="display:inline-block;">
    <li><a href="homepage.php"><img src="logo.png" height="100" width="200" style="top: 0;display: inline;left: 0;"></img></a></li>
	<a href="login.php"><img src="register.png" style="float: left;position: absolute;display: inline;top: 50;right: 10; height:50;width:100"/></a>
	</div> 
  </ul>
<div class="login-page">
  <div class="form">
    <form class="login-form" method="POST" action="login.php">
      <input type="text" placeholder="email" name="email"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit">login</button>
      <p class="message">Not registered? <a href="register.php"><b>Create an account<b></a></p>
    </form>
  </div>
</div>
</body>
</html>