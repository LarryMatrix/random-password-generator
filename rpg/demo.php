<?php
	$conn = new mysqli("localhost","root","","pass_gen");

	
                        echo "<table class='table'>
                                  <thead>
                                      <tr>
                                        <th>id</th>
                                        <th>password</th>
                                      </tr>
                                  </thead>
                                  <tbody>";
                                        $sql = "SELECT * FROM `passwords` WHERE `id` > 210";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>
                                                <td>".$row['id']."</td>
                                                <td>".md5($row['pass'])."</td>
                                            </tr>";
                                        }
                                        mysqli_free_result($result);
                                        mysqli_close($conn);
                                    
                                 echo " </tbody>
                              </table>";
?>