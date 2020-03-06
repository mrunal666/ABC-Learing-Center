<?php

$con = $con=mysqli_connect("localhost","root","","mydba");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
$name=$_POST['Name'];
$city=$_POST['city']; // Fetching Values from URL.
$email=$_POST['EMail'];
// Check if e-mail address syntax is valid or not
$cou=$_POST['Subject'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
$result = mysqli_query($con,"INSERT INTO leadgen(name, email, city, course) values ('$name', '$email', '$city','$cou')");

if($result){
  echo '?name="'.$name;
}

/*Object not found!
  The requested URL was not found on this server. The link on the referring page seems to be wrong or outdated. Please inform the author of that page about the error.

  If you think this is a server error, please contact the webmaster.

  Error 404
  localhost
  Apache/2.4.38 (Win64) OpenSSL/1.1.1b PHP/7.3.3
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysqli_query("SELECT * FROM register WHERE email='$email'");
$data = mysqli_num_rows($result);
if(($data)==0){
$query = mysqli_query("insert into register(name, email, password) values ('$name', '$email', '$password')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
*/
mysqli_close ($con);
?>