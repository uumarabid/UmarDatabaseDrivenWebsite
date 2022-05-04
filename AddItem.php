<?php
require_once "pdo.php";
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
} else {
    if (isset($_POST['saveButton'])) {
        // 
        //https://www.w3schools.com/php/php_file_upload.asp
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["toyPicture"] ["name"]);
        // https://stackoverflow.com/questions/19139434/php-move-a-file-into-a-different-folder-on-the-server
        move_uploaded_file($_FILES["toyPicture"]["tmp_name"], $target_file);
        echo basename($_FILES["toyPicture"]["name"]);
        // save in database
        $sql = "INSERT INTO toys (name, price, picture)"
                . "VALUES (:name, :price, :picture)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':name' => $_POST['toyName'],
            ':price' => $_POST['toyPrice'],
            ':picture' => $target_file));
        header("Location: welcome.php");
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
                    <a class="navbar-brand h1" href="AddItem.php">Admin Page</a>
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
                                <a class="nav-link" href="/index.php">Home <span class="visually-hidden">(current)</span></a>
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
                            <li class="nav-item">
                                <a class="nav-link disableUser" href="#"><?= $_SESSION['username']; ?></a>
                            </li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <div class="container">
            <main class="mt-5">
                <!-- https://stackoverflow.com/questions/4526273/what-does-enctype-multipart-form-data-mean 
                    https://www.w3schools.com/tags/att_form_enctype.asp
                -->
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="toyName">Name</label>
                        <input type="text" class="form-control" id="toyName" name="toyName" aria-describedby="toyName" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="toyPrice">Price</label>
                        <input type="number" class="form-control" id="toyPrice" name="toyPrice" aria-describedby="toyPrice" placeholder="Enter price">
                    </div>

                    <div class="form-group">
                        <label for="toyPicture">Picture</label>
                        <input type="file" class="form-control" name="toyPicture" aria-describedby="toyPicture" placeholder="Upload picture">
                    </div>
                    <div class="row">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-4 mt-3">
                            <button type="submit" class="btn btn-primary" name="saveButton" id="saveButton"> Save </button>
                            <a class="btn btn-danger" href="welcome.php"> Cancel </a>
                        </div>
                    </div>
                </form>
            </main>
        </div>
        <?php
        require_once "footer.php";
        ?>
    </body>
</html>