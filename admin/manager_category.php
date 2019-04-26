
<?php 
    include('template/admin_header.php');        
?>
<?php 

if(isset($_POST['submit_category'])){ 
    if (!empty($_POST['name_category'])) {
        $name_category = $_POST['name_category'];
        $sql = "INSERT INTO category (c_id, c_name) VALUES (NULL ,'".$name_category."')";
        $query = mysqli_query($conn,$sql);
        header('Location: manager_category.php');
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
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addproducts"><i class="fas fa-plus-square"></i> เพิ่มปรเภทคอร์สเรียน</a>
        <table class="table" style="margin-top:15px">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อประเภทคอร์สเรียน</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php
                $sql_category = "SELECT * FROM category";
                $result = $conn->query($sql_category); 
                if ($result->num_rows > 0) { 
                while($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <th scope="row"><?php echo $row["c_id"]; ?></th>
              <td><?php echo $row["c_name"]; ?></td>
              <td width="20%">
                <div class="btn-group btn-block" role="group" aria-label="Basic example">
                    <a href="manager_customer_edit.php?id=<?php echo $row["c_id"]; ?>" class="btn btn-warning"><i class="fas fa-pen-square"></i> แก้ไข</a>
                    <a href="manager_category_delete.php?id=<?php echo $row["c_id"]; ?>" class="btn btn-danger"><i class="fas fa-minus-square"></i> ลบ</a>
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
        <h5 class="modal-title" id="">เพิ่มประเภทคอร์สเรียน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post">
        <div class="form-group">
            <label for="">ชื่อประเภทคอร์สเรียน</label>
            <input type="text" class="form-control" id="" placeholder="" name="name_category">
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" name="check_c" value="1">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-primary" name="submit_category"><i class="fas fa-plus-square"></i> เพิ่มประเภทคอร์สเรียน</button>
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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
<?php mysqli_close($conn); ?>
</html>
