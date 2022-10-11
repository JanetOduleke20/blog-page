<?php
    require("getPostsBackend.php");
    require("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <?php
        for ($i=0; $i < mysqli_num_rows($foundPosts); $i++) { 
            $id = $posts[$i]["user_id"];
            $query = "SELECT first_name, last_name FROM users_tb WHERE user_id='$id'";
            $getName = mysqli_query($connect, $query);
            $names = mysqli_fetch_array($getName);
            // print_r($posts);
            ?>
            <div class='card'>
                <div class='card-body'>
                    <p class='fw-bold'><?php echo $names[0].' '.$names[1] ?></p>
                    <div>
                        <p><?php echo $posts[$i]["body"] ?></p>
                        <?php 
                            $postId = $posts[$i]['id'];
                            $imageQuery = "SELECT image FROM images_tb WHERE post_id='$postId'";
                            $getImages = mysqli_query($connect, $imageQuery);
                            $images = mysqli_fetch_all($getImages);
                            // print_r($images[0][0])
                        ?>
                        <div class="card-image">
                            <?php echo "<img src=".$images[0][0]." alt='No image'/>" ?>
                            <!-- <img src="/uploads/1661276029.jpg" alt="jhj"> -->
                        </div>
                    </div>
                </div>
            </div><br>
            <?php 
        }
        ?>
</body>
</html>