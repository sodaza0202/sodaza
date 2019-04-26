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
  <?php include('template/admin_header.php');?>

  <?php
                $id = $_GET['id'];
                $sql_category = "SELECT * FROM category WHERE c_id = '".$id."'";
                $result = $conn->query($sql_category); 
                $row = mysqli_fetch_assoc($result);
 ?>

<body id="page-top">

 <?php include('template/admin_menu.php');?>
 
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">FITWHEY</a>
          </li>
          <li class="breadcrumb-item">จัดการสินค้า</li>
          <li class="breadcrumb-item active"><i class="fas fa-plus-square"></i> แก้ไขสมาชิก :</li>
        </ol>
        
		<div class="container">
        	<div class="justify-content-md-center ">
            <form action="cate_edit.php" method="post">
            <div class="form-group">
                    <label for="">ลำดับ</label>
                    <input type="text" class="form-control" id="" placeholder="" disabled value="<?php echo $row['c_id']  ?>">
                </div>
                <div class="form-group">
                    <label for="">ชื่อคอร์สเรียน</label>
                    <input type="text" class="form-control" id="" name="c_name" placeholder="" value="<?php echo $row['c_name']  ?>">
                    <input type="hidden" class="form-control" id="" name="id" placeholder="" value="<?php echo $row['c_id']  ?>">
                </div> 
                <button type="submit" class="btn btn-warning btn-block"><i class="fas fa-pen-square"></i> แก้ไขประเภท</button>
            </form>

           </div>
		</div>
        
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>
