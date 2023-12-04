var myEditors = document.querySelectorAll("#editor");
myEditors.forEach((myEditor) => {
  ClassicEditor.create(myEditor)
    .then((editor) => {
      console.log(editor);
    })
    .catch((error) => {
      console.error(error);
    });
});

// Add product
var addProduct = document.querySelector(".product-add");

var prodForms = document.querySelectorAll(".product-form");

if (prodForms[0]) {
  function openForm() {
    var prodFormContainer = prodForms[0].querySelector(
      ".product-form-container"
    );
    prodFormContainer.classList.remove("remove-form");
    prodForms[0].style.display = "block";
    prodFormContainer.classList.add("open-form");
  }
  addProduct.addEventListener("click", openForm);
}
if (prodForms[1]) {
  function openForm() {
    var prodFormContainer = prodForms[1].querySelector(
      ".product-form-container"
    );
    prodFormContainer.classList.remove("remove-form");
    prodForms[1].style.display = "block";
    prodFormContainer.classList.add("open-form");
  }
}

prodForms.forEach((prodForm) => {
  var prodFormContainer = prodForm.querySelector(".product-form-container");
  var prodFormClose = prodForm.querySelector(".product-form-close");
  function closeForm() {
    prodFormContainer.classList.remove("open-form");
    prodFormContainer.classList.add("remove-form");
    setTimeout(() => {
      prodForm.style.display = "none";
    }, 250);
  }
  prodFormClose.addEventListener("click", closeForm);

  prodForm.addEventListener("click", (e) => {
    if (e.target == prodForm) {
      closeForm();
    }
  });
});

// Load product image
function loadImgInput(e) {
  if (e.files && e.files[0]) {
    var reader = new FileReader();
    var imgLoad = $(e).next().children();
    console.log(imgLoad);
    reader.onload = function (e) {
      imgLoad.attr("src", e.target.result);
    };
    reader.readAsDataURL(e.files[0]);
    $(e).next().css("display", "block");
  }
}
function removeImgInput(e) {
  $(e).prev().attr("src", "");
  $(e).parent().css("display", "none");
  $(e).parent().prev().val("");
}

// Load product
$(document).ready(function () {
  $.ajax({
    url: "http://localhost/Project-E/admin/data/product.php?func=show",
    method: "POST",
    cache: false,
    dataType: "",
    success: function (data) {
      $(".table-body").html(data);
    },
  });
});

function loadProductInPage(e) {
  var page = $(e).attr("value");
  $.ajax({
    url: "http://localhost/Project-E/admin/data/product.php?func=show",
    method: "POST",
    cache: false,
    data: { page: page },
    dataType: "",
    success: function (data) {
      $(".table-body").html(data);
    },
  });
}

function loadProductInInput(e) {
  var name = $(e).val();
  $.ajax({
    url: "http://localhost/Project-E/admin/data/product.php?func=show",
    method: "POST",
    cache: false,
    data: { name: name },
    dataType: "",
    success: function (data) {
      // console.log(data);
      $(".table-body").html(data);
    },
  });
}
// Show page index
$(document).ready(function () {
  $.ajax({
    url: "http://localhost/Project-E/admin/data/product.php?func=page",
    method: "POST",
    cache: false,
    dataType: "",
    success: function (data) {
      // console.log(data);
      $(".table-page").html(data);
    },
  });
});
