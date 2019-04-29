<?php include('template/admin_header.php');?>
<?php 


?>

<body id="page-top">

 <?php include('template/admin_menu.php');?>
 
    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="admin.php">FITNESS</a>
          </li>
          <li class="breadcrumb-item">จัดการการชื้อขาย</li>
          <li class="breadcrumb-item active"><i class="fas fa-plus-square"></i> จัดการการชื้อขาย </li>
        </ol>
        
        <div class="">
        <table class="table" style="margin-top:15px">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อ</th>
              <th scope="col">อีเมล</th>
              <th scope="col">เบอร์โทร</th>
              <th scope="col">ที่อยู่</th>
            </tr>
          </thead>
          <tbody>
          <?php
                $sql_category = "SELECT * FROM contact";
                $result = $conn->query($sql_category); 
                while($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <th scope="row"><?php echo $row["contact_id"]; ?></th>
              <td><?php echo $row["contact_name"]; ?></td>
              <td><?php echo $row["contact_email"]; ?></td>
              <td><?php echo $row["contact_phone"]; ?> / สัปดาห์</td>
              <td><?php echo $row["contact_address"]; ?></td>
              
            </tr>
            <?php 
                }
            ?>
          </tbody>
        </table>
        </div>

      </div>
    </div>
</body>