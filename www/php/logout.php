<?php 
session_start(); 
$_SESSION = array(); //將session清空
session_destroy();   //銷毀當前的session
echo "<script>
alert('已登出');
window.location.href='../index.php';
</script>";
?>