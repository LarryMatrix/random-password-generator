<h3>My Passwords</h3><hr/>
<table class="table table-striped table-hover">
  <thead>
    <tr class="info">
      <th>Password</th>
      <th>Purpose</th>
      <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include("../eng/connect.php");
      $usid = $_SESSION["user_id"];
      $pass = "SELECT `id`, `pass`, `purpose` FROM `passwords` WHERE `usid` = '$usid'";
      $result = mysqli_query($conn, $pass);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr class='success'>
        <td><input id='".$row['pass']."' type='text' value='".$row['pass']."'/><button class='glyphicon glyphicon-copy btn-sm btn-danger' data-copytarget='#".$row['pass']."'></button></td>
        <td>".$row['purpose']."</td>
        <td><a href='' class='btn btn-xs btn-primary'>Go to login site</a> <a href='' class='btn btn-xs btn-danger'>Delete</a></td>
       </tr>";
      }
      mysqli_close($conn);
    ?>
  </tbody>
</table> 
<hr/>