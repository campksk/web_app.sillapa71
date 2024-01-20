<?php
    require("connect.php");
    session_start();
    if(isset($_GET["id"])) {
        $Id = $_GET["id"];
        $query_delete = "DELETE FROM comment WHERE commentId = '$Id'";
        $result_delete = mysqli_query($conn, $query_delete);
        die(header("location: select.php?list=".$_SESSION['list'].""));
    }
    
?>