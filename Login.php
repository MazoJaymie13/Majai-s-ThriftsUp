<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS Login</title>

<link rel="stylesheet" href="./css/pmsLogin.css">
<!-- <link href="../bootstrap4/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>


<?php
session_start();
if(@$_REQUEST['username'] && $_REQUEST['password'])
{
    require_once 'checkuser.php';
       print_r($cnt);
    if($cnt>0){
        $_SESSION=$session;
        header('location:main.html');
    }
    else{
        header('location:');
    }
} 

?>
    <img class="img-bg" src="./images/login1.jpg" alt=""> 
        <form>
            <h1>Welcome</h1>
            <i class="fas fa-user"></i>
            <input type="text" name="username" placeholder="Enter Username" >  <br>
            
            <i class="fas fa-lock"></i>
            <input  type="pasword" name="password" placeholder="Enter password">
            </div>
            <button   type="submit" value="submit" class="btn">Login</button> <br> <br>
            <a href="http://localhost/PMS/FORGOTPASS.HTML">Forgot Password? </a>
        </form>
</body>
</html>
