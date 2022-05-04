


<!DOCTYPE html>
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
            <figure class="mt-5">
                <img src="images/super-sport.jpg" alt="different cricket bats" />
                <figcaption>A variety of Cricket bats available.</figcaption>
            </figure>
        </header>

        <div class="container">
            <main>
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <details id="maincontent">
                            <summary>SS</summary>
                            <p>Super Sport was established in 1999.</p>
                        </details>
                        <details>
                            <summary>Inspired</summary>
                            <p>Inspired by world famous cricketers.</p>
                        </details>
                        <details>
                            <summary>Goal</summary>
                            <p>Our goal is to deliver brilliant.</p>
                        </details>
                    </div>
                    <article class="col-md-10 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h2>About us</h2>
                                <p id="maincontent">
                                    We are an established business with over 20 years of experience who specialise in cricket bats and have an
                                    excellent track record for best customer service. <abbr title="Super Sport">SS</abbr> has never compromised on
                                    the quality and service provided to our customers. We believe in keeping our customers happy and providing them
                                    with products at a very competitive price. We have highly trained staff who are able to guide you with
                                    professional advice for all your purchases.
                                </p>
                            </div>
                            <!-- Breaking a paragraph will make it easier to read   -->

                            <div class="col-md-6 col-sm-12">
                                <h2>Services</h2>
                                <p>
                                    We offer a complete and wide range of normal and customised cricket bats for all ages and levels of ability. We
                                    offer a nation wide deliver service for your convenience. As we have completed our 20 years of trading, we are
                                    offering upto 20% discount for all our existing and new customers with no order restrictions.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </main>
        </div>
        <?php
        require_once "footer.php";
        ?>
    </body>
</html>

