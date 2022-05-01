<?php
require_once "pdo.php";
//session_start();
//
//if (!isset($_SESSION['username'])) {
//    header("Location: login.php");
//    exit();
//} else {
    $stmt = $pdo->query("SELECT * FROM toys");
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//}
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
                                <a class="nav-link" href="feedback.php">Customer Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="multi-media.html">Multi-media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Sign in</a>
                            </li>
                        </ul>
                    </section>
                </section>
            </nav>
        </header>
        <div class="container">
            <main>
                <section>
                    <h2 id="maincontent">Range of bats</h2>
                    <div>
                        <?php
                        foreach ($rows as $row) {
                            echo "<figure> <img src=\"";
                            echo $row['picture'];
                            echo "\" alt=\"";
                            echo $row['name'];
                            echo "\" />";
                            echo("<figcaption>Name: <b> ");
                            echo $row['name'];
                            echo("</b> <br />Price:  <b> £");
                            echo $row['price'];
                            echo("</b></figcaption>");
                            echo("</figure>");
                        }
                        ?> 

                    </div>
                </section>

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