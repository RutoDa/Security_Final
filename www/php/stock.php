<?php
$conn = require_once('../config.php');
$xml = file_get_contents('php://input');
$dom = new DOMDocument();
$dom->loadXML($xml, LIBXML_NOENT | LIBXML_DTDLOAD);
$creds = simplexml_import_dom($dom);
$product_id = $creds->productId;
$store_id = $creds->storeId;

//檢查product ID是否存在
$sql = "SELECT * FROM product WHERE `product_id` = ?;";
$st = $mysqli->prepare($sql);
!$st->bind_param('d', $product_id);
$st->execute();
$result = $st->get_result();
if (!mysqli_fetch_array($result)) {
    http_response_code(400);
    echo 'Invalid product ID:' . $product_id;
    exit;// 結束
}

//檢查store ID是否存在
$sql = "SELECT * FROM stock WHERE `store_id` = ?;";
$st = $mysqli->prepare($sql);
!$st->bind_param('d', $store_id );
$st->execute();
$result = $st->get_result();
if (!mysqli_fetch_array($result)) {
    http_response_code(400);
    echo 'Invalid store ID:' . $store_id;
    exit;// 結束
}

//查詢庫存並回傳
$sql = "SELECT value FROM stock WHERE `product_id` = ? AND `store_id` = ?;";
$st = $mysqli->prepare($sql);
!$st->bind_param('dd', $product_id, $store_id );
$st->execute();
$result = $st->get_result();
echo mysqli_fetch_array($result)['value'];
?>