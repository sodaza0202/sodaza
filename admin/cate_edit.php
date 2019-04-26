
<?php
session_start();
include('template/admin_header.php');
$id = $_POST["id"];
    $sql = "UPDATE category SET 
    c_name='".$_POST["c_name"]."'
    WHERE c_id = '$id'";


    if ($conn->query($sql) === TRUE) {
        header('Location: manager_category.php');
    } else {
        echo "Error updating recordd: " . $conn->error;
    }
    $conn->close();
?>