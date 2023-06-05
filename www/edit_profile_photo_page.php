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
        <input type="submit" value="上傳" name="submit" id="submit_btn" disabled>
    </form>
</center>
<br><br><br><br><br><br><br><br>
<script>
    // fileInput 為要上傳的檔案的 input element
    const fileInput = document.getElementById('fileToUpload');
    // 添加change evenet 的 Listener
    fileInput.addEventListener('change', function () {
        // file 為上傳的文件
        const file = fileInput.files[0];
        // fileName 取得完整檔名
        const fileName = file.name;
        // fileExtension 為透過split的方式切出的副檔名
        const fileExtension = fileName.split('.').pop().toLowerCase();
        const submitButton = document.getElementById('submit_btn');
        // 檢查檔名是否為圖片檔
        if (fileExtension === 'jpg' || fileExtension === 'jpeg' || fileExtension === 'png') {
            // 將提交的按鈕禁用
            submitButton.disabled = false;
        } else {
            // 警示：請上傳圖片檔
            alert('請上傳圖片檔！(如: .jpg, .jpeg 或 .png)');
            // 將提交的按鈕禁用
            submitButton.disabled = true;
        }
    });

</script>
<?php
include('template/footer.html');
?>