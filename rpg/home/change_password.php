<h3>Change Password</h3><hr/><br/>
<div class="col-md-10">
<?php
if(!isset($_GET['error'])){
    echo"<div class='alert alert-info' role='alert'><p>This action is not revesrible, don't rush.</p></div>";
}
else{
    $error = $_GET['error'];
    Switch($error){
        case 0:
        echo"<div class='alert alert-success' role='alert'><p>Password Successfully Changed</p></div>";
        break;
        case 1:
        echo"<div class='alert alert-danger' role='alert'><p>Password was not changed, please try again.</p></div>";
        break;
        case 2:
        echo"<div class='alert alert-danger' role='alert'><p>Passwords do not match.</p></div>";
        break;
    }
}
?>
  <form action="" method="POST">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="curr_pass" class="form-control" placeholder="Enter current/old password">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="new_pass" class="form-control" placeholder="Enter new password Purpose">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="text" name="conf_pass" class="form-control" placeholder="Confirm new password Purpose">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-5">
      <input type="submit" class="form-control btn btn-primary" name="submit" value="Change Password">
    </div>
  </div>
</form>
<?php
  if(isset($_POST['submit'])){
    include("../eng/connect.php");
  $usid = $_SESSION["user_id"];
  $curr_pass = $_POST['curr_pass'];
  $new_pass = $_POST['new_pass'];
  $conf_pass = $_POST['conf_pass'];
  $run_pass = $_SESSION["password"];

  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($run_pass != $curr_pass) {
    echo "<script>window.location=''../home/?p=change_password.php?error=2';</script>";
  }
  if($new_pass != $conf_pass) {
    echo "<script>window.location=''../home/?p=change_password.php?error=2';</script>";
  } else {
      $updatepass = "UPDATE `account` SET `password` = '$new_pass' WHERE `usid` = '$usid'";
      if ($conn -> query($addsql) === TRUE) {
        echo "<script>window.location='../home/?p=change_password?error=0';</script>";
        exit;
      } else {
        echo "<script>window.location='../home/?p=change_password?error=1';</script>";
        exit;
      }
    }
  }
  
  
  mysqli_close($conn);
  }
?>
</div>
