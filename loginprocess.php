<?php
require("connect.php");
session_start();

    if(isset($_POST['login'])){    
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users_tb WHERE email='$email'";
        $found = mysqli_query($connect, $query);
       
        if(mysqli_num_rows($found)>0){
            $user = mysqli_fetch_array($found);
            $verify = password_verify($password, $user['password']);
            if($verify) {
                $_SESSION["id"] = $user["user_id"];
                // echo $_SESSION["id"];
                header("location: dashboard.php");
            }else{
                $_SESSION["message"] = "Password not correct";   
                header("location: login.php");

            }
        }
        else{
            $_SESSION["message"] = "Details not found. Please sign up";
            header("location: index.php");
             
         }
    }
?>