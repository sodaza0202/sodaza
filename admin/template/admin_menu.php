<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">FITWHEY</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
     
    </div>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>หน้าควบคุม</span>
        </a>
      </li>
      <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>จัดการคอสเรียน</span>
        </a>
        <div class="dropdown-menu show" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">จัดการคอร์สเรียน:</h6>
          <a class="dropdown-item" href="manager_course.php"><i class="fas fa-plus-square"></i> จัดการคอร์สเรียน</a>
          <h6 class="dropdown-header">จัดการประเภทคอร์สเรียน:</h6>
          <a class="dropdown-item" href="manager_category.php"><i class="fas fa-pen-square"></i> จัดการประเภท</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>จัดการบทความ</span>
        </a>
        <div class="dropdown-menu show" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">จัดการบทความ:</h6>
          <a class="dropdown-item" href=""><i class="fas fa-plus-square"></i> จัดการบทความ</a>
          <h6 class="dropdown-header">จัดการประเภท:</h6>
          <a class="dropdown-item" href=""><i class="fas fa-plus-square"></i> จัดการประเภทบทความ</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown show">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>จัดการสมาชิก</span>
        </a>
        <div class="dropdown-menu show" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">จัดการลูกค้า:</h6>
          <a class="dropdown-item" href="manager_customer.php"><i class="fas fa-plus-square"></i> จัดการสมาชิก</a>
          <h6 class="dropdown-header">จัดการผู้ดูแลระบบ:</h6>
          <a class="dropdown-item" href="manager_admin.php"><i class="fas fa-plus-square"></i> จัดการผู้ดูแลระบบ</a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>ออกจากระบบ</span>
        </a>
      </li>
    </ul>
