<?php

include('../function/connection.php');
$id = $_GET["id"];

$sql = "DELETE FROM member WHERE m_id = $id";

if (mysqli_query($conn, $sql)) {
    header('Location: manager_customer.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>