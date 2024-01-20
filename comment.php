<?php
    session_start();
    require("connect.php");
    $Id = $_SESSION['list'];
    $acc_Id = $_SESSION["account"]["accId"];
    $comment = $_POST["comment"];
    $query_ccomment = "INSERT INTO comment VALUE('','$Id','$acc_Id','$comment')";
    $result_ccoment = mysqli_query($conn, $query_ccomment);
    die(header("location: select.php?list=".$_SESSION['list'].""));
?>