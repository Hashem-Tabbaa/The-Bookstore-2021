<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>The Bookstore</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/styles.css">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <!-- Main Section -->
    <section class="colored-section" id="header">
        <div class="container-fluid">
            <!-- Nav Bar -->
            <div class="socials">
                <a class="login-signin" href="./login.php">Login</a>
                <a class="login-signin mr-3" href="./signup.php">Signup</a>
                <a class="social-icon mr-3" href="#"><img src="/images/facebook.png" alt=""></a>
                <a class="social-icon mr-3" href="#"><img src="/images/twitter.png" alt=""></a>
                <a class="social-icon mr-3" href="#"><img src="/images/instagram.png" alt=""></a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark pb-4">

                <a class="navbar-brand" href="./index.php">The Bookstore</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./categories.php">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icons" href="#"><img class="" src="/images/user.png"
                                    alt=""></a>
                            <a class="nav-text nav-link ">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icons ml-2" href="./cart.php"><img class=""
                                    src="/images/shopping-cart.png" alt=""></a>
                            <a class="nav-text nav-link" href="./cart.php">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icons ml-3" href="#"><img class="" src="/images/wishlist.png"
                                    alt=""></a>
                            <a class="nav-text nav-link">Wishlist</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>