<?php 

session_start();
if($_SESSION['UserID'] == "")
{
  echo "Please Login!";
  exit();
}

if($_SESSION['Status'] != "1")
{
  echo "This page for Admin only!";
  exit();
}	


?>
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