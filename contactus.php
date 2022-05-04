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
            <!-- fix this skip link -->
            <a href="#maincontent">Skip to main content</a>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <section class="container">
                    <a class="navbar-brand h1" href="contactus.php">Contact us</a>
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
            <main class="mt-2">

                <div class="row mt-5">
                    <div class="col-md-12">
                        <h2>
                            Your Details
                        </h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="fname">First name: </label>
                                <input type="text" class="form-control" id="fname" name="fname" 
                                       placeholder="Enter first name">
                            </div>

                            <div class="form-group mt-2">
                                <label for="lname">Last name: </label>
                                <input type="text" class="form-control" id="lname" name="lname" 
                                       placeholder="Enter last name">
                            </div>
                            <div class="form-group mt-2">
                                <label for="emailaddress">Email address: </label>
                                <input type="email" class="form-control" id="emailaddress" name="emailaddress" 
                                       placeholder="Enter email">
                            </div>
                            <div class="form-group mt-2">
                                <label for="phone">Enter your phone number: </label>
                                <input type="tel" class="form-control" id="phone" name="phone" 
                                       placeholder="Number">
                            </div>

                            <div class="form-group mt-4">
                                <label for="enquiry">Your enquiry: </label>
                                <textarea class="form-control" id="enquiry" name="enquiry"
                                          >
                                </textarea>
                            </div>

                            <div class="row mt-2">
                                <div class="col-md-10">

                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary" name="saveButton" id="saveButton"> Save </button>
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

