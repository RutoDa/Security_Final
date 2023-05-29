<?php
// Initialize the session
session_start();
$conn = require_once('config.php');
$page = 'product.php';
include('php/track.php');
include('template/html_header.html');
echo "<title>商品瀏覽-嘉大鞋子</title></head>";
//藉由判斷是否登入，顯示不同的header
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    include('template/nav_header_logined.php');
} else {
    include('template/nav_header_notlogin.php');
}
?>
<br><br><br>
<div class="container">
    <p style="text-align:center; color:red; font-size:20px">以下照片與內容皆擷取自<a href="https://www.adidas.com.tw/">愛迪達官方網站</a>！
    </p>

    <div class="row">
        <div class="col-6">
            <?php
            if (isset($_GET['productId'])) {
                $sql = "SELECT * FROM `product` WHERE product_id = " . $_GET['productId'] . ";";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                echo "<h1 style='color:black'>" . $row['product_name'] . "</h1>";
                echo "<img width=200 src='img/rating/rating" . $row['rating'] . ".png'><br>";
                echo '<p style="font-size:36px;">NT$' . $row['price'] . "</p>";
                echo "<img width=500 src='img/products/" . $row['product_id'] . ".jpg'><br><br>";

                echo "<p>" . $row['description'] . "</p>";
            } else {
                function_alert("Something wrong");
            }
            ?>
        </div>
        <div class="col-6">

            <div>
                <br>
                <h3 style="color:black;text-align:center">產品庫存</h2>
                    <form id="stockCheckForm" action="php/stock.php" method="POST" style="margin-left:7%">
                        <input required type="hidden" name="productId" value="<?php echo$_GET['productId'];?>">
                        <select name="storeId">
                            <option value="1">台北</option>
                            <option value="2">嘉義</option>
                            <option value="3">高雄</option>
                        </select>
                        <button type="submit" class="button">Check stock</button>
                    </form>
                    <span style="margin-left:7%" id="stockCheckResult"></span>
                    <script src="js/check_stock_xml.js"></script>
                    <script src="js/check_stock.js"></script>
                    <br>
            </div>


        </div>
    </div>
</div>



<?php
include('template/footer.html');

function function_alert($message)
{

    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='../index.php';
    </script>";
    return false;
}
?>