<?php
require_once "pdo.php";

if (isset($_POST['username']) && isset($_POST['thepass'])) {
    $my_hash = password_hash($_POST['thepass'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, password)"
            . "VALUES (:name, :password)"; //check this .  laater
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['username'],
        ':password' => $my_hash));
    $msg = "New member created. Please login";
} else {
    $msg = "Login into members area";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Login</title>
        <link rel="icon" href="./images/super-sport.jpg" type="image/icontype" />
<!--        <link href="css/supersportstyle.css" type="text/css" rel="stylesheet" />-->
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
    </head>
    <body>
        <header>
            <!-- Skip link to go directly to main content  -->
            <a href="#maincontent">Skip to main content</a>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <section class="container">
                    <a class="navbar-brand h1" href="index.php">Super Sport</a>
                    <button
                        class="navbar-toggler d-lg-none"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavId"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <section class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="catalogue.php">Catalogue</a>
                            </li>
                            <li class="nav-item">
                                <a href="contactus.php" class="nav-link">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="feedback.php">Customer Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="multi-media.php">Multi-media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Sign in</a>
                            </li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <div class="container" style="width: 25%">
            <form id="maincontent" action="member.php" method="POST">
                <fieldset>
                    <legend>
                        <h1 class="mt-5 text-center"><?= $msg; ?></h1>
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
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                    <div class="mt-5 text-center">
                        <!-- needs to add page for sign up -->
                        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
