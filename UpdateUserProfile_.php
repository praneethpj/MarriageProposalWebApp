
<?php session_start(); ?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Marriage Proposal</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/business-casual.css" rel="stylesheet">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>

    <body>
        <?php
        require 'system/Connection.php';
        $conn = Connect();

        
        
        //$Customer_Name   = $conn->real_escape_string($_POST['Customer_Name']);
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $religion = $_POST['religion'];
        $district = $_POST['district'];
        $country = $_POST['country'];
        $language = $_POST['language'];
        $job = $_POST['job'];
        $salary = $_POST['salary'];
        $cast = $_POST['cast'];

        $addressline1 = $_POST['addressline1'];
        $addressline2 = $_POST['addressline2'];
        $phone = $_POST['phone'];
        $facebook = $_POST['facebook'];

        $username = $_SESSION['user_session'];
        $password = $_POST['password'];
        $img = '';
        //   $query = "INSERT INTO appointment(Customer_name, Requirement, Appointment_TimeSlot, Requested_DateTime, Telephone, Email, Appointments) VALUES ('" . $Customer_Name . "','" . $Requirement . "','" . $AppointmentTimeSlot . "','" . $DateTime . "','" . $Telephone . "','" . $email . "','" . $Appointments . "' )";
        $query = "REPLACE into advertistment (dob,cast,religion,job,salary,district,country,gender,language,name1,name2,img,username) 
                                    values('$dob','$cast','$religion','$job','$salary','$district','$country','$gender','$language','$name1','$name2','sd','$username')";
        // contact SET username='" . $username . "',phone='" . $phone . "',addressline1='" . $addressline1 . "',addressline2='" . $addressline2 . "',facebook='" . $facebook . "' WHERE username='" . $username . "'"
        $success = $conn->query($query);

        if (!$success) {
            ?>
            <section class="page-section cta">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9" style="text-align: center; display: none;">
                            <span onclick="this.parentElement.style.display = 'none'">&times;</span>
                            <h3>Error!</h3>
                            <p><?php die("Couldn't enter data: " . $conn->error); ?>
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
                    <div class="row">
                        <div class="col-lg-12" style="text-align: center;">
                            <span onclick="this.parentElement.style.display = 'none'">&times;</span>
                            <h3>Your Account Updated.</h3>
                            <p>Now..Check your profile. 
                                <br>
                                <a href="UserProfile.php"> <input type="button" class="btn btn-warning" value="Go to Your Profile" /></a>
                            </p>
                            <img src="img/successful.png" width="100" height="100"/>

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