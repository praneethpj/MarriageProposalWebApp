<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Marriage Proposal</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/business-casual.min.css" rel="stylesheet">
        <link href="css/picedit.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>

    <body>



        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="height: 0px;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                       
                     
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="Search.php">Search</a>
                        </li>
                        <?php
                        if (isset($_SESSION['user_session'])) {
                            ?>
                            <li class="nav-item px-lg-4">
                                <a href="UserProfile.php"><button type="button" class="btn btn-danger">Welcome,<?php echo $_SESSION['user_session']; ?></button></a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item px-lg-4">
                                <a href="#" id="myBtn"><button type="button" class="btn btn-success">Sign in</button></a>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>