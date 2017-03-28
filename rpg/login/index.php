<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Lawrance Massanja">
    <title>RPG</title>
    <link href="../creation/css/mine.css" rel="stylesheet">
    <link href="../creation/css/styling.css" rel="stylesheet">
        <style>
    body {
        padding-top: 70px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a style="color: white;" class="navbar-brand" href="../">:- RPG</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Random Password Generator Manager (RPG - Man)</h3>
                <p class="lead">Manages secret and secured passwords for anyone to be used anywhere</p>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h4 class="text-center">Random Password Genarator Manager</h4>
                    <p class="lead" style="font-size: 17px;">This is the free software that lets anyone to create a unique, strong, and secured password for the use of online or even offline accounts or systems <i>i.e Gmail, Facebook, Twitter, Instagram etc</i></p>
                    <p class="lead" style="font-size: 17px;">We also save your passwords as for future use and in case of forgetting, it is safe with RPG - Man</p></font>
                    <p><a class="btn btn-info" href="../signup/">Create Account with RPG</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <p class="lead"></p>
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="length" class="form-control-label"><p class="lead">Login to RPM - Man</p></label>
                            <div class="col-sm-10">
                                <input type="text" name="usid" class="form-control" placeholder="Enter Username here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="password" name="pswd" class="form-control" placeholder="Enter Password here">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="submit" class="form-control btn btn-primary" name="submit" value="Login">
                            </div>
                            <div class="col-sm-3">
                                <input type="reset" class="form-control btn btn-default" value="Clear">
                            </div>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['submit'])){
                            $conn = new mysqli("localhost","root","","pass_gen");
                            if(!$conn){
                                die("Connection Lost:".connect_error);
                            }

                            session_start();
                            
                            $usid = $_POST['usid'];
                            $pswd = md5($_POST['pswd']);

                            if(empty($usid)){
                                echo "<script>window.location='../login/';</script>";
                            }else if(empty($pswd)){
                                echo "<script>window.location='../login/';</script>";
                            }else{
                                $login = "SELECT `usid`, `password`, `level` FROM `account` WHERE `usid` = '$usid'";
                                $results = $conn -> query($login);
                                if(!$results){
                                    die(mysqli_error($conn));
                                }
                                if(mysqli_num_rows($results) > 0){
                                    $row = $results -> fetch_assoc();
                                    if ($usid == $row['usid'] && $pswd == $row['password']){
                                        //store session variables
                                        $_SESSION['user_id']=$row["usid"];
                                        $_SESSION['password']=$row["password"];
                                        
                                        //set cookie values
                                        $cookie_name = "SESSION-ID";
                                        $cookie_value = $pswd.mt_rand();
                                
                                        $_SESSION["SESSION-ID"] = $cookie_value;
                                        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
                                
                                        $_SESSION["cookie_name"]=$cookie_name;

                                        if($row["level"]=="User"){
                                            echo "<script>window.location='../home/';</script>";
                                            exit;
                                        } else if ($row['level'] == "Admin"){
                                            echo "<script>window.location='../admin/';</script>";
                                            exit;
                                        }
                                    }
                                    if ($pswd != $row['password'] || $usid != $row['usid'] || ($pswd != $row['password'] && $usid != $row['usid'])) {
                                        echo "<script>window.location='../login/';</script>";
                                    }else {
                                        echo "<script>window.location='../login/';</script>";
                                    }
                                }
                            }

                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="../creation/js/jquery.js"></script>
    <script src="../creation/js/name.js"></script>
    <script src="../creation/js/bootstrap.min.js"></script>
</body>
</html>