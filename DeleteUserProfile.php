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
        <!--        <link href="css/business-casual.css" rel="stylesheet">-->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body style="background: #e7edee;">
        <?php
        require 'system/Connection.php';
        //include './system/Connection.php';
        $conn = Connect();

        $username = $_SESSION['user_session'];

        $query = "DELETE from useradtistment WHERE username='" . $username . "'";
        $success = $conn->query($query);
        // echo $query;

        $query1 = "DELETE from contact WHERE username='" . $username . "'";
        $success1 = $conn->query($query1);
        //echo $query1;

        $query2 = "DELETE from login WHERE username='" . $username . "'";
        $success2 = $conn->query($query2);
        // echo $query2;


        session_destroy();
        

        if (!$success & !$success1 & !$success2) {
            ?>
            <section class="page-section cta">
                <div class="container">
                    <div class="row" style="background: #fff;padding: 24px;">
                        <div class="col-lg-9" style="text-align: center; display: none;">
                            <span onclick="this.parentElement.style.display = 'none'">&times;</span>
                            <h3>Error!</h3>
                            <p><?php die("Couldn't enter data: " . $conn->error);
            ?>
                                <br>

                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        } else {
            ?>

            <section class="page-section cta">
                <div class="container">
                    <div class="row" style="background: #fff;padding: 24px;">
                        <div class="col-lg-12" style="text-align: center;">
                            <span onclick="this.parentElement.style.display = 'none'">&times;</span>
                            <h3>Your account will be deactivated.</h3>
                            <p>See you again... 
                                <br>
                                <a href="index.php"> <input type="button" class="btn btn-warning" value="Go to Our Website" /></a>
                            </p>
                            <img src="img/deactivate.png" width="100" height="100"/>

                            <br>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
        $conn->close();
        ?> 


    </body>
</html>