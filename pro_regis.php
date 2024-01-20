<?php
    require("connect.php");
        session_start();

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $query_have_acc = "SELECT * FROM account WHERE username = '$username'";
        $result_have_acc = mysqli_query($conn, $query_have_acc);
        if(mysqli_num_rows($result_have_acc) == 0) {

            $query_cacc = "INSERT INTO account VALUE('','$username','$email','$password','member')";
            $result_cacc = mysqli_query($conn, $query_cacc);
            $_SESSION["good_regis"] = "สมัครสมาชิกเสร็จสิ้น";
            die(header("location: login.php"));
        }
        else {
            $_SESSION["bad_regis"] = "มีบัญชีนี้อยู่แล้ว";
            die(header("location: regis.php"));
        }
?>