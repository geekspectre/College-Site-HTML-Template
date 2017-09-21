<html>
<head>
<title>Student Registration Form</title>
<link rel="stylesheet" type="text/css" href="styling.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background: linear-gradient(#37474f,#394950,#093637,#44A08D);background-attachment:fixed;">
<ul>
	<div style="display:inline-block;">
    <li><a href="homepage.php"><img src="logo.png" height="100" width="200" style="top: 0;display: inline;left: 0;"></img></a></li>
	<a href="login.php"><img src="register.png" style="float: left;position: absolute;display: inline;top: 50;right: 10; height:50;width:100"/></a>
	</div> 
  </ul>
<div class="login-page">
  <div class="form">
    <form class="register-form" action="insert.php" method="POST">
	  <label>First Name:</label><input type="text" placeholder="first name" name="fname"required/>
	  <label>Middle Name:</label><input type="text" placeholder="middle name" name="mname" required/>
	  <label>Last Name:</label><input type="text" placeholder="last name" name="lname" required/>
	  <label>Gender:</label>
	  <div style="display:inline;float:left;padding-left:20px;">
	  <input type="radio" name="gender" value="male" style="float:left;display:inline;"> Male<br>
	  <input type="radio" name="gender" value="female" style="float:right;display:inline;"> Female<br>
	  </div><br><br><br><br><br>
	  <label>Enter Your Birthday</label><input type="text" placeholder="DD/MM/YYYY" name="bday" required/>
      <label>Email Address:</label><input type="text" placeholder="email address" name="email" required/>
	  <label>Residential Address:</label><input type="text" placeholder="residential address" name="address" required/>
	  <label>Contact Number:</label><input type="text" placeholder="phone number" name="contact"required/>
	  <hr noshadow>
	  <label>Enter Your 12th Percentage:</label><input type="number" placeholder="%" name="12" required/>
	  <label>Enter your JEE Score:</label><input type="number" placeholder="JEE Marks" name="jee" required/>
	  <label>Select Your Prefered Stream:</label><br><br><br>
	  <div style="display:inline;float:left;">
	  <div style="display:inline;float:left;"><p style="float:left;">Preference 1:</p><br>
	  <select style="float:left;" name="pref1">
	  <option value="Computer">Computer</option>
	  <option value="Electronics">Electronics</option>
	  <option value="EXTC">EXTC</option>
	  <option value="IT">IT</option>
	  </select></div>
	  <div style="display:inline;float:left;padding-left:20px;"><p style="float:left;">Preference 2:</p><br>
	  <select style="float:left;" name="pref2">
	  <option value="Computer">Computer</option>
	  <option value="Electronics">Electronics</option>
	  <option value="EXTC">EXTC</option>
	  <option value="IT">IT</option>
	  </select></div>
	  <div style="display:inline;float:left;padding-left:20px;"><p style="float:left;">Preference 3:</p><br>
	  <select style="float:left;" name="pref3">
	  <option value="Computer">Computer</option>
	  <option value="Electronics">Electronics</option>
	  <option value="EXTC">EXTC</option>
	  <option value="IT">IT</option>
	  </select></div>
	  </div><br>
	  <hr style="color:white;">
	  <label>Enter Your Password:</label><input type="password" placeholder="password" name="password" required/>
	  &ensp;
      <button type="submit">create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
   </div>
</div>
</body>
</html>