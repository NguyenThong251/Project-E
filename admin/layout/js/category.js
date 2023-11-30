var cataAdd = document.querySelector(".category-add");
var cataUps = document.querySelectorAll(".category-update");

var cataForms = document.querySelectorAll(".category-form");
for (let index = 0; index < cataForms.length; index++) {
  const cataForm = cataForms[index];
  if (index == 0) {
    function openForm() {
      var cataFormContainer = cataForm.querySelector(
        ".category-form-container"
      );
      cataFormContainer.classList.remove("remove-form");
      cataForm.style.display = "block";
      cataFormContainer.classList.add("open-form");
    }
    cataAdd.addEventListener("click", openForm);
  }
  if (index == 1) {
    cataUps.forEach((cataUp) => {
      function openForm() {
        var cataFormContainer = cataForm.querySelector(
          ".category-form-container"
        );
        cataFormContainer.classList.remove("remove-form");
        cataForm.style.display = "block";
        cataFormContainer.classList.add("open-form");
      }
      cataUp.addEventListener("click", openForm);
    });
  }
}
cataForms.forEach((cataForm) => {
  var cataFormContainer = cataForm.querySelector(".category-form-container");
  var cataFormClose = cataForm.querySelector(".category-form-close");
  function closeForm() {
    cataFormContainer.classList.remove("open-form");
    cataFormContainer.classList.add("remove-form");
    setTimeout(() => {
      cataForm.style.display = "none";
    }, 250);
  }
  cataFormClose.addEventListener("click", closeForm);
});
