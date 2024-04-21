<?php 
include 'connection.php';
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$pass=$_POST["password"];

$q1="select * from user where user_name='$name'";
$res=mysqli_query($conn,$q1);

if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_assoc($res);
    if($pass==$row['pass']){
        $_SESSION['is_login']=true;
        $_SESSION['U_NAME']=$row['name'];
        
        header('location:index.php');
        die();
    
    }else{
        echo"please enter correct password";
    }
}else{
     echo "please enter correct username";   
    }
}




?>







 <!DOCTYPE html>
<html>
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
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #ff9b04;
  background-image: linear-gradient(45deg,#f7c900,#ffd901);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
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

<title>  Login </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter login</p>
          </div>
        </div>
        <form class="login-form" method="post">
          <input type="text" placeholder="username" name="name" required/>
          <input type="password" placeholder="password" name="password" required/>
          <!-- <button>login</button> -->
         <input type="submit" name="submit" style="background:orange"/>
          <p class="message">Not registered? <a href="registration.php">Create an account</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>
<!-- <center><h1>login form</h1>
<form method="post">
<table border="1px">
    <tr>
    <td>USER NAME</td>
    <td><input type="text" name="name" required/></td>
</tr>
<tr>
    <td>password</td>
  
    <td><input type="password" name="password" required/></td>
</tr>
  
<tr>
    <td><input type="submit" name="submit"/></td>
</tr>   

</table>
</form>
</center> -->