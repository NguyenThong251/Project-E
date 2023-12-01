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
      <li class="sidebar-item"><a class="sidebar-link" href="./brand.html">
          <ion-icon name="business-outline"></ion-icon><span>Thương hiệu</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./voucher.html">
          <ion-icon name="wallet-outline"></ion-icon><span>Mã giảm giá</span></a>
        <div class="sidebar-animation"></div>
      </li>
      <li class="sidebar-item"><a class="sidebar-link" href="./">
          <ion-icon name="log-out-outline"></ion-icon><span>Đăng xuất</span></a>
        <div class="sidebar-animation"></div>
      </li>
    </ul>
  </div>
  <main class="main">
    <h1 class="title">Danh mục</h1>
    <div class="table-scroll">
      <table class="category table">
        <thead class="table-head">
          <tr>
            <th>Tên thể loại</th>
            <th>Số lượng sản phẩm</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody class="table-body">
          <tr>
            <td> <span>Tai nghe</span></td>
            <td> <span>10</span></td>
            <td> <a class="category-action category-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a class="category-action category-remove" href="#">
                <ion-icon name="trash-outline"></ion-icon></a></td>
          </tr>
          <tr>
            <td> <span>Tai nghe</span></td>
            <td> <span>10</span></td>
            <td> <a class="category-action category-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a class="category-action category-remove" href="#">
                <ion-icon name="trash-outline"></ion-icon></a></td>
          </tr>
          <tr>
            <td> <span>Tai nghe</span></td>
            <td> <span>10</span></td>
            <td> <a class="category-action category-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a class="category-action category-remove" href="#">
                <ion-icon name="trash-outline"></ion-icon></a></td>
          </tr>
          <tr>
            <td> <span>Tai nghe</span></td>
            <td> <span>10</span></td>
            <td> <a class="category-action category-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a class="category-action category-remove" href="#">
                <ion-icon name="trash-outline"></ion-icon></a></td>
          </tr>
        </tbody>
      </table>
      <button class="table-button button category-add">
        <p>Thêm danh mục</p>
      </button>
    </div>
    <div class="table-page"><a class="button table-page-button" href="#">
        <ion-icon name="chevron-back-outline"></ion-icon></a><a class="button table-page-button" href="#"><span>1</span></a><a class="button table-page-button" href="#"><span>2</span></a><a class="button table-page-button" href="#"><span>3</span></a><a class="button table-page-button" href="#">
        <ion-icon name="chevron-forward-outline"></ion-icon></a></div>
    <div class="category-form">
      <div class="category-form-container">
        <h2 class="sub-title category-form-title">Thêm danh mục</h2><a class="category-form-close" href="#">
          <ion-icon name="close-circle-outline"></ion-icon></a>
        <div class="category-form-table">
          <form>
            <table class="category-form-group table">
              <thead class="table-head">
                <tr>
                  <th>Tên thể loại</th>
                  <th>Hàng động</th>
                </tr>
              </thead>
              <tbody class="table-body category-form-body">
                <tr>
                  <td>
                    <input id="category-name" type="text" placeholder="Nhập tên thể loại">
                  </td>
                  <td>
                    <button class="button" id="category-submit" type="submit">Thêm danh mục</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
    <div class="category-form">
      <div class="category-form-container">
        <h2 class="sub-title category-form-title">Chỉnh sửa danh mục</h2><a class="category-form-close" href="#">
          <ion-icon name="close-circle-outline"></ion-icon></a>
        <div class="category-form-table">
          <form>
            <table class="category-form-group table">
              <thead class="table-head">
                <tr>
                  <th>Tên thể loại</th>
                  <th>Hàng động</th>
                </tr>
              </thead>
              <tbody class="table-body category-form-body">
                <tr>
                  <td>
                    <input id="category-name" type="text" placeholder="Tai nghe">
                  </td>
                  <td>
                    <button class="button" id="category-submit" type="submit">Chỉnh sửa danh mục</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>
    </div>
  </main>
</div>