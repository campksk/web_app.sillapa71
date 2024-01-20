<?php
    require("connect.php");
    session_start();
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $accId = $_SESSION["account"]["accId"];

    if($password == $_SESSION["account"]["password"]){
        $query_update = "UPDATE account SET username ='$username', email ='$email' WHERE accId ='$accId'";
        $result_update = mysqli_query($conn, $query_update);
        $_SESSION["account"]["username"] = $username;
        $_SESSION["account"]["email"] = $email;
        $_SESSION['good_up'] = "อัพเดทข้อมูลเสร็จสิ้น";
        die(header("location: account.php"));
    }

?>