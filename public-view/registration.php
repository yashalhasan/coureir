<?php 
include 'connection.php';

if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$username=$_POST["username"];
$pass=$_POST["password"];

$q1="select * from user where user_name='$username'";
$res1=mysqli_query($conn,$q1);


if(mysqli_num_rows($res1)>0)
{
    echo "this username already exist";
}
else{

  $q2="INSERT INTO `user`( `user`, `user_name`, `pass`) VALUES ('$name','$username','$pass')";

 $res=mysqli_query($conn,$q2);

echo "user registered";

}
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    header .header{
  background-color: rgb(255, 255, 255);
  height: 45px;
  
}
header a img{
  width: 134px;
margin-top: 4px;

}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  background-repeat: no-repeat;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 130%;
  border: 0;
  margin: 0 0 20px;
  padding: 20px;
  box-sizing: border-box;
  font-size: 14px;
 }

.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #f5a207;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
  
}

body {
  background-color: #c7c412;
  background-image: linear-gradient(45deg,#e8ec00,#f1961e);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-repeat: no-repeat;
  
}
  </style>
</head>
<body>
    



<div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
<h1>registration</h1>
<form  class="login-form" method="post">
<table >
    <tr>
 
    <td><input type="text" name="name" required placeholder="NAME"/></td>
</tr>
<tr>
    <td><input type="text" name="username" required placeholder="User name"/></td>
</tr>
  
<tr>

  
    <td><input type="password"  name="password" required placeholder="password"/></td>
</tr>
  
<tr>
    <td ><input type="submit" name="submit" style="background:orange"/></td>
    
</tr>   
<p class="message"> login page  <a href="login.php">sign up</a></p>

</table>
</form>
</div></div>
</div></div>
</body>
</html>