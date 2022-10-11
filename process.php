<?php
session_start();
require "connect.php";
if (isset($_POST['submit'])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
 
    if(empty($firstname) || empty($lastname) || empty($email) || empty($password)) {
        $_SESSION["message"] = "Fill all fields";
        header("location: blog.php");
        return;
    }else {
        $sql_find = "SELECT email FROM users_tb WHERE email= '?";
        // $found = mysqli_query($connect, $sql_find);
        $data = $connect->prepare($sql_find);
        $data->bind_param('s', $email);
        $data->execute();
        $found = mysqli_stmt_get_result($data);

        if(mysqli_num_rows($found) > 0) {
            $_SESSION["message"] ="This email has already been registered";
            header("location: login.php");
            return;
        }else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT into `users_tb`(`first_name`, `last_name`, `email`, `password`) VALUES(?, ?, ?, ?)";

            $prepare = $connect->prepare($sql);
            $prepare->bind_param('ssss', $firstname, $lastname, $email, $hash);
            $prepare->execute();
            header("location: login.php");
        }

    }}else {
    echo "Unknown Action";
}
?>