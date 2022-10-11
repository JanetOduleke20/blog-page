<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="style.css"> 
<title>Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <div class="container blogHead">
            <span class="fw-bold fs-5"><a href="/blog/index.php">Extrinsic Blog</a> </span>
            <span class="material-symbols-outlined float-end">person_filled</span>
        </div>
        <div class="row mt-4">
            <div class="col-md-3 container sideBar pt-3">
                <ul>
                    <li><a href="/dashboard.php">Dashboard</a></li>
                    <hr class="w-50">
                    <span class="mb-2">Categories</span>
                    <hr class="w-50">
                    <li><a href="/sports"><span class="material-symbols-outlined me-1">sports_tennis</span> Sports</a></li>
                    <li><a href="/business"><span class="material-symbols-outlined me-1">paid</span> Business</a></li>
                    <li><a href="/business"><span class="material-symbols-outlined me-1">styler</span> Fashion</a></li>
                    <li><a href="/business"><span class="material-symbols-outlined me-1">fitness_center</span> Health & Fitness</a></li>
                    <li><a href="/business"><span class="material-symbols-outlined me-1">code</span> Programming</a></li>
                    <hr class="w-50">

                    <span class="mb-2">My Networks</span>
                    <hr class="w-50">
                    <li class="ms-2"><a href="">Rising Daily with the Alberts</a></li>
                    <li class="ms-2"><a href="">Morning Dose</a></li>
                    <li class="ms-2"><a href="">Coding daily with Todd Mosh</a></li>                    
                </ul>
            </div>
            <!-- Content Display -->
            <div class="col-md-6 mt-2">
                <div class="post card">
                    <div class="card-body d-md-d-flex">
                        <form action="posts.php" method="POST" enctype="multipart/form-data" >
                            <?php 
                                session_start();
                                if (isset($_SESSION['status_message'])) {
                                    echo "<small>".$_SESSION['status_message']."</small>";
                                }
                                // session_unset();
                            ?>
                            
                            <textarea name="body" id="" cols="" rows="" class="border-0 w-100 mb-0" placeholder="What is on your mind?"></textarea>
                            <div class="d-md-d-flex mt-0">
                                <input type="file" name="images[]" multiple/>
                                <button class="btn btn-sm postBtn text-light w-25" type="submit" name="makepost">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                    require("getPosts.php")
                ?>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</body>
</html>