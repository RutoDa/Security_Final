<?php
// Initialize the session
session_start();
$conn = require_once('config.php');
$page = 'product_filter.php';
include('php/track.php');
if (isset($_GET['category'])) {
    # 確認category存在於資料庫，假如不存在就會回應500 Internal server Error
    try {
        $sql = "SELECT * FROM `product` WHERE category = '" . $_GET['category'] . "';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    } catch (Error $e) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        include('template/html_header.html');
        echo "<title>商品瀏覽-嘉大鞋子</title></head>";
        //藉由判斷是否登入，顯示不同的header
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            include('template/nav_header_logined.php');
        } else {
            include('template/nav_header_notlogin.php');
        }
        echo '<br><br><br><center><h1 style="color:blue"><br><br><br>伺服器出現錯誤！</h1></center>';
        exit;
    }
}
include('template/html_header.html');
echo "<title>商品瀏覽-嘉大鞋子</title></head>";



//藉由判斷是否登入，顯示不同的header
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    include('template/nav_header_logined.php');
} else {
    include('template/nav_header_notlogin.php');
}
?>
<!-- SQL injection UNION attack(retrieving data from other tables). INPUT:'+UNION+SELECT+username,+password,0,0,0,0+FROM+users--+  -->
<br><br><br>
<div class="container-fulid">
    <img src="img/big_logo.png" alt="" width="500" class="center">
    <center style="background-color:lightgray;margin-right:11%;margin-left:11%">
        <br>
        <button class="btn btn-dark btn-lg" onclick="location.href='/product_all.php'">全部</button>&nbsp;&nbsp;
        <?php
        $sql = "SELECT DISTINCT category FROM `product`;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($result)) {
            echo '<button class="btn btn-dark btn-lg" onclick="' . 'location.href=' . "'" . "/product_filter.php?category=" . $row['category'] . "'" . '">' . $row['category'] . '</button>&nbsp;&nbsp;';
        }
        ?>
        <br><br>
    </center>
</div>

<div theme="ecommerce">
    <section class="maincontainer">
        <div class="container">
            <div class="container-fluid">
                <p style="color:red; font-size:20px">以下照片與內容皆擷取自<a href="https://www.adidas.com.tw/">愛迪達官方網站</a>！</p>
                <section class="container-list-tiles">
                    <?php
                    if (isset($_GET['category'])) {
                        $sql = "SELECT * FROM `product` WHERE category = '" . $_GET['category'] . "';";
                    } else {
                        $sql = "SELECT * FROM `product`;";
                    }
                    try {
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<div>';
                            echo '<img src="/img/products/' . $row['product_id'] . '.jpg">';
                            echo '<h3>' . $row['product_name'] . '</h3>';
                            echo '<img src="img/rating/rating' . $row['rating'] . '.png">';
                            echo '&nbsp;&nbsp;NT$' . $row['price'];
                            echo '<a class="button" href="/product.php?productId=' . $row['product_id'] . '">查看細節</a>';
                            echo '</div>';
                        }
                    } catch (Error $e) {
                        echo '<h2 style="color:blue">伺服器出現錯誤！</h2>';
                        http_response_code(400);
                    }
                    ?>
                </section>
            </div>
        </div>
    </section>
</div>
<?php
include('template/footer.html');
?>