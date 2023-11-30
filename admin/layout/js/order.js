var detailBtns = document.querySelectorAll(".order-detail");
var orderForm = document.querySelector(".order-form");
var orderFormContainer = document.querySelector(".order-form-container");

detailBtns.forEach((detailBtn) => {
  function openForm() {
    orderFormContainer.classList.remove("remove-form");
    orderForm.style.display = "block";
    orderFormContainer.classList.add("open-form");
  }
  detailBtn.addEventListener("click", openForm);
});

var orderFormClose = document.querySelector(".order-form-close");
function closeForm() {
  orderFormContainer.classList.remove("open-form");
  orderFormContainer.classList.add("remove-form");
  setTimeout(() => {
    orderForm.style.display = "none";
  }, 250);
}
orderFormClose.addEventListener("click", closeForm);
orderForm.addEventListener("click", (e) => {
  if (e.target == orderForm) {
    closeForm();
  }
});
