<?php
require_once "pdo.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
} else {
    // checking the id 1st from database
    if (isset($_GET['id'])) {
        $toyId = $_GET['id'];
        $stmt = $pdo->query("SELECT * FROM toys where id=$toyId");
        $row = $stmt->fetchA(PDO::FETCH_ASSOC);
    }
    if (isset($_POST['saveButton'])) {
        $toyId = $_GET['id'];
        // update item
        $sql = "UPDATE toys SET name = :name, price = :price, picture = ;picture WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':name' => $_POST['toyname'],
            ':price' => $_POST['toyPrice'],
            ':picture' => $_POST['toyPicture'],
            ':id' => $toyId
        ));
    }
}
?>

<html lang="en-GB">
    <head>
        <meta charset="UTF-8" />
        <title>Super Sport</title>
        <link rel="icon" href="./images/super-sport.jpg" type="image/icontype" />
        <link href="css/supersportstyle.css" type="text/css" rel="stylesheet" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
            />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
    </head>

    <body>
        <header>
            <!-- Skip link to go directly to main content  -->
            <!-- fix this skip link -->
            <a href="#maincontent">Skip to main content</a>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <section class="container">
                    <a class="navbar-brand h1" href="/">Super Sport</a>
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
                                <a class="nav-link" href="catalogue.html">Catalogue</a>
                            </li>
                            <li class="nav-item">
                                <a href="contactus.html" class="nav-link">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="feedback.html">Customer Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="multi-media.html">Multi-media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signin.html">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disableUser" href="#"><?= $_SESSION['username']; ?></a>
                            </li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <div class="container">
            <main class="mt-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="toyName">Name</label>
                            <input type="text" class="form-control" id="toyName" name="toyName" 
                                   aria-describedby="toyName" placeholder="Enter name" 
                                   value="<?= $row['name'] ?>" />
                        </div>                        
                        <div class="form-group">
                            <label for="toyPrice">Name</label>
                            <input type="text" class="form-control" id="toyPrice" name="toyPrice" 
                                   aria-describedby="toyPrice" placeholder="Enter price" 
                                   value="<?= $row['price'] ?>" />
                        </div>
                        <div class="form-group">
                            <label for="toyPicture">Name</label>
                            <input type="text" class="form-control" id="toyPicture" name="toyPicture" 
                                   aria-describedby="toyPicture" placeholder="Upload picture" 
                                   value="<?= $row['picture'] ?>" />
                        </div>




                        <div class="row">
                            <div class="col-md-8">

                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary" name="saveButton" id="saveButton">Save</button>
                                <a class="btn btn-danger" href="welcome.php"> Cancel </a>

                            </div>

                        </div>

                    </div>

                </div>

            </main>
        </div>
        <section>
            <footer>
                <h3>Our Address:</h3>
                <address>Ashton Old Road, Openshaw, Manchester, M11 2WH</address>
                <a href="mailto:supersport@info.co.uk">Email Super Sport</a>
                <h3>Copyrights &copy; refers to the legal rights of the owner.</h3>
            </footer>
        </section>
    </body>
</html>