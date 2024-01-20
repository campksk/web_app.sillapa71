<?php
    require("connect.php");
    $accId = $_GET["id"];
    $delete = "DELETE FROM account WHERE accId='$accId'";
    $result_de = mysqli_query($conn, $delete);
    die(header("location: madmin.php"));

?>