<?php
    require("connect.php");
        session_start();

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $query_have_acc = "SELECT * FROM admin WHERE username = '$username'";
        $result_have_acc = mysqli_query($conn, $query_have_acc);
        if(mysqli_num_rows($result_have_acc) == 1) {
            $row = $result_have_acc->fetch_assoc();
            if($password == $row["password"])
            {
                $_SESSION["admin"] = $row;
                die(header("location: madmin.php"));
            }
        }
        else {
            $_SESSION["bad_regis"] = "มีบัญชีนี้อยู่แล้ว";
            die(header("location: regis.php"));
        }
?>