<?php
    session_start();
    $con = mysqli_connect('localhost','root','hansung','guest');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if (empty($_POST['username'])) {
            echo "<script> alert('Please enter your name!')</script>";
            }
        if (empty($_POST['password'])) {
            echo "<script> alert('Please enter your password!')</script>";
            }
        
        $query = "SELECT name, pass FROM guest WHERE name='$username' AND pass='$password' ";
        $result = mysqli_query($con,$query);
        
        if ( mysqli_num_rows($result) > 0 ) {
                $_SESSION['login']=$username;
                header("Location: content.html");
        } else {
            echo "Wrong username or password !";
        }
    }
?>
