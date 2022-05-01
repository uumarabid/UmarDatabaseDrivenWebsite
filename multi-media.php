<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <meta charset="UTF-8" />
        <title>Entertainment</title>
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
                    <a class="navbar-brand h1" href="multi-media.php">Entertainment</a>
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

        <div class="container">
            <main>
                <h2 id="maincontent">Fun time</h2>

                <!-- Project work to show a blockqoute  -->
                <article>
                    <h3>A blockquote from ICC cricket website:</h3>
                    <blockquote cite="https://www.icc-cricket.com/rankings/about">
                        The MRF Tyres ICC Team Rankings is a rating method developed by David Kendix to rank men’s teams playing across Test,
                        One-Day International and Twenty20 International formats and women’s teams playing One-Day International and Twenty20
                        International cricket. This rating is worked out by dividing the points scored by the match/series total, with the
                        answer given to the nearest whole number. It can be compared with a batting average, but with points instead of total
                        runs scored and a match/series total instead of number of times dismissed.
                    </blockquote>
                </article>
                <p>A cricketer giving final speech in his mother tongue (Urdu) at retirement.</p>

                <!-- Project work to show a video relating to sport  -->

                <video controls>
                    <source src="media/Video.mp4" type="video/mp4" />
                </video>
            </main>
        </div>

        <?php
        require_once "footer.php";
        ?>

    </body>
</html>

