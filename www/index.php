<?php
// Initialize the session
session_start();

$conn = require_once('config.php');
$page = 'index.php';
include('php/track.php');
include('template/html_header.html');

echo "<title>嘉大鞋子-首頁</title></head>";
//藉由判斷是否登入，顯示不同的header
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    include('template/nav_header_logined.php');
} else {
    include('template/nav_header_notlogin.php');
}
?>

<div class="container-fluid">
    <br><br>
    <img src="img/big_logo.png" alt="" width="1000" class="center">
    <img src="img/NCYU_photo1.jpg" alt="" width="1000" class="center">
</div>

<?php
include('template/footer.html');
?>