<?php
$show_category = '<table class="category table">
                    <thead class="table-head">
                      <tr>
                        <th>Tên danh mục</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Hành động</th>
                      </tr>
                    </thead>
                    <tbody class="table-body">';
foreach ($categories as $item) {
  extract($item);
  $show_category .= '<tr>
        <td> <span>' . $name . '</span></td>
        <td> <span>10</span></td>
        <td> <a class="category-action category-update" href="#">
            <ion-icon name="create-outline"></ion-icon></a><span>|</span><a class="category-action category-remove" href="#">
            <ion-icon name="trash-outline"></ion-icon></a></td>
        </tr>';
}
$show_category .= '</tbody>
                  </table>';
?>

<head>
  <link rel="stylesheet" href="./layout/css/category.css">
</head>
<main class="main">
  <h1 class="title">Danh mục</h1>
  <div class="table-scroll">
    <?= $show_category ?>
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