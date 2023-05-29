<?php
// Initialize the session
session_start();
// Include config file
$conn = require_once('../config.php');
 
// Define variables and initialize with empty values
$new_password=$_POST["new_password"];

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql = "UPDATE `users` SET `password` = '".$new_password."' WHERE `users`.`user_id` = ".$_SESSION['user_id'].";";
    if (mysqli_query($conn, $sql)){
        echo "<script>alert('修改成功');</script>"; 
        echo "<script>window.location.replace('../index.php');</script>"; 
    }
    else{
        echo "<script>alert('something wrong');</script>";
        echo "<script>window.location.replace('../index.php');</script>";  
    }
}
    else{
        function_alert("Something wrong"); 
    }

    // Close connection
    mysqli_close($link);

function function_alert($message) { 
      
    // Display the alert box  
    echo "<script>alert('$message');
     window.location.href='../index.php';
    </script>"; 
    return false;
} 
?>