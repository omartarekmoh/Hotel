<?php include 'header.php'; ?>

<div id="tm-section-1" style="color: #FFF">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-3 mt-3">
            <label for="search" class="col-sm-2 col-form-label">Search</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="search" placeholder="Type here...">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-11">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Destination</td>
                        <td>Check In</td>
                        <td>Check Out</td>
                        <td>Adults Number</td>
                        <td>Children Number</td>
                        <td>Rooms Number</td>
                    </tr>
                </thead>
                <tbody id="rr">
                    <?php
                    $result = mysqli_query($conn, "SELECT * FROM reservation") or die("ERROR");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['dist'] . "</td>";
                            echo "<td>" . $row['check_in'] . "</td>";
                            echo "<td>" . $row['check_out'] . "</td>";
                            echo "<td>" . $row['adult_num'] . "</td>";
                            echo "<td>" . $row['child_num'] . "</td>";
                            echo "<td>" . $row['room_num'] . "</td>";
                            echo '</tr>';
                        }
                    } else {
                        echo '<td colspan="7"><h3 style="text-align:center">There are no users found</h3></td>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="user.js"></script>

</body>

</html>