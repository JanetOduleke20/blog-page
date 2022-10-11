<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOWERS BLOG PAGE</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
                <form action="process.php"  method="POST">
                    <div class="container p-5">
                        
                        
                        <div class="card mx-auto mt-5 justify-content-center align-items-center">
                            <h5 class="card-title border-bottom pb-2 text-center">Fill your details below.</h5>
                            <?php
                            session_start();
                            if(isset($_SESSION["message"])) {
                                echo "<div class='alert alert-danger'><strong>".$_SESSION['message']."</strong></div>";
                                unset($_SESSION["message"]);
                            }
                        ?>
                            <div class="form-group">
                                <input type="text" name="firstname" class="form-control" placeholder="Enter your First name" >
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" class="form-control" placeholder="Enter your Last name" >
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="password"  placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-success text-light align-items-center">Sign up</button>
                            </div>
                        </div>
                    </div>
                       
               </form>
            <!-- </div>
    </div>
    </div> -->
</body>
</html>