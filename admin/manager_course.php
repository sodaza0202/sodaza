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

if(isset($_POST['submit_course'])){ 
    if (!empty($_POST['course_name'])) {
        $course_name = $_POST['course_name'];
        $course_category = $_POST['course_category'];
        $course_section = $_POST['course_section'];
        $course_age = $_POST['course_age'];
        $course_price = $_POST['course_price'];

        $sql = "INSERT INTO course (course_id, course_name, course_category , course_session , course_age , course_price) VALUES (NULL ,'".$course_name."','".$course_category."','".$course_section."','".$course_age."','".$course_price."')";
        $query = mysqli_query($conn,$sql);
        header('Location: manager_course.php');
        exit;    
    }
}

?>

<body id="page-top">

 <?php include('template/admin_menu.php');?>
 
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">ระบบขายน้ำดื่ม</a>
          </li>
          <li class="breadcrumb-item">จัดการสินค้า</li>
          <li class="breadcrumb-item active"><i class="fas fa-plus-square"></i> จัดการคอสเรียน </li>
        </ol>
        
		<div class="">
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addproducts"><i class="fas fa-plus-square"></i> เพิ่มคอร์สเรียน</a>
        <table class="table" style="margin-top:15px">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อคอร์สเรียน</th>
              <th scope="col">ประเภท</th>
              <th scope="col">เทรนเนอร์ (SESSIONS)</th>
              <th scope="col">อายุคอร์ส</th>
              <th scope="col">ราคา</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php
                $sql_category = "SELECT * FROM course INNER JOIN category ON course.course_category = category.c_id";
                $result = $conn->query($sql_category); 
                if ($result->num_rows > 0) { 
                while($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <th scope="row"><?php echo $row["course_id"]; ?></th>
              <td><?php echo $row["course_name"]; ?></td>
              <td><?php echo $row["c_name"]; ?></td>
              <td><?php echo $row["course_session"]; ?> / สัปดาห์</td>
              <td><?php echo $row["course_age"]; ?></td>
              <td><?php echo $row["course_price"]; ?></td>
              <td width="20%">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <a href="manager_course_edit.php?id=<?php echo $row["course_id"]; ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i> แก้ไข</a>
                    <a href="manager_course_delete.php?id=<?php echo $row["course_id"]; ?>" class="btn btn-danger"><i class="fas fa-minus-square"></i> ลบ</a>
                </div>
             </td>
            </tr>
            <?php 
            } } else {
                echo "0 Result";
            } 
            ?>
          </tbody>
        </table>
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

  <!-- Modal -->
<div class="modal fade" id="addproducts" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">เพิ่มคอร์สเรียน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form name="addproducts" method="post">
        <div class="form-group">
            <label for="">ชื่อคอร์สเรียน</label>
            <input type="text" class="form-control" id="" placeholder="" name="course_name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">ประเภทคอร์สเรียน</label>
            <select class="form-control" id="" name="course_category">
            <option value="1">PERSONAL TRAINING</option>
            <option value="2">PHYSIOTHERAPY SERVICE</option>
            <option value="3">PERSONAL TRAINER CERTIFICATION</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">เทรนเนอร์ (SESSIONS)</label>
            <input type="text" class="form-control" id="" placeholder="" name="course_section">
        </div>
        <div class="form-group">
            <label for="">อายุคอร์ส</label>
            <input type="text" class="form-control" id="" placeholder="" name="course_age">
        </div>
        <div class="form-group">
            <label for="">ราคา</label>
            <input type="text" class="form-control" id="" placeholder="" name="course_price">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-primary" name="submit_course"><i class="fas fa-plus-square"></i> เพิ่มคอร์สเรียน</button>
      </div>
      </form>

    </div>
  </div>
</div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin.min.js"></script>
  

</body>
<?php mysqli_close($conn); ?>
</html>
