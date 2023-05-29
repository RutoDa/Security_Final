<?php
// Include config file
$conn = require_once('../config.php');

// Define variables and initialize with empty values
$username = $_POST["username"];
$password = $_POST["password"];

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "SELECT * FROM users WHERE username ='" . $username . "' AND password = '" . $password . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        // Store data in session variables
        $_SESSION["loggedin"] = true;
        //這些是之後可以用到的變數
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        $_SESSION["user_id"] = $row["user_id"];
        $_SESSION["csrf_token"] = bin2hex(random_bytes(35));
        echo "<script>
        alert('登入成功');
        window.location.href='../index.php';
        </script>";
    } else {
        function_alert("帳號或密碼錯誤");
    }
} else {
    function_alert("Something wrong");
}

// Close connection
mysqli_close($link);

function function_alert($message)
{

    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='../index.php';
    </script>";
    return false;
}
?>