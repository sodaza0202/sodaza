
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "fitwhey";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

             
   $sql = "UPDATE course SET 
			course_name = '".$_POST["course_name"]."' ,
			course_category = '".$_POST["course_category"]."' ,
			course_session = '".$_POST["course_section"]."' ,
			course_age = '".$_POST["course_age"]."' ,
			course_price = '".$_POST["course_price"]."'
            WHERE course_id = '".$_POST["id"]."'            
        ";
    echo $sql;
    
    $query = mysqli_query($conn,$sql);
    if($query) {
        // header('Location: manager_course.php');
    }
mysqli_close($conn);
?>