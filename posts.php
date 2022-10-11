
<?php
    session_start();
    require('connect.php');
    if (isset($_SESSION["id"])) {
        $user_id = $_SESSION["id"];
        if (isset($_POST["makepost"])) {
            $body = $_POST["body"];
            $countfiles = count($_FILES['images']['name']);
            if (empty($body)) {
                $_SESSION["post_message"] = "Post cannot be empty";
                header("location: dashboard.php");
            }else{
                $form = "INSERT INTO `posts_tb`(`body`, `user_id`) VALUES('$body', '$user_id')";
                $save = mysqli_query($connect, $form);
                if ($save) {
                    $postQuery = "SELECT * FROM posts_tb WHERE user_id='$user_id'";
                    $foundPosts = mysqli_query($connect, $postQuery);
                    if (mysqli_num_rows($foundPosts) > 0) {
                        $position = mysqli_num_rows($foundPosts);
                        $fetchPosts = mysqli_fetch_all($foundPosts);
                        $postId = $fetchPosts[$position-1][0];
                        // print_r($fetchPosts[$position-1][0]);
                        for ($i=0; $i <$countfiles; $i++) { 
                            $filename = $_FILES['images']['name'][$i];
                            $ext = pathinfo($filename, PATHINFO_EXTENSION);
                            $random = time();
                            $upload = move_uploaded_file($_FILES['images']['name'][$i], "uploads/".$filename);
                            $imageForm = "INSERT INTO `images_tb`(`post_id`, `image`) VALUES('$postId', 'uploads/$random.$ext')";
                            $uploadImg = mysqli_query($connect, $imageForm);
                            if ($uploadImg) {
                                $_SESSION["status_message"] = "Post uploaded successfully";
                                header("location: dashboard.php");
                                $_SESSION["status_message"] = "";

                            } else {
                                $_SESSION["status_message"] = "Error occurred while uploading post. Try again";
                                header("location: dashboard.php");
                            }
                        }
                    }
                } else {
                    $_SESSION["status_message"] = "Error occurred while uploading post. Try again";
                    header("location: dashboard.php");
                }
            }
        }
    } else {
        $_SESSION["message"] = "You are not logged in yet";
        header("location: login.php");
    }
    




    //         // for ($i=0; $i < $countfiles ; $i++) { 
    //         //     $filename = $_FILES['images']['name'][$i];
    //         //     $ext = pathinfo($filename, PATHINFO_EXTENSION);
    //         //     $random = time();
    //         //     $savedImg = move_uploaded_file($_FILES['images']['tmp_name'][$i],  "uploads/$random.$ext");
    //         //     $id = "SELECT id FROM posts_tb WHERE body= '$body'";
    //         //     $imageSql = "INSERT INTO `images_tb`(`post_id`, `image`) VALUES('$id', '$savedImg')";
    //         //     $saveImages = mysqli_query($connect, $imageSql);
                
    //         // }
    //         // $_SESSION["post_success"] = "Post uploaded successfully";
    //         // header("location: dashboard.php");
           
    //     }

    // }
?>