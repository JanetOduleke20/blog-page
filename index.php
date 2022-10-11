<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class=" card border-0 my-4">
        <div class="w-50 d-md-d-flex align-items-center justify-content-center mx-auto ">
            <form action="process.php" method="POST">
                <?php
                session_start();
                    if (isset($_SESSION['error'])) {
                        echo "<div><strong>".$_SESSION['error']."</strong></div>";
                    }
                ?>
                <div class="mx-auto card-header ">
                    <h4 class="text-center">Sign up Page</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control my-2" placeholder="First name" name="firstname">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control my-2" placeholder="Last name" name="lastname">
                    </div>
                    
                    <div class="form-group">
                        <input type="email" class="form-control my-2" placeholder="E-mail address" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control my-2" placeholder="Password" name="password">
                    </div>
                    <div class="mx-auto d-flex align-items-center justify-content-center">
                        <p>Have an account? <a href="/login.php">Log in here</a></p>
                    </div>
                    <div class="form-group mx-auto">
                        <button type="submit" name="submit" class="btn btn-md bg-info text-dark align-items-center justify-content-center float-end  w-50">Sign up</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</body>
</html>

<?php

?>