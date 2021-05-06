<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'login_users');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM users WHERE username='$username' and pass='$password'";
    $res=mysqli_query($con,$query);
    if (mysqli_query($con,$query)) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['username']=$row['username'];
        $_SESSION['pass']=$row['pass'];
        echo '<script type="text/javascript">alert("Log in Successfully");window.location=\'ith.php\';</script>';
        
    }else{
        echo '<script type="text/javascript">alert("Failed");window.location=\'index.php\';</script>';
    }
}
if(isset($_POST['submit_cr'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM users_cr WHERE username='$username' and pass='$password'";
    $res=mysqli_query($con,$query);
    if (mysqli_query($con,$query)) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['username']=$row['username'];
        $_SESSION['pass']=$row['pass'];
        echo '<script type="text/javascript">alert("Log in Successfully");window.location=\'cr1.php\';</script>';
        
    }else{
        echo '<script type="text/javascript">alert("Failed");window.location=\'index.php\';</script>';
    }
}

if(isset($_POST['submit_sol'])){
    $user = mysqli_real_escape_string($con,$_POST["username"]);
    $pass = mysqli_real_escape_string($con,$_POST["password"]);
    $username = strip_tags(trim($user));
    $password = strip_tags(trim($pass));
    $query="SELECT * FROM users WHERE username='$username' and pass='$password'";
    $res=mysqli_query($con,$query);
    if (mysqli_num_rows($res)>0) {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['username']=$row['username'];
        $_SESSION['pass']=$row['pass'];
        echo '<script type="text/javascript">alert("Log in Successfully");window.location=\'solution.php\';</script>';
        
    }else{
        echo '<script type="text/javascript">alert("Failed");window.location=\'index.php\';</script>';
    }
}

mysqli_close($con);
?>