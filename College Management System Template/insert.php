<?php


$con = mysqli_connect('localhost', 'root', '');
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
    echo'not connected to server';
}
if(!mysqli_select_db($con,'cms'))
{
  echo 'Database not selected';
}
include('connection.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mname=$_POST['mname'];
$gender=$_POST['gender'];
$bday=$_POST['bday'];
$email=$_POST['email'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$marks=$_POST['12'];
$jee=$_POST['jee'];
$pref1=$_POST['pref1'];
$pref2=$_POST['pref2'];
$pref3=$_POST['pref3'];
$password=$_POST['password'];



$sql = "INSERT INTO user(fname,mname,lname,gender,bday,email,address,marks,jee,pref1,pref2,pref3,password)
VALUES ('$fname','$mname','$lname','$gender','$bday','$email','$address','$marks','$jee','$pref1','$pref2','$pref3','$password')";

if (mysqli_query($con, $sql)) 
{
    echo "REGISTRATION SUCCESSFUL";
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
header("refresh:2000;url=homepage.php");

?>