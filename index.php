<?php
require_once "pdo.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
            />
        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
        <title>Create user</title>
    </head>
    <body>
        <div class="container" style="width: 25%">
            <form action="login.php" method="POST">
                <fieldset>
                    <legend>
                        <h1 class="mt-5 text-center">Welcome to create new user page</h1>
                    </legend>
                    <p class="text-center">Please enter your details.</p>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" />
                    </div>
                    <div class="mb-3">
                        <label for="thepass" class="form-label">Password</label>
                        <input type="password" class="form-control" id="thepass" name="thepass" placeholder="Password" />
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember" />
                                <label class="form-check-label" for="remember"> Remember me </label>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <!-- needs to add page for forgot passward -->
                            <a href="">Forgot password</a>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="submit" value="Create New User">Create new user</button>
                        <!--                        <button type="button" class="btn btn-outline-primary">Sign in with Google</button>-->
                    </div>
                    <div class="mt-5 text-center">
                        <!-- needs to add page for sign up -->
<!--                        <p>Don't have an account? <a href="">Sign up</a></p>-->
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
