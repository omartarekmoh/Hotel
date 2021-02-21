<?php
  include "db/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
  
  <div class="mb-3 row">
    <label for="search" class="col-sm-2 col-form-label">Search</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="search">
    </div>
  </div>


  <table class="table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Distnation</td>
      <td>Check in</td>
      <td>Check out</td>
      <td>Adults num</td>
      <td>Children num</td>
      <td>Rooms num</td>
    </tr>
  </thead>
  <tbody id="rr">
    <?php
      $result = mysqli_query($conn, "SELECT * FROM reservation") or die("ERROR");
      if(mysqli_num_rows($result) > 0)
      {
      while($row = mysqli_fetch_assoc($result)){ 
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
    else{
      echo '<td colspan="6"><h3 style="text-align:center">There are no users found</h3></td>';
    }
    ?>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="user.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>