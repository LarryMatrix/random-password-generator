<h3>Add Password</h3><hr/><br/>
<div class="col-md-6">
  <form action="" method="POST">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="pswd" class="form-control" placeholder="Enter Password here">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="purpose" class="form-control" placeholder="Enter Password Purpose here">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-6">
      <input type="submit" class="form-control btn btn-primary" name="submit" value="Add Password">
    </div>
    <div class="col-sm-6">
      <input type="reset" class="form-control btn btn-danger" value="Clear">
    </div>
  </div>
</form>
<?php
  if(isset($_POST['submit'])){
    include("../eng/connect.php");
  $usid = $_SESSION["user_id"];
  $addpassword = $_POST['pswd'];
  $purpose = $_POST['purpose'];

  if (empty($addpassword) || empty($purpose) || (empty($addpassword) && empty($purpose))) {
    echo "<script>window.location='../home/?p=add_password';</script>";
  }

  $addsql = "INSERT INTO `passwords` (`id`, `pass`, `purpose`, `usid`) VALUES (NULL, '$addpassword', '$purpose', '$usid')";

  if ($conn -> query($addsql) === TRUE) {
    echo "<script>window.location='../home/?p=add_password';</script>";
  } else {
    die(mysqli_error($conn));
  }
  mysqli_close($conn);
  }
?>
</div>
<div class="col-md-6">
                    <p class="lead"></p>
                    <form action="" method="POST">
                        <div class="form-group row">
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
                                <input type="submit" class="form-control btn btn-primary" placeholder="Not Greater Than 61" name="gen_pass" value="Generate Password">
                            </div>
                            <div class="col-sm-3">
                                <a href="/rpg/home/?p=add_password" class="btn btn-default">Clear</a>
                            </div>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['gen_pass'])) {
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkSmall']) && !isset($_POST['checkCapital']) && !isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(26, 51)];
                                    }
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkNums']) && !isset($_POST['checkCapital']) && !isset($_POST['checkSmall']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(52, 61)];
                                    }
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkCapital']) && !isset($_POST['checkSmall']) && isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(0, 25)].$characters[mt_rand(52, 61)];
                                    }
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (!isset($_POST['checkCapital']) && isset($_POST['checkSmall']) && isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(26, 61)];
                                    }
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else if (isset($_POST['checkCapital']) && isset($_POST['checkSmall']) && isset($_POST['checkNums']) && isset($_POST['hidden'])) {
                                if (empty($length)) {
                                    for ($i = 0; $i < 8; $i++){
                                        $password .= $characters[mt_rand(0, 61)];
                                    }
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
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
                                    echo "<p style='font-size: 14px;'>The Generated Password According To The Defined Length Here.</p>
                                        <input id='password' type='text' value='$password'/>
                                        <button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#password'></button>";
                                }
                            } else {
                                echo "<p style='font-size: 18px;'>Please retry randomizing again</p>";
                            }
                        }
                    ?>
</div>
