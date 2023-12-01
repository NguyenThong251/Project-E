<?php
extract($admin);
if ($phone == '' || $phone == null) {
  $phone = 'Chưa cập nhật';
}
?>
<div class="wrapper" id="wrapper">
  <div class="sidebar">
    <ul class="sidebar-list">
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/">
          <ion-icon name="bar-chart-outline"></ion-icon><span>Bảng điều khiển</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/category.html">
          <ion-icon name="albums-outline"></ion-icon><span>Danh mục</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/product.html">
          <ion-icon name="cube-outline"></ion-icon><span>Sản phẩm</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/account.html">
          <ion-icon name="people-circle-outline"></ion-icon><span>Tài khoản</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/order.html">
          <ion-icon name="cart-outline"></ion-icon><span>Đơn hàng</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/comment.html">
          <ion-icon name="chatbubble-ellipses-outline"></ion-icon><span>Bình luận</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/news.html">
          <ion-icon name="newspaper-outline"></ion-icon><span>Tin tức</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/brand.html">
          <ion-icon name="business-outline"></ion-icon><span>Thương hiệu</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./layout/voucher.html">
          <ion-icon name="wallet-outline"></ion-icon><span>Mã giảm giá</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="index.php?page=logout">
          <ion-icon name="log-out-outline"></ion-icon><span>Đăng xuất</span></a>
        <div class="sidebar-animation"></div>
      </li>
    </ul>
  </div>
  <main class="main">
    <div class="db-account">
      <div class="db-account-image"><img srcset="./layout/images/user.png 2x" alt="user-image"></div>
      <div class="db-account-info">
        <div class="db-account-container">
          <div class="db-account-info-name"><b>Xin chào</b> <?= $full_name ?></div><span>-</span>
          <div class="db-account-info-email">Email: <?= $email ?></div><span>-</span>
          <div class="db-account-info-phone">Số điện thoại: <?= $phone ?></div>
        </div>
        <div class="db-account-role"> <span>Người quản lí</span></div>
      </div>
    </div>
    <h1 class="title">Bảng điều khiển</h1>
    <canvas id="chartStatistic" style="width:100%;max-width:100%;"></canvas>
    <div class="overview container">
      <div class="overview-list">
        <div class="overview-item">
          <div class="overview-content">
            <div class="overview-title">
              <p>Tổng người dùng</p>
            </div>
            <div class="overview-count"> <span>100</span></div>
          </div>
          <div class="overview-icon"><ion-icon name="eye-outline"></ion-icon></div>
        </div>
        <div class="overview-item">
          <div class="overview-content">
            <div class="overview-title">
              <p>Tổng người dùng</p>
            </div>
            <div class="overview-count"> <span>100</span></div>
          </div>
          <div class="overview-icon"><ion-icon name="eye-outline"></ion-icon></div>
        </div>
        <div class="overview-item">
          <div class="overview-content">
            <div class="overview-title">
              <p>Tổng người dùng</p>
            </div>
            <div class="overview-count"> <span>100</span></div>
          </div>
          <div class="overview-icon"><ion-icon name="eye-outline"></ion-icon></div>
        </div>
        <div class="overview-item">
          <div class="overview-content">
            <div class="overview-title">
              <p>Tổng người dùng</p>
            </div>
            <div class="overview-count"> <span>100</span></div>
          </div>
          <div class="overview-icon"><ion-icon name="eye-outline"></ion-icon></div>
        </div>
      </div>
    </div>
    <div class="statistic">
      <div class="statistic-list">
        <div class="statistic-item">
          <div class="statistic-content">
            <div class="statistic-title">
              <p>Thống kê sản phẩm</p>
            </div>
            <div class="statistic-icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
          </div>
          <div class="statistic-dropdown">
            <p>5 sản phẩm mới được thêm trong tháng này!</p>
          </div>
        </div>
        <div class="statistic-item">
          <div class="statistic-content">
            <div class="statistic-title">
              <p>Thống kê sản phẩm</p>
            </div>
            <div class="statistic-icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
          </div>
          <div class="statistic-dropdown">
            <p>5 sản phẩm mới được thêm trong tháng này!</p>
          </div>
        </div>
        <div class="statistic-item">
          <div class="statistic-content">
            <div class="statistic-title">
              <p>Thống kê sản phẩm</p>
            </div>
            <div class="statistic-icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
          </div>
          <div class="statistic-dropdown">
            <p>5 sản phẩm mới được thêm trong tháng này!</p>
          </div>
        </div>
        <div class="statistic-item">
          <div class="statistic-content">
            <div class="statistic-title">
              <p>Thống kê sản phẩm</p>
            </div>
            <div class="statistic-icon">
              <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
          </div>
          <div class="statistic-dropdown">
            <p>5 sản phẩm mới được thêm trong tháng này!</p>
          </div>
        </div>
      </div>
    </div>
  </main>