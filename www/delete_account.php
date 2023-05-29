<?php
// Initialize the session
session_start();
$conn = require_once('config.php');
$page = 'delete_account.php';
include('php/track.php');
// 假如沒登入，就會跳回首頁
if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit; //記得要跳出來，不然會重複轉址過多次
}
include('template/html_header.html');
?>
<title>刪除帳號-嘉大鞋子</title>
</head>
<?php
include('template/nav_header_logined.php');
?>
<br><br><br><br><br>
<center>
    <h1>刪除帳號</h1>
    <br>
    <form method="post" action="php/delete.php">
        <input type="hidden" name="token" value="<?php echo $_SESSION['csrf_token']?>">
        <button type="submit" class="btn btn-danger">確定</button>
    </form>
</center>
<br><br><br><br><br><br><br><br><br><br><br><br>    

<?php
include('template/footer.html');
?>