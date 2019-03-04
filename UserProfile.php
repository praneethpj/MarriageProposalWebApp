<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Marriage Proposal</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--        <link href="css/business-casual.css" rel="stylesheet">-->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="jquery/jquery.min.js"></script>



        <link href="css/style.css" rel="stylesheet">
        <link href="css/awesomplete.css" rel="stylesheet">

        <script type="text/javascript" src="js/awesomplete.min.js"></script>
    </head>

    <body style="background: #e7edee;">

        <?php
        include './common/header.php';


        if (!isset($_SESSION['user_session'])) {
            
            
            header("location:index.php");
            
            
        }
        ?>





        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                <input type="text" class="form-control" id="psw" placeholder="Enter password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked>Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Profile -->
        <section class="page-section">
            <div class="container">
                <div class="row" style="background: #fff;padding: 24px;">
                    <div class="col-md-5">

                        <div class="col-lg-4 order-lg-1 text-center">


                            <?php
                            $filefound = '';
                            if (!file_exists('profiles/' . $_SESSION['user_session'])) {
                                $filefound = '0';
                            }
                            ?>
                            <?php if ($filefound == '1') { ?>
                                <form class="md-form" id="img" action="part/upload.php" method="post" enctype="multipart/form-data">
                                    <div class="file-field">


                                        <div class="d-flex justify-content-center">
                                            <div class="btn btn-mdb-color btn-rounded float-left">


                                                <input type="file" name="image" id="image">
                                                <br>
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </form><br><hr>

                            <?php } else { ?>

                                <img src="<?php echo 'profiles/' . $_SESSION['user_session'] . '.png' ?>" width="100" height="100">
                                <form class="md-form" id="img" action="part/upload.php" method="post" enctype="multipart/form-data">
                                    <div class="file-field">


                                        <div class="d-flex justify-content-center">
                                            <div class="btn btn-mdb-color btn-rounded float-left">


                                                <input type="file" name="image" id="image">
                                                <br>
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </form><br><hr>

                            <?php } ?>

                        </div><br>


                        <script type="text/javascript">
                            $(document).ready(function () {

                                $(function () {
                                    $('#image').picEdit();
                                });
                            });
                        </script>
                    </div>
                    
                    
                    <!-- user-->
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">  
                                    <div class="panel-heading btn btn-success btn-block" style="padding-left: 10px;">
                                        Basic Details
                                    </div></a>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <?php
                                        require 'system/Connection.php';
                                        $conn = Connect();
                                        $user = $_SESSION['user_session'];
                                        $sql = "SELECT * FROM advertistment WHERE username='$user'";
//$sql = "SELECT * FROM advertistment WHERE username='lakshitha'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
//                                    echo "<li>First Name :-" . $row['name1'] . "</li>";
//                                    echo "<li>Last Name :-" . $row['name2'] . "</li>";
//                                    echo "<li>Gender :-" . $row['gender'] . "</li>";
//                                    echo "<li>Date of Birth :-" . $row['dob'] . "</li>";
//                                    echo "<li>Religion :-" . $row['religion'] . "</li>";
//                                    echo "<li>District :-" . $row['district'] . "</li>";
//                                    echo "<li>Country :-" . $row['country'] . "</li>";
//                                    echo "<li>Language :-" . $row['language'] . "</li>";
//                                    echo "<li>Job :-" . $row['job'] . "</li>";
//                                    echo "<li>Salary :-" . $row['salary'] . "</li>";
//                                    echo "<li>Character :-" . $row['cast'] . "</li>";

                                            echo '<p style="border-left-width: 0px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;">';
                                            echo "<i class='fa fa-heart'></i>&nbsp;&nbsp;&nbsp;First Name :- " . $row['name1'] . "<br>";
                                            echo "<i class='fa fa-heart'></i>&nbsp;&nbsp;&nbsp;Last Name :- " . $row['name2'] . "<br>";
                                            echo "<i class='fa fa-heart'></i>&nbsp;&nbsp;&nbsp;Gender :- " . $row['gender'] . "<br>";
                                            echo "<i class='fa fa-heart'></i>&nbsp;&nbsp;&nbsp;Date of Birth :- " . $row['dob'] . "<br></p>";
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>


                        </div>
                        <hr>
                        <div class="panel panel-default">

                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                <div class="panel-heading btn btn-success btn-block" style="padding-left: 10px;">
                                    Other Details
                                </div></a>


                            <div id="collapse2" class="panel-collapse collapse in">
                                <div class="panel-body">

                                    <?php
                                    $sql = "SELECT * FROM advertistment WHERE username='$user'";
//  $sql = "SELECT * FROM advertistment WHERE username='lakshitha'";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo '<p style="border-left-width: 0px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;">';
                                        echo "<i class='fa fa-heartbeat'></i>&nbsp;&nbsp;&nbsp;Religion :- " . $row['religion'] . "<br>";
                                        echo "<i class='fa fa-heartbeat'></i>&nbsp;&nbsp;&nbsp;District :- " . $row['district'] . "<br>";
                                        echo "<i class='fa fa-heartbeat'></i>&nbsp;&nbsp;&nbsp;Country :- " . $row['country'] . "<br>";
                                        echo "<i class='fa fa-heartbeat'></i>&nbsp;&nbsp;&nbsp;Language :- " . $row['language'] . "<br>";
                                        echo "<i class='fa fa-heartbeat'></i>&nbsp;&nbsp;&nbsp;Job :- " . $row['job'] . "<br>";
                                        echo "<i class='fa fa-heartbeat'></i>&nbsp;&nbsp;&nbsp;Salary :- " . $row['salary'] . "<br>";
                                        echo "<i class='fa fa-heartbeat'></i>&nbsp;&nbsp;&nbsp;Character :- " . $row['cast'] . "<br></p>";
                                    }
                                    ?>

                                </div>
                            </div>

                            <hr>
                            <div class="panel panel-default">      
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                    <div class="panel-heading btn btn-success btn-block" style="padding-left: 10px;">
                                        Advance Details
                                    </div></a>
                                <div id="collapse3" class="panel-collapse collapse in">
                                    <div class="panel-body">

                                        <?php
                                        //$sql = "SELECT * FROM contact WHERE username=".$_GET['username'];
                                        $sql = "SELECT * FROM contact WHERE username='$user'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<p style="border-left-width: 0px;padding-left: 10px;padding-top: 10px;padding-bottom: 10px;padding-right: 10px;">';
                                            echo "<i class='fas fa-user-alt'></i>&nbsp;&nbsp;&nbsp;" . $row['username'] . "<br>";
                                            echo "<i class='fas fa-mobile-alt'></i>&nbsp;&nbsp;&nbsp;" . $row['phone'] . "<br>";
                                            echo "<i class='fas fa-location-arrow'></i>&nbsp;&nbsp;&nbsp;" . $row['addressline1'] . "," . $row['addressline2'] . "<br>";
                                            echo "<i class='fab fa-facebook-square'></i>&nbsp;&nbsp;&nbsp;" . $row['facebook'] . "<br></p>";
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <a href="EditProfile.php"> <input type="button" value="Edit Profile" name="Edit" class="btn btn-danger"></a>
                        </div>
                        <br>
                        <div>
                            <a href="signout.php"> <input type="button" value="Sign out" name="Edit" class="btn btn-dark"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <script type="text/javascript">
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $Img = $('#profile-img-tag').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#profile-img").change(function () {
                readURL(this);
            });
        </script>










        <!-- Bootstrap core JavaScript -->
        <script src="jquery/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

        <script>
            $(document).ready(function () {
                $("#myBtn").click(function () {
                    $("#myModal").modal();
                });
            });
        </script>



    </script>





    <?php
    include './common/footer.php';
    ?>
</body>

</html>
