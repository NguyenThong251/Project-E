<?php
$show_option = "";
foreach ($category as $item) {
  extract($item);
  $show_option .= '<option value="' . $name . '">' . $name . '</option>';
}
?>

<head>
  <link rel="stylesheet" href="./layout/css/product.css">
</head>
<main class="main">
  <h1 class="title">Sản phẩm</h1>
  <div class="filter">
    <div class="filter-select">
      <select id="filter-select" onchange="filter(this)">
        <option value="all">Tất cả</option>
        <?= $show_option ?>
      </select>
    </div>
    <div class="filter-search">
      <input id="filter-search" type="text" placeholder="Nhập từ khoá" />
      <button class="button">
        <ion-icon name="search"></ion-icon>
      </button>
    </div>
  </div>
  <div class="table-container">
    <table class="product table">
      <thead class="table-head">
        <tr>
          <th>
            <ion-icon name="image-outline"></ion-icon>
          </th>
          <th>Tên sản phẩm</th>
          <th>Thời gian nhập</th>
          <th>Số lượng</th>
          <th>Giá</th>
          <th>Danh mục</th>
          <th>Hàng động</th>
        </tr>
      </thead>
      <tbody class="table-body">
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 1</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 2</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 3</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 4</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 5</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 6</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 7</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 8</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 9</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="product-image"> <img srcset="./layout/images/product.png 2x" alt="product"></div>
          </td>
          <td>
            <div class="product-name">
              <p>Sản phẩm 10</p>
            </div>
          </td>
          <td>
            <div class="product-entry-date">
              <p>12/12/2020</p>
            </div>
          </td>
          <td>
            <div class="product-quantity">
              <p>99</p>
            </div>
          </td>
          <td>
            <div class="product-price">
              <del>400$</del>
              <p>99$</p>
            </div>
          </td>
          <td>
            <div class="product-category">
              <p>Tai nghe</p>
            </div>
          </td>
          <td>
            <div class="product-action"> <a class="product-update" href="#">
                <ion-icon name="create-outline"></ion-icon></a><span>|</span><a href="#">
                <ion-icon name="trash-outline"></ion-icon></a></div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <button class="table-button button product-add">
    <p>Thêm sản phẩm</p>
  </button>
  <div class="table-page"><a class="button table-page-button" href="#">
      <ion-icon name="chevron-back-outline"></ion-icon></a><a class="button table-page-button" href="#"><span>1</span></a><a class="button table-page-button" href="#"><span>2</span></a><a class="button table-page-button" href="#"><span>3</span></a><a class="button table-page-button" href="#">
      <ion-icon name="chevron-forward-outline"></ion-icon></a></div>
  <div class="product-form">
    <div class="product-form-container">
      <h2 class="sub-title product-form-title">Thêm mới sản phẩm</h2><a class="product-form-close" href="#">
        <ion-icon name="close-circle-outline"></ion-icon></a>
      <div class="product-form-content">
        <label>Chọn danh mục:</label>
        <select class="product-form-select">
          <option default>-- Danh mục --</option>
          <option value="Headphone">Tai nghe</option>
          <option value="Smartphone">Điện thoại</option>
          <option value="Laptop">Máy tính</option>
          <option value="Camera">Thiết bị quay</option>
        </select>
        <label>Chọn thương hiệu:</label>
        <select class="product-form-select">
          <option default>-- Thương hiệu --</option>
          <option value="Apple">Apple</option>
          <option value="Samsung">Samsung</option>
          <option value="Sony">Sony</option>
          <option value="Canon">Canon</option>
        </select>
        <label>Hình ảnh sản phẩm:</label>
        <input class="product-form-input" type="file">
        <div class="show-image">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
          <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
        </div>
        <label for="">Ảnh phụ:</label>
        <div class="product-form-subimg">
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
        </div>
        <label>Tên sản phẩm:</label>
        <input class="product-form-input" type="text" placeholder="Nhập tên sản phẩm">
        <label>Giá bán ảo (Hiển thị khi lớn hơn giá bán thực tế):</label>
        <input class="product-form-input" type="text" placeholder="Nhập giá sản phẩm">
        <label>Giá bán thực tế: </label>
        <input class="product-form-input" type="text" placeholder="Nhập giá sản phẩm">
        <label>Giảm giá:</label>
        <div class="product-form-radio-container">
          <div>
            <input type="radio" name="sale" id="sale-y" value="yes" checked>
            <label for="sale-y">Có!</label>
          </div>
          <div>
            <input type="radio" name="sale" id="sale-n" value="no">
            <label for="sale-n">Không!</label>
          </div>
        </div>
        <label>Bán chạy:</label>
        <div class="product-form-radio-container">
          <div>
            <input type="radio" name="hot" id="hot-y" value="yes" checked>
            <label for="hot-y">Có!</label>
          </div>
          <div>
            <input type="radio" name="hot" id="hot-n" value="no">
            <label for="hot-n">Không!</label>
          </div>
        </div>
        <div class="product-form-input-container">
          <div>
            <label for="entry-date">Ngày nhập hàng:</label>
            <input type="date" name="entry-date" placeholder="Entry-date">
          </div>
          <div>
            <label for="quantity">Số lượng:</label>
            <input type="text" name="quantity" placeholder="Nhập số lượng">
          </div>
        </div>
        <label>Mô tả sản phẩm:</label><textarea id="editor" name="description"></textarea>
        <button class="product-form-button button" type="submit">Thêm sản phẩm</button>
      </div>
    </div>
  </div>
  <div class="product-form">
    <div class="product-form-container">
      <h2 class="sub-title product-form-title">Chỉnh sửa sản phẩm</h2><a class="product-form-close" href="#">
        <ion-icon name="close-circle-outline"></ion-icon></a>
      <div class="product-form-content">
        <label>Chọn danh mục:</label>
        <select class="product-form-select">
          <option default>-- Danh mục --</option>
          <option value="Headphone">Tai nghe</option>
          <option value="Smartphone">Điện thoại</option>
          <option value="Laptop">Máy tính</option>
          <option value="Camera">Thiết bị quay</option>
        </select>
        <label>Chọn thương hiệu:</label>
        <select class="product-form-select">
          <option default>-- Thương hiệu --</option>
          <option value="Apple">Apple</option>
          <option value="Samsung">Samsung</option>
          <option value="Sony">Sony</option>
          <option value="Canon">Canon</option>
        </select>
        <label>Hình ảnh sản phẩm:</label>
        <input class="product-form-input" type="file">
        <div class="show-image">
          <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
          <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
        </div>
        <label for="">Ảnh phụ:</label>
        <div class="product-form-subimg">
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
          <div class="product-form-subimg-container">
            <input type="file" name="" id="">
            <div class="show-image">
              <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product image">
              <div class="remove-img"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
          </div>
        </div>
        <label>Tên sản phẩm:</label>
        <input class="product-form-input" type="text" placeholder="Nhập tên sản phẩm">
        <label>Giá bán ảo (Hiển thị khi lớn hơn giá bán thực tế):</label>
        <input class="product-form-input" type="text" placeholder="Nhập giá sản phẩm">
        <label>Giá bán thực tế: </label>
        <input class="product-form-input" type="text" placeholder="Nhập giá sản phẩm">
        <label>Giảm giá:</label>
        <div class="product-form-radio-container">
          <div>
            <input type="radio" name="sale" id="sale-y" value="yes" checked>
            <label for="sale-y">Có!</label>
          </div>
          <div>
            <input type="radio" name="sale" id="sale-n" value="no">
            <label for="sale-n">Không!</label>
          </div>
        </div>
        <label>Bán chạy:</label>
        <div class="product-form-radio-container">
          <div>
            <input type="radio" name="hot" id="hot-y" value="yes" checked>
            <label for="hot-y">Có!</label>
          </div>
          <div>
            <input type="radio" name="hot" id="hot-n" value="no">
            <label for="hot-n">Không!</label>
          </div>
        </div>
        <div class="product-form-input-container">
          <div>
            <label for="entry-date">Ngày nhập hàng:</label>
            <input type="date" name="entry-date" placeholder="Entry-date">
          </div>
          <div>
            <label for="quantity">Số lượng:</label>
            <input type="text" name="quantity" placeholder="Nhập số lượng">
          </div>
        </div>
        <label>Mô tả sản phẩm:</label><textarea id="editor" name="description"></textarea>
        <button class="product-form-button button" type="submit">Thêm sản phẩm</button>
      </div>
    </div>
  </div>
</main>
<script src="./layout/js/product.js"></script>