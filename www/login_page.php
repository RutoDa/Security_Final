<?php
// Initialize the session
session_start();
$conn = require_once('config.php');
$page = 'login_page.php';
include('php/track.php');
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit; //記得要跳出來，不然會重複轉址過多次
}
include('template/html_header.html');
echo "<title>登入-嘉大鞋子</title></head>";
?>

<?php
include('template/nav_header_notlogin.php');
?>
<br><br><br><br><br>
<center>
    <h1>會員登入</h1>
    <br>
    <form method="post" action="php/login.php">
        帳號：
        <input type="username" name="username">
        密碼：
        <input type="password" name="password">
        <button type="submit" class="btn btn-success">登入</button>
        <button href="register.html" class="btn btn-secondary">註冊</button>
    </form>
</center>
<br><br><br><br><br><br>

<?php
include('template/footer.html');
?>