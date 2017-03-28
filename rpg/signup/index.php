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
                    <p><a class="btn btn-success" href="../login/">Login</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <p class="lead"></p>
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="length" class="form-control-label"><p class="lead">Sign up with RPG- Man</p></label>
                            <div class="col-sm-10">
                                <input type="text" name="full_name" class="form-control" placeholder="Enter your full name here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control" placeholder="Enter your username here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="number" name="mob_no" class="form-control" placeholder="Enter your mobile number here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="password" name="pswd" class="form-control" placeholder="Enter your password here" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="submit" class="form-control btn btn-info" name="submit" value="Sign Up">
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

                            $fname = mysqli_real_escape_string($conn, htmlspecialchars($_POST['full_name']));
                            $usid = mysqli_real_escape_string($conn, htmlspecialchars($_POST['username']));
                            $mob_no = mysqli_real_escape_string($conn, htmlspecialchars($_POST['mob_no']));
                            $pswd = md5($_POST['pswd']);
                            $level = "User";


                            if(empty($usid)){
                                echo "<script>window.location='../signup/';</script>";
                            }else if(empty($pswd)){
                                echo "<script>window.location='../signup/';</script>";
                            }else if(empty($mob_no)){
                                echo "<script>window.location='../signup/';</script>";
                            }else if(empty($fname)){
                                echo "<script>window.location='../signup/';</script>";
                            }else{
                                $signup = "INSERT INTO `account` (`usid`, `full_name`, `mob_no`, `level`, `password`) VALUES ('$usid', '$fname', '$mob_no', '$level', '$pswd')";
                                
                                if ($conn -> query($signup) === TRUE) {
                                    echo "<script>window.location='../login/';</script>";
                                } else {
                                    echo "<p style='font-size: 16px;'>The username <i><u><font color='red'>".$usid."</font></u></i> already exists.</p>";
                                }
                            }
                            mysqli_close($conn);
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