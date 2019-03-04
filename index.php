<?php include './common/header.php'; ?>

<script src="jquery/jquery.min.js"></script>
<script src="js/typed.js"></script>

<style>
    .typed_wrap {
        display: block;
        border: 4px solid #ecf0f1;

        height: auto;
        padding: 30px;

        /*centers it in the .banner*/

        margin: 11px 107px -45px;
        width: 314px;
        -webkit-transform: translate(-50%,-50%);
        -moz-transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        -o-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }

    .typed_wrap h1 {
        display: inline;
    }

    /*Add custom cursor so it auto inherits font styles*/
    .typed::after {
        content: '|';
        display: inline;
        -webkit-animation: blink 0.7s infinite;
        -moz-animation: blink 0.7s infinite;
        animation: blink 0.7s infinite;
    }

    /*Removes cursor that comes with typed.js*/
    .typed-cursor{
        opacity: 0;
        display: none;
    }
    /*Custom cursor animation*/
    @keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
    }
    @-webkit-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
    }
    @-moz-keyframes blink{
        0% { opacity:1; }
        50% { opacity:0; }
        100% { opacity:1; }
    }

</style>
<script type="text/javascript">



</script>

<br>
<div style="background-color: #a74da7;margin: -23px 0px -40px;" class="col-12">
    <div class="col-2">
        <img src="img/bride.png" class="rounded-circle" style="margin: 18px -15px 12px 350px;width: 152px">
    </div>
    <div class="col-2">
        <img src="img/groom.png" class="rounded-circle" style="margin: -241px 8px 12px 598px;;width: 152px">
    </div>
</div>
 

<div class="container" style="background-color: #80bdff">
    <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded"  alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="box-shadow: 0px 2px 7px #888888;">
            <h3 class="section-heading mb-4">
                <span class="section-heading-lower animated fadeInLeftBig"><img src="img/icons8-two-hearts-96.png">Find your Love</span> 
                <br>
                <span class="section-heading-lower animated fadeInLeftBig delay-2s"><img src="img/icons8-save-the-children-96.png">Find your Life</span> 
                <br>
                <span class="section-heading-lower animated rotateInDownLeft delay-4s"><img src="img/icons8-one-free-52.png">It is free</span> 
            </h3>
            <br><br><br><br>
        </div>
        <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="box-shadow: 0px 2px 7px #888888;;margin: 47px 56% 10px;">

            <div class="banner">
                <!--                        <div class="typed_wrap">-->
                <h3>Find my soul mate <span class="typed"></span></h3>
                <!--                        </div>-->
                <br>
                <div class="row">
                    <div class="col-8">
                        <span style="margin-left: -54%;color: #75726c;">Enter your Email</span>
                        <input type="text" value="" size="100" name="email" placeholder="xxx@gmail.com" id="email" class="form-control">
                        <br>
                        <span style="margin-left: -43%;    color: #75726c;">Enter your Username</span>
                        <input type="text" value="" name="username" placeholder="xxxxx" id="username" class="form-control">
                        <br>
                        <span style="margin-left: -43%;color: #75726c;">Enter your Password</span>
                        <input type="password" value="" name="password" placeholder="xxxxx" id="password" class="form-control">
                        <br>
                        <span style="margin-left: -20%;color: #75726c;">Enter your Confirm Password</span>
                        <input type="password" value="" name="cpassword" placeholder="xxxxx" id="cpassword" class="form-control">
                        <br>
                        <input type="button" value="START IT" name="save" id="save" class="btn btn-success">
                    </div>  
                   
                    <br>
                    <br>
                    <br>
                </div>
                
            </div>
        </div>


    </div>
</div>
<br>
<br>
<br>





<script>
    $(document).ready(function () {



        $("#save").click(function () {
            $email = $("#email").val();
            $user = $("#username").val();
            $pass = $("#password").val();
            if (!$("#email").val() || !$("#username").val() || !$("#password").val()) {
                alert("Please Fill all details");
            } else {
                $.post("Control_Register.php",
                        {
                            username: $user,
                            password: $pass,
                            email: $email
                        },
                        function (data, status) {

                            alert("Data: " + data + "\nStatus: " + status);
                            window.location.href = 'UserProfile.php';
                        });
            }
        });


    });
</script>

<!-- Modal -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div>
    <script src="jquery/jquery.min.js"></script>


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
                            <input type="password" class="form-control" id="psw" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked>Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-default btn-success btn-block" id="login"><span class="glyphicon glyphicon-off"></span> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer text-faded text-center py-5">
        <div class="copyright">
            &copy; Copy right 2018 | <a href="#">Web Application Developement II - Project</a>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/picedit.min.js"></script>


    <script>
    $(document).ready(function () {
        $("#myBtn").click(function () {
            $("#myModal").modal();
        });

        $(".chat-main").hide();
        $("#chart-open").show();
        $("#close").click(function () {
            $(".chat-main").hide();
            $("#chart-open").show();
        });

        $("#chart-open").click(function () {
            $(".chat-main").show();
            $("#chart-open").hide();
        });






        $("#login").click(function () {

            if (!$("#usrname").val() || !$("#psw").val()) {
                alert("Please Enter Username and password");
            } else {
                $user = $("#usrname").val();
                $pass = $("#psw").val();

                $.post("Control_Signin.php",
                        {
                            username: $user,
                            password: $pass
                        },
                        function (data, status) {

                            if (data == "1") {
                                alert("Wrong User name or password");
                            } else {
                                window.location.reload();
                            }
                        });
            }
        });


    });
    </script>
</div>



