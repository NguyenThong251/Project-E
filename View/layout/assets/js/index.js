

// SMOOTH SCROLL
const lenis = new Lenis()



function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)

// NAV HEADER
const navIcon = $(".svgContainer")
const pathTop = $("#path-top");
const pathMiddle = $("#path-middle");
const pathBottom = $("#path-bottom");


navIcon.click(function () {
  pathTop.toggleClass("nav-active-top");
  pathMiddle.toggleClass("nav-active-middle");
  pathBottom.toggleClass("nav-active-bottom");
})

 
// FOOTER
const footerBtnShow = document.querySelectorAll('.footer-btn-show');
const footerShow = document.querySelectorAll('.footer-show');

footerBtnShow.forEach((button,index) => {
  button.addEventListener('click',() => {
    button.classList.toggle('rotate-180');
    footerShow[index].classList.toggle('h-44');
  })
})

// CART
  const cartBtn = $(".addToCart");
  const itemsCart = $(".items-cart")
cartBtn.click(function() {
  let productImg = $(this).parent().parent().children().eq(0).val();
  let productName = $(this).parent().parent().children().eq(1).val();
  let productPrice = $(this).parent().parent().children().eq(2).val();
  let productSalePrice = $(this).parent().parent().children().eq(3).val();



  $.ajax({
    type: 'POST',
    url: 'view/addtocart.php',
    data: {
      img: productImg,
      name: productName,
      price: productPrice,
      saleprice: productSalePrice
    },
    success: function(response) {
      itemsCart.text(response);
    },
    error: function(error) {
      console.log(error);
    }
  });
});







// PASSWORD TOGGLE
const passwordInput = document.getElementById("passwordInput");
const togglePassword = document.getElementById("togglePassword");

togglePassword.addEventListener("click", () => {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    togglePassword.setAttribute("name", "eye-off-outline");
  } else {
    passwordInput.type = "password";
    togglePassword.setAttribute("name", "eye-outline");
  }
});



