
<?php
session_start();
include('template/admin_header.php');

             
   $sql = "UPDATE course SET 
			course_name = '".$_POST["course_name"]."',
			course_category = '".$_POST["course_category"]."',
			course_session = '".$_POST["course_section"]."',
			course_age = '".$_POST["course_age"]."',
			course_price = '".$_POST["course_price"]."'
            WHERE course_id='".$_POST["id"]."'            
        ";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: manager_course.php');
    } else {
        echo "Error updating recordd: " . $conn->error;
    }
    $conn->close();
?>