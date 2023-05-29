<?php
function insertRecord($mysqli, $tracking_id, $page)
{
    $sql = "INSERT INTO `page_visits` (`tracking_id`, `timestamp`, `page_name`) VALUES (?, CURRENT_TIMESTAMP, ?);";
    $st = $mysqli->prepare($sql);
    $st->bind_param('ss', $tracking_id, $page);
    $st->execute();
}


if (isset($_COOKIE['tracking_id'])) {
    $tracking_id = $_COOKIE['tracking_id'];
    $sql = "SELECT * FROM `page_visits` WHERE tracking_id = '" . $tracking_id . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_fetch_array($result)) {
        $welcome_back = 1;
        insertRecord($mysqli, $tracking_id, $page);
    } else {
        $welcome_back = 0;
    }

} else {
    $tracking_id = bin2hex(random_bytes(35));
    setcookie('tracking_id', $tracking_id);
    $welcome_back = 0;
    insertRecord($mysqli, $tracking_id, $page);
}
?>