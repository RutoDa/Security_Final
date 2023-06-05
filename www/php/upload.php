<?php
session_start();
if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}
if (isset($_POST["submit"])) {
    $target_dir = "/img/users/uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $fileMimeType = $_FILES["fileToUpload"]["type"];
    if(!in_array($fileMimeType, ['image/jpeg', 'image/jpg', 'image/png'])){
        //白名單方式檢查檔案的MIME
        echo "<script>alert('檔案格式有誤，請重試！！');</script>";
        echo "<script>window.location.replace('../index.php');</script>";
    } else if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../' . $target_file)) {
        //將檔案上傳，若發生錯誤會跳出以下訊息
        echo "<script>alert('上傳檔案時發生問題，請重試！！');</script>";
        echo "<script>window.location.replace('../index.php');</script>";
    } else {
        //上傳成功，將照片名稱存回資料庫，以便之後顯示
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