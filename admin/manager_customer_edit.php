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
  <?php include('template/admin_header.php');
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
        <?php
                $id = $_GET['id'];
                $sql_category = "SELECT * FROM member WHERE m_id = '".$id."'";
                $result = $conn->query($sql_category); 
                $row = mysqli_fetch_assoc($result);
?>
		<div class="container">
        	<div class="justify-content-md-center ">
            <form action="cus_edit.php" method="post">
            <div class="form-group">
                    <label for="">ลำดับ</label>
                    <input type="text" class="form-control" id="" placeholder="" disabled value="<?php echo $row['m_id'];?>">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="" placeholder="ใส่รหัสผ่าน" value="<?php echo $row['m_pass'];?>" name="m_pass">
                </div>
                <div class="form-group">
                    <label for="">ชื่อจริง</label>
                    <input type="text" class="form-control" id="" placeholder="" value="<?php echo $row['m_namea'];?>" name="m_namea">
                </div>
                <div class="form-group">
                    <label for="">นามสกุล</label>
                    <input type="text" class="form-control" id="" placeholder="" value="<?php echo $row['m_nameb'];?>" name="m_nameb">
                </div>
                <div class="form-group">
                    <label for="">เบอร์โทร</label>
                    <input type="text" class="form-control" id="" placeholder="" value="<?php echo $row['m_tel'];?>" name="m_tel">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">เพศ</label>
                    <select class="form-control" id="exampleFormControlSelect1" value="<?php echo $row['m_gender'];?>" name="m_gender">
                    <option value="1">ชาย</option>
                    <option value="2">หญิง</option>
                    <option value="3">อื่นๆ</option>
                    </select>
                </div>
                <input type="hidden" class="form-control" id="" placeholder="" value="<?php echo $row['m_id'];?>" name="id">
                <button type="submit" class="btn btn-warning btn-block"><i class="fas fa-pen-square"></i> แก้ไขสมาชิก</button>
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
