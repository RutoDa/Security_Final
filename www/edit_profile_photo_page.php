<?php
// Initialize the session
session_start();
$conn = require_once('config.php');
$page = 'edit_profile_photo_page.php';
include('php/track.php');
// 假如沒登入，就會跳回首頁
if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit; //記得要跳出來，不然會重複轉址過多次
}
include('template/html_header.html');
?>
<!-- 有任意檔案上傳的漏洞，可上傳：https://github.com/flozz/p0wny-shell -->
<title>頭貼修改-嘉大鞋子</title>
</head>
<?php   
include('template/nav_header_logined.php');
?>
<br><br><br><br><br>
<center>
    <h1>頭貼修改</h1>
    <br>
    <form method="post" action="php/upload.php" enctype="multipart/form-data">
        新頭貼上傳：
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="上傳" name="submit">
    </form>
</center>
<br><br><br><br><br><br><br><br>

<?php
include('template/footer.html');
?>