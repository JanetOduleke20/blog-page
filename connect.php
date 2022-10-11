<?php
     $server = "localhost";
     $user ="root";
     $password = "";
    $dbName = 'blog_db';

    // $server = "sql306.epizy.com";
    //  $user ="epiz_32434124";
    //  $password = "6k2bgsvz";
    // $dbName = 'epiz_32434124_blog_page';
    
    // This takes three variables
    $connect = mysqli_connect($server, $user, $password, $dbName);
    if(!$connect) {
        echo "Database not connected";
    }
    
?>