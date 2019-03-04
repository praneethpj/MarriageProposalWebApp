<!-- Modal -->

<script src="jquery/jquery.min.js"></script>
 


<link href="css/style.css" rel="stylesheet">
<link href="css/awesomplete.css" rel="stylesheet">
<script type="text/javascript" src="js/awesomplete.min.js"></script>

<?php if (isset($_SESSION['user_session'])) { ?>
    <div class="chat-main" id="chart-open" style="width: 100px;">

        <div>
            <section class="page-section" style="height: 100px;width: 280px;height: 245px;

                     position: sticky;
                     position: -webkit-sticky;top: 0px;z-index: 11111111111;margin-left: -100px;margin: 10px 180% 10px">
                <img src="chat_1105409.png" style="width: 100px;height: 100px">
                </div>
                </div>
                <div class="chat-main" style="width: 100px;">

                    <div>
                        <section class="page-section" style="height: 100px;width: 280px;height: 245px;

                                 position: sticky;
                                 position: -webkit-sticky;top: 0px;z-index: 11111111111;margin-left: -100px;">
                            <div class="chat-header" style="background-color: #005cbf;color: #fff">
                                Instant Chatti
                                <img src="icons8-cancel-50.png" style="width:
                                     30px;height: 30px;margin: -3px 152px;
                                     position: absolute;cursor: pointer" id="close">
                            </div>
                            <div class="container" style="border: 3px solid red;width: 100%">
                                <br>
                                <div class="row" style="background: #fff;">
                                    <div class="col-12">
                                        <input type="text" id="inputlist" class="form-control" 
                                               placeholder="Enter Member name" style="width: 127%" />
                                    </div>
                                </div>


                                <div class="row" style="background: #fff;">
                                    <div class="col-9">
                                        <div id="text" style='overflow:auto; width:250px;height:160px;border:
                                             1px solid;background-color: lightgray;'>

                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="background: #fff;">
                                    <div class="col-10">
                                        <input type="text" value="" placeholder="Your Message" id="msg"
                                               class="form-control" maxlength="50">
                                        <div  style="margin: -38px 100% 1px;cursor: pointer">

                                            <div id="btnSend">
                                                <img src="icons8-paper-plane-480.png" 
                                                     style="width: 40px;height: 40px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>



                        <script type="text/javascript">


                            $(document).ready(function () {

                                var username = '';


                                var input = $("#inputlist")[0];
                                new Awesomplete(input, {list: <?php
    $conn = Connect();
    $sql = "select username from login";
    $result = mysqli_query($conn, $sql);
    echo '[';
    while ($row = mysqli_fetch_array($result)) {
        echo '"' . $row['username'] . '",';
    }
    echo ']';
    ?>});
                                $("#inputlist").on('awesomplete-selectcomplete', function () {
                                    username = this.value;
                                });

                                $("#text").scrollTop(1000);
                                function loadlink() {
                                    $.ajax({
                                        type: "POST",
                                        url: "loadMessage.php",
                                        data: {
                                            user: username
                                        },
                                        success: function (result) {
                                            $('#text').html(result);
                                        }
                                    });
                                }


                                setInterval(function () {
                                    loadlink(); // this will run after every 5 seconds
                                },
                                        100);

                                $("#btnSend").click(function () {
                                    sendMsg();
                                });

                                $("#msg").keypress(function (event) {
                                    if (event.which == 13) {
                                        sendMsg();

                                    }
                                });



                                function sendMsg() {
                                    //  alert($("#inputlist").val());

                                    if (!$("#inputlist").val()) {

                                    } else {
                                        $.post('Controller_SendMsg.php', {msg: $("#msg").val(), userid: $("#inputlist").val()}, function () {

                                            $('#text').animate({scrollTop: 9999});

                                            $("#msg").val("");
                                        });
                                    }
                                }







                                $('#msg').keypress(function (e) {
                                    var regex = new RegExp("^[a-zA-Z0-9\b\0 ]");
                                    var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                                    if (regex.test(str)) {
                                        return true;
                                    }

                                    e.preventDefault();
                                    return false;
                                });


                            });

                        </script>
                    </div>
                </div>

            <?php } ?>            

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
            </body>

            </html>
