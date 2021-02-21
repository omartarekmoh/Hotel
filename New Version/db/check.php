<?php

include_once "db.php";

if (isset($_POST["submit"])) {
    # code...
    $name = $_POST["dist_name"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $adult = $_POST["adult"];
    $child = $_POST["child"];
    $room = $_POST["room"];

    $error_empty = false;
    $error_check = false;
    $error_date = false;

    if (empty($name) || empty($check_in) || empty($check_out) || $child == "" || empty($adult) || empty($room)) {
        echo "<span class=\"form-error\">Please fill all the fields</span>";
        $error_empty = true;
    } else if ((strtotime($check_in) > strtotime($check_out)) || (!strtotime($check_in) || !strtotime($check_out)) || (strtotime($check_in) < strtotime(date('Y/m/d')))) {
        echo "<span class=\"form-error\">Please fill right dates for check in and check out</span>";
        $error_check = true;
    } else {
        $newdate1 = date("Y-m-d", strtotime($check_in));
        $newdate2 = date("Y-m-d", strtotime($check_out));
        echo "<span class=\"form-succes\">Added successfully, enjoy your holiday.</span>";
        $query = "INSERT INTO reservation (id, dist, check_in, check_out, adult_num, child_num, room_num) VALUES (NULL, '$name' , '$newdate1' , '$newdate2' , $adult , $child , $room);";
        $value = mysqli_query($conn, $query) or die("ERROR");
        mysqli_close($conn);
    }
} else {
    echo "There was an error!!!";
}
?>

<script>
    var err1 = "<?= $error_empty ?>";
    var err2 = "<?= $error_check ?>"
    var err3 = "<?= $error_date ?>"

    if (err1 == false && err2 == false && err3 == false) {
        $("#inputCity, #inputCheckIn, #inputCheckOut, #adult, #children, #room").val("");
    }
</script>