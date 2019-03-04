<!DOCTYPE html>
<?php ?>
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
    <?php include './common/header.php'; ?>
    <body style="background: #e7edee;">



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



                        <form action="DeleteUserProfile.php" method="POST">
                            <div class="d-flex justify-content-center">
                                <input type="submit" class="btn btn-primary" value="Delete Your Account">
                            </div>
                        </form>

                    </div>
                    <?php
                    require 'system/Connection.php';
                    $conn = Connect();
                    $name = $_SESSION['user_session'];
                    $sql = "SELECT advertistment.*,contact.* FROM advertistment INNER JOIN contact ON advertistment.username = contact.username WHERE advertistment.username='$name'";

                    // $sql = "SELECT advertistment.*,contact.* FROM advertistment INNER JOIN contact ON advertistment.username = contact.username WHERE advertistment.username='lakshitha'";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)) {

                        echo'<form action="UpdateUserProfile.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="name1" value="' . $row["name1"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="name2" value="' . $row["name2"] . '">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                        <div class="col-lg-9">
                                     Male <input type="radio" name="gender" value="Male" checked/>
                                            Female <input type="radio" name="gender" value="Female" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Date of Birth</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="date" name="dob" value="' . $row["dob"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Religion</label>
                                        <div class="col-lg-9">
                                        <select class="form-control" name="religion">
                                                <option value="' . $row["religion"] . '">' . $row["religion"] . '</option>
                                                <option value="Buddhism">Buddhism</option>
                                                <option value="Chiristian">Chiristian</option>
                                                </select>  
   
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">District</label>
                                        <div class="col-lg-9">
                                         <select class="form-control" name="district">
                                                <option value="' . $row["district"] . '">' . $row["district"] . '</option>
                                                <option value="Colombo">Colombo</option>
                                                <option value="Kandy">Kandy</option>
                                                <option value="Kaluthara">Kaluthara</option>
                                                <option value="Gampaha">Gampaha</option>
                                                <option value="Jaffna">Jaffna</option>
                                                <option value="Baddula">Baddula</option>
                                                <option value="Monaragala">Monaragala</option>
                                                <option value="Kurunagala">Kurunagala</option>
                                                </select> 
                                               </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Country</label>
                                        <div class="col-lg-9">
                                        <select class="form-control" name="country">
                                    <option value="' . $row["country"] . '">' . $row["country"] . '</option>
                                                <option value="SriLanka">SriLanka</option>
                                                <option value="India">India</option>
                                                <option value="Bangaladesh">Bangaladesh</option>
                                                </select>     
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Language</label>
                                        <div class="col-lg-9">
                                         <select class="form-control" name="language">
                                                <option value="' . $row["language"] . '">' . $row["language"] . '</option>
                                                <option value="Sinhala">Sinhala</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="English">English</option>
                                                </select> 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Job</label>
                                        <div class="col-lg-9">
                                          	<select class="form-control" name="job">
                                                <option value="' . $row["job"] . '">' . $row["job"] . '</option>
                                                <option value="SE">SE</option>
                                                <option value="QA">QA</option>
                                                </select>                                        
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Salary</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" id="salary" name="salary" value="' . $row["salary"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Character</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="cast" value="' . $row["cast"] . '">
                                        </div>
                                    </div><hr>
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="addressline1" value="' . $row["addressline1"] . '" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" name="addressline2" value="' . $row["addressline2"] . '">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value="' . $row["country"] . '" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Mobile Number</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="phone" id="phone" value="' . $row["phone"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Facebook UserName</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="facebook" value="' . $row["facebook"] . '">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="username" value="' . $row["username"] . '" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" name="password" type="password" >
                                        </div>
                                    </div>
                                  
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <input type="reset" class="btn btn-secondary" value="Cancel">
                                            <input type="submit" class="btn btn-primary" value="Save Changes">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
        </section>


        <section class="page-section">

        </section>


<!--        <script type="text/javascript">
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
        </script>-->


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



                $('#phone').keypress(function (e) {
                    var regex = new RegExp("^[0-9\b ]");
                    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                    if (regex.test(str)) {
                        return true;
                    }

                    e.preventDefault();
                    return false;
                });
                
                $('#salary').keypress(function (e) {
                    var regex = new RegExp("^[0-9\b ]");
                    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                    if (regex.test(str)) {
                        return true;
                    }

                    e.preventDefault();
                    return false;
                });

            });
        </script>
    </body>

</html>
