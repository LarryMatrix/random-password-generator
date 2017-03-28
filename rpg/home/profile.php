<?php 
    session_start();
    include("lock.php");
    include("../eng/connect.php");
?>
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
                <a style="color: white;" class="navbar-brand" href="../home/">:- RPG</a>
            </div>
            <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <div class="btn-group">
                              <img src="kali/mine.jpg" data-toggle="dropdown" class="img-responsive img-circle dropdown-toggle" width="40" length="auto"/>
                              <ul class="dropdown-menu">
                                  <?php
                                        $usid = $_SESSION["user_id"];
                                        $profile = "SELECT `full_name` FROM `account` WHERE `usid` = '$usid'";
                                        $result = mysqli_query($conn, $profile);
                                        if (mysqli_num_rows($result) > 0) {
                                            $row = mysqli_fetch_assoc($result);
                                            echo "<li><a><span class='glyphicon glyphicon-user'></span> ".$row['full_name']."</a></li>";
                                        }
                                        mysqli_close($conn);
                                    ?>
                                <li class="divider"></li>
                                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
                              </ul>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3>Random Password Generator Manager (RPG - Man)</h3>
                <p class="lead">It is a free software that manages secret and secured passwords for anyone to be used anywhere</p>
            </div>
            <h1>404 - Not Found</h1>
        </div>
    </div>
    <script src="../creation/js/jquery.js"></script>
    <script src="../creation/js/name.js"></script>
    <script src="../creation/js/bootstrap.min.js"></script>
</body>
</html>