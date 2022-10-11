<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOWERS BLOG PAGE</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card border-0 my-auto mx-auto p-5">
        <div class="w-50 d-md-flex align-items-center justify-content-center">
            <form action="loginprocess.php"  method="POST">
                <div class="card-header">
                    <h5 class="text-center">Fill your details below.</h5>
                </div>
                    <?php
                        session_start();
                        if(isset($_SESSION["message"])) {
                            echo "<div class='alert alert-danger'><strong>".$_SESSION['message']."</strong></div>";
                            unset($_SESSION["message"]);
                        }
                    ?>
                <div class="card-body">
                    <div class="form-group my-2">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group my-2">
                        <input type="password" class="form-control" name="password"  placeholder="Enter your password">
                    </div>
                    <div class="form-group my-2">
                        <input type="submit" name="login" value="Log in" class="btn btn-success text-light float-end w-50" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>