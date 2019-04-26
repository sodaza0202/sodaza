
<?php
session_start();
include('template/admin_header.php');
$id = $_POST["id"];
    $sql = "UPDATE member SET 
    m_pass='".$_POST["m_pass"]."',
    m_namea = '".$_POST["m_namea"]."',
    m_nameb = '".$_POST["m_nameb"]."',
    m_tel = '".$_POST["m_tel"]."',
    m_gender = '".$_POST["m_gender"]."',
    m_level = '1'
    WHERE m_id= '$id'";


    if ($conn->query($sql) === TRUE) {
        header('Location: manager_admin.php');
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
?>