<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include "db/db.php";

  $result = mysqli_query($conn, "SELECT * FROM reservation") or die("ERROR");

  if(mysqli_num_rows($result) > 0)
  {
    while($row = mysqli_fetch_assoc($result)){
      if(strpos(strtolower($row['dist']), strtolower($_POST['value'])) !== false)
      {
        echo '<tr>';
        echo "<td>".$row['id']."</td>";
        echo "<td>" . $row['dist'] . "</td>";
        echo "<td>" . $row['check_in'] . "</td>";
        echo "<td>" . $row['check_out'] . "</td>";
        echo "<td>" . $row['adult_num'] . "</td>";
        echo "<td>" . $row['child_num'] . "</td>";
        echo "<td>" . $row['room_num'] . "</td>";
        echo '</tr>';
      }     
    }
  }
  else{
    echo '<td colspan="6"><h3 style="text-align:center">There are no users found</h3></td>';
  }
}
  
  