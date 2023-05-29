<?php
session_start();
if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}
if (isset($_POST["submit"])) {
    $target_dir = "/img/users/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../' . $target_file)) {
        echo "<script>alert('something wrong');</script>";
        echo "<script>window.location.replace('../index.php');</script>";
    } else {
        $conn = require_once('../config.php');
        $sql = "UPDATE `users_profile_photo` SET `img_path` = '" . $target_file . "' WHERE `users_profile_photo`.`user_id` = " . $_SESSION['user_id'] . ";";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('修改成功');</script>";
            echo "<script>window.location.replace('../index.php');</script>";
        } else {
            echo "<script>alert('something wrong');</script>";
            echo "<script>window.location.replace('../index.php');</script>";
        }
    }
} else {
    function_alert("Something wrong");
}

function function_alert($message)
{
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='../index.php';
    </script>";
    return false;
}
?>