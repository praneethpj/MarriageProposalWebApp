<?php
session_start();

if (!isset($_SESSION['user_session'])) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<?php include './common/header.php'; ?>




<!-- User Profile -->
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="" data-target="#profile" data-toggle="tab" class="nav-link active text-expanded" style="color: initial;font-size: large;">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-target="#edit" data-toggle="tab" class="nav-link text-expanded" style="color: initial;font-size: large;">Edit</a>
                    </li>
                </ul>
                <div class="tab-content py-4">
                    <div class="tab-pane active" id="profile">
                        <h4 class="mb-3">User Profile</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background: lavenderblush;padding-left: 10px;">Basic Details</div>
                                    <div class="panel-body" style="background: burlywood;">
                                        <ul>
                                            <?php
                                            require 'system/Connection.php';
                                            $conn = Connect();
//$sql = "SELECT * FROM advertistment WHERE username=".$_GET['username'];
                                            $user = $_SESSION['user_session'];
                                            $sql = "SELECT * FROM advertistment WHERE username='$user'";
                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "<li>First Name :-" . $row['name1'] . "</li>";
                                                echo "<li>Last Name :-" . $row['name2'] . "</li>";
                                                echo "<li>Gender :-" . $row['gender'] . "</li>";
                                                echo "<li>Date of Birth :-" . $row['dob'] . "</li>";
                                                echo "<li>Religion :-" . $row['religion'] . "</li>";
                                                echo "<li>District :-" . $row['district'] . "</li>";
                                                echo "<li>Country :-" . $row['country'] . "</li>";
                                                echo "<li>Language :-" . $row['language'] . "</li>";
                                                echo "<li>Job :-" . $row['job'] . "</li>";
                                                echo "<li>Salary :-" . $row['salary'] . "</li>";
                                                echo "<li>Character :-" . $row['cast'] . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background: lavenderblush;padding-left: 10px;">Advance Details</div>
                                    <div class="panel-body" style="background: burlywood;">

                                        <?php
//                                                    //$sql = "SELECT * FROM contact WHERE username=".$_GET['username'];
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
                        <!--/row-->
                    </div>
                    <div class="tab-pane" id="edit">

                        <?php
// $sql = "SELECT advertistment.*,contact.* FROM advertistment INNER JOIN contact ON advertistment.username = contact.username WHERE advertistment.username=".$_GET['username'];

                        $sql = "SELECT advertistment.*,contact.* FROM advertistment INNER JOIN contact ON advertistment.username = contact.username WHERE advertistment.username='$user'";
                        $result = mysqli_query($conn, $sql);
                        if ($row = mysqli_fetch_array($result)) {

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
                                            <input class="col-sm-5" type="text" value="' . $row["gender"] . '" readonly>
                                            &nbsp;&nbsp;&nbsp;&nbsp;Male <input type="radio" name="gender" value="Male" checked/>
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
                                            <input class="form-control" type="text" name="religion" value="' . $row["religion"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">District</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="district" value="' . $row["district"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Country</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="country" value="' . $row["country"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Language</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="language" value="' . $row["language"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Job</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="job" value="' . $row["job"] . '">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Salary</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="salary" value="' . $row["salary"] . '">
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
                                            <input class="form-control" type="text" name="phone" value="' . $row["phone"] . '">
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
                                            <input class="form-control" type="text" name="username" value="' . $row["username"] . '">
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
                        } else {
                            echo'<form action="UpdateUserProfile.php" method="POST">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">First name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="name1" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Last name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="name2" value="">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                        <div class="col-lg-9">
                                            <input class="col-sm-5" type="text" value="" readonly>
                                            &nbsp;&nbsp;&nbsp;&nbsp;Male <input type="radio" name="gender" value="Male" checked/>
                                            Female <input type="radio" name="gender" value="Female" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Date of Birth</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="date" name="dob" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Religion</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="religion" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">District</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="district" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Country</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="country" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Language</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="language" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Job</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="job" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Salary</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="salary" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Character</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="cast" value="">
                                        </div>
                                    </div><hr>
                                    
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="addressline1" value="" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-6">
                                            <input class="form-control" type="text" name="addressline2" value="">
                                        </div>
                                        <div class="col-lg-3">
                                            <input class="form-control" type="text" value="" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Mobile Number</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="phone" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Facebook UserName</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="facebook" value="">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Username</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="username" value="">
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


                        <div class="col-lg-4 order-lg-1 text-center">
                            <form class="md-form" id="img" action="part/upload.php" method="post" enctype="multipart/form-data">
                                <div class="file-field">
                                    <img src="//placehold.it/150" class="mx-auto img-fluid img-circle d-block" alt="avatar">

                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-mdb-color btn-rounded float-left">
                                         
                                        
                                            Image: <input type="file" name="image" id="image">
                                            <br>
                                            <button type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </form><br><hr>
                            
                            
                            <form action="DeleteUserProfile.php" method="POST">
                                <input type="submit" class="btn btn-primary" value="Delete Your Account">
                            </form>
                        </div>
                    </div>
                    </section>




                    <script type="text/javascript">
            $(document).ready(function () {
                        
                    $(function() {
                          $('#image').picEdit();
                 });
                 });
                            </script>


                            </script>





                            <?php
                            include './common/footer.php';
                            ?>