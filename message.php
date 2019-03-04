<?php require 'system/Connection.php'; ?>
<html>
    <head>
        <title>Chatting</title>
        <script src="jquery/jquery.min.js"></script>



        <link href="css/style.css" rel="stylesheet">
        <link href="css/awesomplete.css" rel="stylesheet">
        <script type="text/javascript" src="js/awesomplete.min.js"></script>

    </head>
    <body>

        <?php include './common/header.php'; ?>



        <section class="page-section">
            <div class="container">
                <br>
                <div class="row" style="background: #fff;">
                    <div class="col-5">
                        Enter Member name: <input type="text" id="inputlist" class="form-control" />
                    </div>
                </div>

                <div class="row" style="background: #fff;">
                    <div class="col-5">
                        <div id="text" style='overflow:auto; width:400px;height:160px;border: 1px solid;background-color: lightgray;'>

                        </div>
                    </div>
                </div>
                <div class="row" style="background: #fff;">
                    <div class="col-5">
                        <input type="text" value="" placeholder="your message" id="msg" class="form-control" maxlength="20">
                        <input type="button" value="Send" id="btnSend">
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
                    $.post('sendMsg.php', {msg: $("#msg").val(), userid: $("#inputlist").val()}, function () {
                        $("#text").scrollTop(1300);
                    });
                }

            });

        </script>

    </body>
</html>




<?php

 

