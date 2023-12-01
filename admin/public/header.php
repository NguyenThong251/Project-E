<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bảng điều khiển</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500&amp;display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/40.0.0/ckeditor.min.js" integrity="sha512-Zyl/SvrviD3rEMVNCPN+m5zV0PofJYlGHnLDzol2kM224QpmWj9p5z7hQYppmnLFhZwqif5Fugjjouuk5l1lgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="./layout/js/app.js"> </script>
  <link rel="stylesheet" href="./layout/css/app.css">
  <link rel="stylesheet" href="./layout/css/dashboard.css">
</head>

<body>
  <header class="header">
    <div class="header-image"> <img srcSet="./layout/images/logo.png 2x" alt="logo"></div>
  </header>
  <div class="wrapper" id="wrapper">
    <div class="sidebar">
      <ul class="sidebar-list">
        <li class="sidebar-item"><a class="sidebar-link" href="./">
            <ion-icon name="bar-chart-outline"></ion-icon><span>Bảng điều khiển</span></a>
          <div class="sidebar-animation"></div>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="./category.html">
            <ion-icon name="albums-outline"></ion-icon><span>Danh mục</span></a>
          <div class="sidebar-animation"></div>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="./product.html">
            <ion-icon name="cube-outline"></ion-icon><span>Sản phẩm</span></a>
          <div class="sidebar-animation"></div>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="./account.html">
            <ion-icon name="people-circle-outline"></ion-icon><span>Tài khoản</span></a>
          <div class="sidebar-animation"></div>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="./order.html">
            <ion-icon name="cart-outline"></ion-icon><span>Đơn hàng</span></a>
          <div class="sidebar-animation"></div>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="./comment.html">
            <ion-icon name="chatbubble-ellipses-outline"></ion-icon><span>Bình luận</span></a>
          <div class="sidebar-animation"></div>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="./news.html">
            <ion-icon name="newspaper-outline"></ion-icon><span>Tin tức</span></a>
          <div class="sidebar-animation"></div>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="./">
            <ion-icon name="log-out-outline"></ion-icon><span>Đăng xuất</span></a>
          <div class="sidebar-animation"></div>
        </li>
      </ul>
    </div>