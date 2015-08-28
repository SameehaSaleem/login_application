<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginAjax</title>
        <link rel="Stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/Main.css">
        <!--<script src="js/jquery-1.11.1.js" type="text/javascript"></script>-->
<!--        <script src="jquery-1.4.1.min.js" type="text/javascript"></script>-->
        <!--<script type="text/javascript">-->
        <script type="text/javascript" src="jquery-1.4.1.min.js"></script>
        <script type="text/javascript">


            function validLogin() {
                //if have many user inputs use serilazation techanic
                //var data_ = $('#form1').serialize();

                var uname = $('#uname').val();
                var password = $('#password').val();
                var dataString = 'uname=' + uname + '&password=' + password;

                //$("#flash").show();
                //$("#flash").fadeIn(400).html('<img src="image/loading.gif" />');
                $.ajax({
                    type: "POST",
                    url: "checkMember.php",
                    data: dataString,
                    cache: false,
                    success: function (result) {
                        var result = trim(result);
                        $("#flash").hide();
                        if (result == 'correct') {

                            window.location = 'home.php';
                        } else {
                            $("#errorMessage").html(result);
                        }
                    }
                });
            }

            function trim(str) {
                var str = str.replace(/^\s+|\s+$/, '');
                return str;
            }
        </script>

    </head>
    <body>

        <p> <br/> </p> 
        <div class="container"  >   
            <div class="row">

                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="page-header" style="margin-top: 10px;" >
                                <h3>Login Form</h3>
                                <br></br>
                                <!--<table align=" center" class="login_box">-->
                                    <!--<tr><td class="alert-danger" colspan="2" id="errorMessage" ></td></tr>-->
                                <div class="alert-danger" colspan="2" id="errorMessage"  >
                            </div>

                            <!--<form class="form-horizontal" action="checkMember.php" method="POST"onsubmit="return MyValidation()">-->
                            <div class="form-group">
                                <label for="uname" class="col-sm-2 control-label">UserName</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input-sm chat-input" id="uname" placeholder="UserName" name="uname">
                                    <br></br>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control input-sm chat-input" id="password" placeholder="Password" name="password">
                                 <br></br>
                                </div>
                            </div>

                                    
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit"  id="submitbtn" class="btn btn-primary btn-md" onclick="validLogin()"<span class="glyphicon-log-in"></span>LogIn</button>
                                     <!--<input type="button" name="submit" value="Login" class="button" onclick="validLogin()"<span class="glyphicon-log-in"></span>>-->
                                </div>
                            </div>
                            <!--                                </form>-->
                        </div>
                    </div>
                </div>

            </div>
            <tr><td colspan="2" id="flash"></td></tr>
        
    </div>
    <?php
    include('commons.php');
    generateFooter(); #footer generated
    ?>




</body>
</html>
