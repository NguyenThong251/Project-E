var editBtns = document.querySelectorAll(".account-edit");
var form = document.querySelector(".account-form");
var formContainer = document.querySelector(".account-form-container");
editBtns.forEach((editBtn) => {
  function openForm() {
    formContainer.classList.remove("remove-form");
    form.style.display = "block";
    formContainer.classList.add("open-form");
  }
  editBtn.addEventListener("click", openForm);
});

var closeBtn = document.querySelector(".account-form-close");
function closeForm() {
  formContainer.classList.remove("open-form");
  formContainer.classList.add("remove-form");
  setTimeout(() => {
    form.style.display = "none";
  }, 250);
}
closeBtn.addEventListener("click", closeForm);
form.addEventListener("click", (e) => {
  if (e.target == form) {
    closeForm();
  }
});
