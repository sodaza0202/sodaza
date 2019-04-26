<?php 
include('../function/connection.php');
$id = $_GET["id"];

$sql = "DELETE FROM category WHERE c_id = $id";

if (mysqli_query($conn, $sql)) {
    header('Location: manager_category.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>