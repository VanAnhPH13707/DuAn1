<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= BASE_URL ?>home" class="brand-link">
    <img src="<?= ADMIN_ASSET ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Hi - Store</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= ADMIN_ASSET ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php
                                    if (isset($_SESSION['email'])) {
                                      echo $_SESSION['email']['fullname'];
                                    } else {
                                      echo "";
                                    }
                                    ?></a>
      </div>
    </div>
    <!-- SidebarSearch Form -->
    <!-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= ADMIN_URL ?>" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa fa-list-ol" aria-hidden="true"></i>
            <p>
              Danh mục
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'category' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'category/creat-new-category' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới danh mục</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag" aria-hidden="true"></i>
            <p>
              Sản phẩm
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'product' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'product/creat-new-product' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới sản phẩm</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tools" aria-hidden="true"></i>
            <p>
              Bảo hành của cửa hàng
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'warranty' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách bảo hành</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'warranty/creat-new-warranty' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới bảo hành</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-images"></i>
            <p>
              Banner
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'banner' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách banner</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= ADMIN_URL . 'banner/creat-new-banner' ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Tạo mới banner</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= ADMIN_URL . 'comment' ?>" class="nav-link ">
            <i class="nav-icon fas fa-comment"></i>
            <p>
              Bình luận
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= ADMIN_URL . 'user' ?>" class="nav-link ">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Tài khoản
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= ADMIN_URL . 'introduce' ?>" class="nav-link ">
          <i class="nav-icon fas fa-clipboard"></i>
            <p>
              Giới thiệu
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= ADMIN_URL . 'profile' ?>" class="nav-link ">
          <i class="nav-icon fas fa-phone-square-alt"></i>
            <p>
              Liên hệ
            </p>
          </a>
        </li>
         <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= ADMIN_URL . 'donhang' ?>" class="nav-link ">
          <i class="nav-icon far fa-file-alt"></i>
            <p>
              Đơn hàng
            </p>
          </a>
        </li>
        <li class="nav-item ">
          <!-- menu-open -->
          <a href="<?= BASE_URL . 'logout' ?>" class="nav-link ">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Đăng xuất
            </p>
          </a>
        </li>
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>