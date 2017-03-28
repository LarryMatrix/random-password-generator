<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Lawrance Massanja">
    <title>RPG</title>
    <link href="creation/css/mine.css" rel="stylesheet">
    <link href="creation/css/styling.css" rel="stylesheet">
        <style>
    body {
        padding-top: 60px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a style="color: white;" class="navbar-brand" href="/rpg/">:- RPG</a>
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
                    <p><a class="btn btn-info" href="signup/">Create Account with RPG</a> or <a class="btn btn-success" href="login/">Login</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <p style="font-size: 18px;">Enter the maximum number of password limit to be generated <i>eg: 16</i></p>
                            <div class="col-sm-10">
                                <input type="number" name="length" class="form-control" placeholder="Not Greater Than 61">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="checkbox" name="checkCapital" value="CapitalLetters" checked>Capital Letters
                                <input type="hidden" name="hidden" value="hidden" checked required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="checkbox" name="checkSmall" value="SmallLetters" checked>Small Letters
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="checkbox" name="checkNums" value="Numerals" checked>Numbers
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <input type="submit" class="form-control btn btn-primary" placeholder="Not Greater Than 61" name="submit" value="Generate Password">
                            </div>
                            <div class="col-sm-3">
                                <a href="/rpg/" class="btn btn-default">Clear</a>
                            </div>
                        </div>
                    </form>

                    <?php
                        if (isset($_POST['submit'])) {
                            $conn = new mysqli("localhost","root","","pass_gen");
                            if(!$conn){
                                die("Connection Lost:".connect_error);
                            }
                            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';

                            $length = $_POST['length'];

                            $password = '';


                            if (isset($_POST['checkCapital']) && !isset($_POST['checkSmall']) && !isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(0, 25)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }

                                if ($length > 61 || $length < 0){
                                    echo "<p class='lead' style='color: red;'>Please try again<br/>The number entered is out of range<br/>No Password is Generated.</h3>";
                                }

                                if (!empty($length) && $length < 62 && $length > -1) {
                                    for ($i = 0; $i < $length; $i++){
                                        $password .= $characters[mt_rand(0, 25)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkSmall']) && !isset($_POST['checkCapital']) && !isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(26, 51)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }

                                if ($length > 61 || $length < 0){
                                    echo "<p class='lead' style='color: red;'>Please try again<br/>The number entered is out of range<br/>No Password is Generated.</h3>";
                                }

                                if (!empty($length) && $length < 62 && $length > -1) {
                                    for ($i = 0; $i < $length; $i++){
                                        $password .= $characters[mt_rand(26, 51)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkNums']) && !isset($_POST['checkCapital']) && !isset($_POST['checkSmall']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(52, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }

                                if ($length > 61 || $length < 0){
                                    echo "<p class='lead' style='color: red;'>Please try again<br/>The number entered is out of range<br/>No Password is Generated.</h3>";
                                }

                                if (!empty($length) && $length < 62 && $length > -1) {
                                    for ($i = 0; $i < $length; $i++){
                                        $password .= $characters[mt_rand(52, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (!isset($_POST['checkNums']) && !isset($_POST['checkCapital']) && !isset($_POST['checkSmall']) && isset($_POST['hidden'])) {
                                echo "<p class='lead' style='color: red;'>Please select at least one field above.<br/>No Password is Generated.</h3>";
                            } else if (isset($_POST['checkCapital']) && isset($_POST['checkSmall']) && !isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(0, 51)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }

                                if ($length > 61 || $length < 0){
                                    echo "<p class='lead' style='color: red;'>Please try again<br/>The number entered is out of range<br/>No Password is Generated.</h3>";
                                }

                                if (!empty($length) && $length < 62 && $length > -1) {
                                    for ($i = 0; $i < $length; $i++){
                                        $password .= $characters[mt_rand(0, 51)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkCapital']) && !isset($_POST['checkSmall']) && isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(0, 25)].$characters[mt_rand(52, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }

                                if ($length > 61 || $length < 0){
                                    echo "<p class='lead' style='color: red;'>Please try again<br/>The number entered is out of range<br/>No Password is Generated.</h3>";
                                }

                                if (!empty($length) && $length < 62 && $length > -1) {
                                    for ($i = 0; $i < $length; $i++){
                                        $password .= $characters[mt_rand(0, 25)].$characters[mt_rand(52, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (!isset($_POST['checkCapital']) && isset($_POST['checkSmall']) && isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(26, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }

                                if ($length > 61 || $length < 0){
                                    echo "<p class='lead' style='color: red;'>Please try again<br/>The number entered is out of range<br/>No Password is Generated.</h3>";
                                }

                                if (!empty($length) && $length < 62 && $length > -1) {
                                    for ($i = 0; $i < $length; $i++){
                                        $password .= $characters[mt_rand(26, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkCapital']) && isset($_POST['checkSmall']) && isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(0, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }

                                if ($length > 61 || $length < 0){
                                    echo "<p class='lead' style='color: red;'>Please try again<br/>The number entered is out of range<br/>No Password is Generated.</h3>";
                                }

                                if (!empty($length) && $length < 62 && $length > -1) {
                                    for ($i = 0; $i < $length; $i++){
                                        $password .= $characters[mt_rand(0, 61)];
                                    }
                                    echo "<p style='font-size: 16px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else {
                                echo "<p style='font-size: 18px;'>Please retry randomizing again</p>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="creation/js/jquery.js"></script>
    <script src="creation/js/name.js"></script>
    <script src="creation/js/bootstrap.min.js"></script>
</body>
</html>