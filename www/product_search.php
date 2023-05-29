<?php
// Initialize the session
session_start();
$conn = require_once('config.php');
$page = 'product_search.php';
include('php/track.php');
include('template/html_header.html');
echo "<title>商品搜尋-嘉大鞋子</title></head>";
//藉由判斷是否登入，顯示不同的header
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    include('template/nav_header_logined.php');
} else {
    include('template/nav_header_notlogin.php');
}
?>
<!-- 含DOM XSS漏洞 -->
<br><br><br>
<div class="container-fluid">
    <img src="img/big_logo.png" alt="" width="500" class="center">
    <div class="container-fulid">
        <center style="background-color:lightgray;margin-right:11%;margin-left:11%">
            <br>
            <form method="GET" action="product_search.php">
                <input type="search" name="search" placeholder="關鍵字">
                <input type="submit" class="btn btn-secondary" value="搜尋">
            </form>
        </center>
    </div>
</div>

<div theme="ecommerce">
    <section class="maincontainer">
        <div class="container">
            <div class="container-fluid">
                <p style="color:red; font-size:20px">以下照片與內容皆擷取自<a href="https://www.adidas.com.tw/">愛迪達官方網站</a>！
                </p>
                <?php
                if (!isset($_GET['search'])) {
                    $sql = "SELECT * FROM `product`;";
                    if (!($st = $mysqli->prepare($sql))) {
                        die("Can't prepare the statement :(");
                    }
                } else {
                    $sql = "SELECT * FROM product WHERE `product_name` LIKE ? OR `description` LIKE ?;";
                    if (!($st = $mysqli->prepare($sql))) {
                        die("Can't prepare the statement :(");
                    }
                    $param = "%{$_GET['search']}%";
                    if (!$st->bind_param('ss', $param, $param)) {
                        die("Can't bind  :(");
                    }
                    echo '
                    <script>
                        function trackSearch(query) {
                            document.write("<h3>搜尋 "+query+" 的結果...</h3>");
                        }
                        var query = (new URLSearchParams(window.location.search)).get("search");
                        if(query) {
                            trackSearch(query);
                        }
                    </script>
                    ';
                }
                ?>
                <section class="container-list-tiles">
                    <?php
                    $st->execute();
                    $result = $st->get_result();
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<div>';
                        echo '<img src="/img/products/' . $row['product_id'] . '.jpg">';
                        echo '<h3>' . $row['product_name'] . '</h3>';
                        echo '<img src="img/rating/rating' . $row['rating'] . '.png">';
                        echo '&nbsp;&nbsp;NT$' . $row['price'];
                        echo '<a class="button" href="/product.php?productId=' . $row['product_id'] . '">查看細節</a>';
                        echo '</div>';
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