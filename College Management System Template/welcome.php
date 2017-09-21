<?php
   include('session.php');
?>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" type="text/css" href="styling.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(#37474f,#394950,#ec6f66,#f3a183);background-attachment:fixed;">
<ul>
	<div style="display:inline-block;">
    <li><a href="homepage.php"><img src="logo.png" height="100" width="200" style="top: 0;display: inline;left: 0;"></img></a></li>
	<a href="login.php"><img src="register.png" style="float: left;position: absolute;display: inline;top: 50;right: 10; height:50;width:100"/></a>
	</div> 
  </ul>
  <div class="login-page">
  <div class="form">
      <h1>Welcome <?php echo $login_session; ?></h1>
<p> You will be redirected to homepage in 3 seconds or you can redirect now by clicking <a href="homepagelogin.php">here</a></p>
<?php header( "refresh:3;url=homepagelogin.php" ); ?>	  
      <h2><a href = "logout.php">Sign Out</a></h2>
   </div>
   </div>
   </body>
   
</html>