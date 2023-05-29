<?php
// Initialize the session
session_start();
// Include config file
$conn = require_once('../config.php');
if (isset($_POST['token']) && $_POST['token'] == $_SESSION['csrf_token']) {
    $sql = "DELETE FROM users WHERE `users`.`user_id` = ?";
    $st = $mysqli->prepare($sql);
    $st->bind_param('d', $_SESSION['user_id']);
    if ($st->execute()) {
        $_SESSION = array(); //將session清空
        session_destroy(); //銷毀當前的session
        echo "<script>alert('帳號刪除！');
        window.location.href='../index.php'
        </script>";
        
    } else {
        echo "<script>alert('發生錯誤，將跳回首頁');
     window.location.href='../index.php';
    </script>";
    }
} else {
    echo "<script>alert('發生錯誤，將跳回首頁');
 window.location.href='../index.php';
</script>";
}
?>