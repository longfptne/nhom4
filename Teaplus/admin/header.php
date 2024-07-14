<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/admin/admin.css" />
    <link rel="stylesheet" href="../css/admin/bill.css" />
    <link rel="stylesheet" href="../css/admin/taikhoan.css" />
    <link rel="stylesheet" href="../css/admin/pagin.css" />
    <link rel="stylesheet" href="../css/admin/listbill.css" />
    <title>Admin</title>
  </head>
  <body>
    <div class="container d-f w-100">
      <div class="side-bar " style="height: 200vh" >
        <div class="shop_name block">
          <div class="image">
            <a href="../index.php">

              <img src="../upload/img/logo/logo.jpg" alt="" />
            </a>
          </div>
          <span>Tea plus</span>
        </div>
        <div class="team_name block">
          <div class="image">
            <img src="../upload/img/product/ts3.jpg" alt="" />
          </div>
          <span>Tea plus</span>
        </div>
        <div class="admin-search-sideBar block">
          <form action="" class="d-f w-100">
            <input type="text" placeholder="Search" />
            <button><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
        <div class="contain-list-menu w-100">
          <ul>
            <li >
              <a href="index.php" >
                <div>
                  <i class="fa-solid fa-gauge"></i>
                  <span>Dashboard</span>
                </div>
              </a>

            </li>
            <!-- --------------------------------------- -->
            <li class="li-side-bar">
              <a href="#" class="a-side-bar">
                <div>
                  <i class="fa-solid fa-cart-shopping"></i>
                  <span>Đơn hàng</span>
                </div>
                <i class="fa-solid fa-chevron-down d-none"></i>
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="index.php?act=listbill">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Quản lý đơn hàng</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="index.php?act=orderhistory">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Lịch sử đơn hàng</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- --------------------------------------- -->
            <!-- <li class="li-side-bar">
              <a href="index.php?act=listbill" class="a-side-bar">
                <div>
                  <i class="fa-solid fa-cart-shopping"></i>
                  <span>Đơn hàng</span>
                </div>
               
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="#">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Quản lý đơn hàng</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <div>
                      <i class="fa-regular fa-circle"></i>

                      <span>Dashboard</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- ----------------------------- -->
<!-- --------------------------------------- -->
            <li class="li-side-bar">
              <a href="#" class="a-side-bar">
                <div>
                  <i class="fa-solid fa-list"></i>
                  <span>Danh mục</span>
                </div>
                <i class="fa-solid fa-chevron-down d-none"></i>
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <!-- --------------- menu con --------------------- -->

              <ul class="sub-menu">
                <li>
                  <a href="index.php?act=listdm">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Quản lý danh mục</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="index.php?act=adddm">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Thêm danh mục</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- ----------------------------- -->
            <li class="li-side-bar">
              <a href="#" class="a-side-bar">
                <div>
                  <i class="fa-solid fa-users"></i>
                  <span>Tài khoản</span>
                </div>
                <i class="fa-solid fa-chevron-down d-none"></i>
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <!-- --------------- menu con --------------------- -->
              <ul class="sub-menu">
                <li>
                  <a href="index.php?act=dskh">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Quản lý tài khoản</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="index.php?act=addtk">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Thêm tài khoản</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- ----------------------------- -->
            <li class="li-side-bar">
              <a href="#" class="a-side-bar">
                <div>
                  <i class="fa-solid fa-mug-hot"></i>
                  <span>Sản phẩm</span>
                </div>
                <i class="fa-solid fa-chevron-down d-none"></i>
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <!-- --------------- menu con --------------------- -->

              <ul class="sub-menu">
                <li>
                  <a href="index.php?act=listsp">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Quản lý sản phẩm</span>
                    </div>
                  </a>
                </li>
<li>
                  <a href="index.php?act=addsp">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Thêm sản phẩm</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- ----------------------------- -->
               <!-- ----------------------------- -->
               <li class="li-side-bar">
              <a href="#" class="a-side-bar">
                <div>
                <i class="fa-solid fa-comment"></i>
                  <span>Bình luận</span>
                </div>
                <i class="fa-solid fa-chevron-down d-none"></i>
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <!-- --------------- menu con --------------------- -->

              <ul class="sub-menu">
                <li>
                  <a href="index.php?act=dsbl">
                    <div>
                    <i class="fa-regular fa-circle"></i>
                      <span>Quản lý bình luận</span>
                    </div>
                  </a>
                </li>
              
              </ul>
            </li>

            <!-- ----------------------------- -->
            <li class="li-side-bar">
              <a href="#" class="a-side-bar">
                <div>
                  <i class="fa-solid fa-list"></i>
                  <span>Thống kê </span>
                </div>
                <i class="fa-solid fa-chevron-down d-none"></i>
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <!-- --------------- menu con --------------------- -->

              <ul class="sub-menu">
                <li>
                  <a href="index.php?act=thongke">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Thống kê</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="index.php?act=bieudo">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Biểu đồ</span>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- ----------------------------- -->
            <li class="li-side-bar">
              <a href="#" class="a-side-bar">
                <div>
                <i class="fa-solid fa-address-book"></i>
                  <span>Liên hệ </span>
                </div>
                <i class="fa-solid fa-chevron-down d-none"></i>
                <i class="fa-solid fa-chevron-left"></i>
              </a>
              <!-- --------------- menu con --------------------- -->

              <ul class="sub-menu">
                <li>
                  <a href="index.php?act=lienhe">
                    <div>
                      <i class="fa-regular fa-circle"></i>
                      <span>Danh sách liên hệ</span>
                    </div>
                  </a>
                </li>
            <!-- ----------------------------- -->

          </ul>
        </div>
        <button class="hidden">
          <i class="fa-solid fa-arrow-left"></i>
        </button>
      </div>
      <div class="dash-board">
        <header class="w-100">
          <div class="admin-bar w-100">
            <div class="left-menu d-f">
              <div class="left-menu-bar menu-bar-admin">
                <i class="fa-solid fa-bars"></i>
              </div>
              <div class="left-menu-bar">Home</div>
              <div class="left-menu-bar">Contact</div>
            </div>
          </div>
        </header>
        