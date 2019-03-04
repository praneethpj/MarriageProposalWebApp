 <?php include './common/header.php'; ?>


        <div class="container">
            <div class="row">
                <div class="col-8">
                    <input type="text" value="" placeholder="email" name="email" id="email" class="form-control">
                    <br>
                    <input type="text" value="" placeholder="username" name="username" id="username" class="form-control">
                    <br>
                    <input type="text" value="" placeholder="password" name="password" id="password" class="form-control">
                    <br>
                    <input type="button" value="save" name="save" id="save" class="btn btn-success">
                </div>  
            </div>

            <script>
                $(document).ready(function () {



                    $("#save").click(function () {
                        $email = $("#email").val();
                        $user = $("#username").val();
                        $pass = $("#password").val();

                        $.post("Control_Register.php",
                                {
                                    username: $user,
                                    password: $pass,
                                    email:$email
                                },
                                function (data, status) {
                                    alert("Data: " + data + "\nStatus: " + status);
                                });
                    });


                });
            </script>
        </div>
        <?php
        include './common/footer.php';
        ?>
        









