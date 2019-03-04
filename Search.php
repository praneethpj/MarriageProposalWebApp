<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Marriage Proposal</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--        <link href="css/business-casual.css" rel="stylesheet">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {

 


                $("#btnSearch").click(function () {
                    $age = $sex = $job = $religion = $nationality = "";

                    $age = $('#age').val();
                    $sex = $('#sex').val();
                    $job = $('#job').val();
                    $religion = $('#religion').val();
                    $nationality = $('#nationality').val();

                    $.post("PassSearch.php", {age: $age, sex: $sex, job: $job, religion: $religion, Nationality: $nationality}, function (data) {



                        $("#results").html(data);
                    });
                });
            });



        </script>
    </head>


    <?php include './common/header.php'; ?>

    <body style="background: #e7edee;">


        <!-- Navigation -->
        <!--         <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item active px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="Search.php">Search</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="UserProfile.php">View Profile</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a class="nav-link text-uppercase text-expanded" href="EditProfile.php">Edit Profile</a>
                                </li>
                                <li class="nav-item px-lg-4">
                                    <a href="SignOut.php" id="myBtn"><button type="button" class="btn btn-success">Sign Out</button></a>
                                </li>
                                 
                 
                            </ul>
                        </div>
                    </div>
                </nav>-->


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

        <!-- Search -->
        <section class="page-section ">
            <div class="container">
                <div class="row" style="background: #fff;padding: 24px;">
                    <div class="col-xl-9 mx-auto">
                        <div class="form-group row">
                            <div class="input-group mb-3">

                                <select name="age" class="btn btn-warning dropdown-toggle" id="age">
                                    <option>Age</option>
                                    <option value="18 AND 25">18-25</option>
                                    <option value="26 AND 40">26-40</option>
                                    <option value="41 AND 55">41-55</option>
                                    <option value="56 AND 100">56+</option>
                                </select>
                                <select name="sex"  class="btn btn-secondary dropdown-toggle" id="sex">
                                    <option> Gender </option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>


                                <select name="job"  class="btn btn-secondary dropdown-toggle" id="job">
                                    <option> Job </option>
                                    <option>SE</option>
                                    <option>QA</option>
                                </select>

                                <select name="nationality"  class="btn btn-secondary dropdown-toggle" id="nationality">
                                    <option> Nationality </option>
                                    <option>Sinhala</option>
                                    <option>Tamil</option>
                                </select>

                                <select name="religion"  class="btn btn-secondary dropdown-toggle" id="religion">
                                    <option> Religion </option>
                                    <option>Buddhism</option>
                                    <option>Chiristian</option>
                                </select>

                                <input type="button" class="btn btn-success" value="Search"  id="btnSearch" placeholder="Search Partner" name="search">
                                <!--                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="basic-addon2">Search</span>
                                                                </div>-->
                            </div>

                        </div>
                        <div id="results"></div>
                    </div>
                </div>
            </div>
        </section>




        <!-- footer -->
        <div class="footer text-faded text-center py-5">
            <div class="copyright">
                &copy; Copy right 2018 | <a href="#">Web Application Developement II - Project</a>
            </div>
        </div>


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
    </body>

</html>
