<?php 
    require('connect.php');
    $getPostQuery = "SELECT * FROM posts_tb";
    $getImagesQuery = "SELECT * FROM images_tb";
    $foundPosts = mysqli_query($connect, $getPostQuery);
    $foundImages = mysqli_query($connect, $getImagesQuery);

    $posts = mysqli_fetch_all($foundPosts, MYSQLI_ASSOC);
    $images = mysqli_fetch_all($foundImages, MYSQLI_ASSOC);
?>