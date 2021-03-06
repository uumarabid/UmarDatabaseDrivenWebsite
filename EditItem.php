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
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    if (isset($_POST['saveButton'])) {
        $toyId = $_GET['id'];
        // update item
        //$sql = "update toys set name = :name, price = :price where id =:id ;";
        $sql = "UPDATE toys SET name = :name, price = :price, picture = :picture WHERE id = :id ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':name' => $_POST['toyName'],
            ':price' => $_POST['toyPrice'],
            ':picture' => $_POST['toyPicture'],
            ':id' => $toyId));

        header("Location: welcome.php");
    }
}
?>

<html lang="en-GB">
    <head>
        <meta charset="UTF-8" />
        <title>Edit item</title>
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
            <a href="#maincontent">Skip to main content</a>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <section class="container">
                    <a class="navbar-brand h1" href="EditItem.php">Admin Page</a>
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
                            <li class="nav-item">
                                <a class="nav-link disableUser" href="#"><?= $_SESSION['username']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
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
                        <h2 id="maincontent"> Edit item </h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="toyName">Name</label>
                                <input type="text" class="form-control" id="toyName" name="toyName" 
                                       aria-describedby="toyName" placeholder="Enter name" 
                                       value="<?= $row['name'] ?>" />
                            </div>                        
                            <div class="form-group">
                                <label for="toyPrice">Price</label>
                                <input type="text" class="form-control" id="toyPrice" name="toyPrice" 
                                       aria-describedby="toyPrice" placeholder="Enter price" 
                                       value="<?= $row['price'] ?>" />
                            </div>
                            <div class="form-group">
                                <label for="toyPicture">Picture</label>
                                <input type="text" class="form-control" id="toyPicture" name="toyPicture" 
                                       aria-describedby="toyPicture" placeholder="Upload picture" 
                                       value="<?= $row['picture'] ?>" />
                            </div>




                            <div class="row">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-4 mt-3">
                                    <button type="submit" class="btn btn-primary" name="saveButton" id="saveButton">Save</button>
                                    <a class="btn btn-danger" href="welcome.php"> Cancel </a>

                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </main>
        </div>
        <?php
        require_once "footer.php";
        ?>
    </body>
</html>