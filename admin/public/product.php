<?php
$show_option_category = "";
foreach ($category as $item) {
  extract($item);
  $show_option_category .= '<option value="' . $name . '">' . $name . '</option>';
}
$show_option_brand = "";
foreach ($brand as $item) {
  extract($item);
  $show_option_brand .= '<option value="' . $name . '">' . $name . '</option>';
}
?>

<head>
  <link rel="stylesheet" href="./layout/css/product.css">
</head>
<main class="main">
  <h1 class="title">Sản phẩm</h1>
  <div class="filter">
    <div class="filter-select">
    </div>
    <div class="filter-search">
      <input id="filter-search" type="text" placeholder="Nhập từ khoá" onkeyup="loadProductInInput(this)" />
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
      <tbody class="table-body" id="show-product-in-table-body">
        <!-- show product in table body -->
      </tbody>
    </table>
  </div>
  <button class="table-button button product-add">
    <p>Thêm sản phẩm</p>
  </button>
  <div class="table-page">
    <!-- show page index -->
  </div>
  <form>
    <div class="product-form">
      <div class="product-form-container">
        <h2 class="sub-title product-form-title">Thêm mới sản phẩm</h2><a class="product-form-close" href="#">
          <ion-icon name="close-circle-outline"></ion-icon></a>
        <div class="product-form-content">
          <label>Chọn danh mục:</label>
          <select class="product-form-select">
            <option default>-- Danh mục --</option>
            <?= $show_option_category ?>
          </select>
          <label>Chọn thương hiệu:</label>
          <select class="product-form-select">
            <option default>-- Thương hiệu --</option>
            <?= $show_option_brand ?>
          </select>
          <label>Hình ảnh sản phẩm:</label>
          <input class="product-form-input" type="file" onchange="loadImgInput(this)">
          <div class="show-image">
            <img id="product-img-show" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product-image">
            <div class="remove-img" onclick="removeImgInput(this)"><ion-icon name="trash-outline"></ion-icon></div>
          </div>
          <label for="">Ảnh phụ:</label>
          <div class="product-form-subimg">
            <div class="product-form-subimg-container">
              <input class="product-form-input" type="file" onchange="loadImgInput(this)">
              <div class="show-image">
                <img id="product-img-show" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product-image">
                <div class="remove-img" onclick="removeImgInput(this)"><ion-icon name="trash-outline"></ion-icon></div>
              </div>
            </div>
            <div class="product-form-subimg-container">
              <input class="product-form-input" type="file" onchange="loadImgInput(this)">
              <div class="show-image">
                <img id="product-img-show" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product-image">
                <div class="remove-img" onclick="removeImgInput(this)"><ion-icon name="trash-outline"></ion-icon></div>
              </div>
            </div>
            <div class="product-form-subimg-container">
              <input class="product-form-input" type="file" onchange="loadImgInput(this)">
              <div class="show-image">
                <img id="product-img-show" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product-image">
                <div class="remove-img" onclick="removeImgInput(this)"><ion-icon name="trash-outline"></ion-icon></div>
              </div>
            </div>
            <div class="product-form-subimg-container">
              <input class="product-form-input" type="file" onchange="loadImgInput(this)">
              <div class="show-image">
                <img id="product-img-show" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__340.jpg" alt="product-image">
                <div class="remove-img" onclick="removeImgInput(this)"><ion-icon name="trash-outline"></ion-icon></div>
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
  </form>
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
        <button class="product-form-button button" type="submit">Chỉnh sửa sản phẩm</button>
      </div>
    </div>
  </div>
</main>
<script src="./layout/js/product.js"></script>