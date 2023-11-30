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
var upProducts = document.querySelectorAll(".product-update");

var prodForms = document.querySelectorAll(".product-form");
for (let index = 0; index < prodForms.length; index++) {
  const prodForm = prodForms[index];
  if (index == 0) {
    function openForm() {
      var prodFormContainer = prodForm.querySelector(".product-form-container");
      prodFormContainer.classList.remove("remove-form");
      prodForm.style.display = "block";
      prodFormContainer.classList.add("open-form");
    }
    addProduct.addEventListener("click", openForm);
  }
  if (index == 1) {
    upProducts.forEach((upProduct) => {
      function openForm() {
        var prodFormContainer = prodForm.querySelector(
          ".product-form-container"
        );
        prodFormContainer.classList.remove("remove-form");
        prodForm.style.display = "block";
        prodFormContainer.classList.add("open-form");
      }
      upProduct.addEventListener("click", openForm);
    });
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
});
