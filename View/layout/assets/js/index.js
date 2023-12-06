// ===== LIST =====
// 1. SMOOTH SCROLL
// 2. NAV HEADER ANIMATION
// 3. FOOTER ANIMATION MOBILE
// 4. CART - CART AJAX
// 5.SLIDE IN CART

// == 1. SMOOTH SCROLL ==
const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// == 2. NAV HEADER ==
const navIcon = $(".svgContainer");
const pathTop = $("#path-top");
const pathMiddle = $("#path-middle");
const pathBottom = $("#path-bottom");

navIcon.click(function () {
  pathTop.toggleClass("nav-active-top");
  pathMiddle.toggleClass("nav-active-middle");
  pathBottom.toggleClass("nav-active-bottom");
});

// == 3. ANIMATION FOOTER MOBILE ==
const footerBtnShow = document.querySelectorAll(".footer-btn-show");
const footerShow = document.querySelectorAll(".footer-show");

footerBtnShow.forEach((button, index) => {
  button.addEventListener("click", () => {
    button.classList.toggle("rotate-180");
    footerShow[index].classList.toggle("h-44");
  });
});

// == 4. CART ==
const cartBtn = $(".addToCart");
const itemsCart = $(".items-cart");
const productHtml = document.querySelector('.cart-box');

$.ajax({
  type: "GET",
  url: "model/addtocart.php",
  dataType: "json",
  success: function (sessionData) {
      updateCartContent(sessionData);
  },
  error: function (error) {
      console.log("Lỗi khi lấy dữ liệu session:", error);
  },
});


cartBtn.click(function () {
  let productImg = $(this).parent().parent().children().eq(0).val();
  let productName = $(this).parent().parent().children().eq(1).val();
  let productBrand = $(this).parent().parent().children().eq(2).val();
  let productPrice = $(this).parent().parent().children().eq(3).val();
  let productSalePrice = $(this).parent().parent().children().eq(4).val();

  $.ajax({
    type: "POST",
    url: "model/addtocart.php",

    data: {
      img: productImg,
      name: productName,
      brand: productBrand,
      price: productPrice,
      saleprice: productSalePrice,
    },
    success: function (response) {
      itemsCart.text(response.length);
      updateCartContent(response);
    },
    error: function (error) {
      console.log(error);
    },
  });
});



function updateCartContent(cartData) {
  let htmlCode = "";
  let price = "";
  let lastprice = "";
  let totalPrice = 0;

  for (let index = 0; index < cartData.length; index++) {

    if(cartData[index].saleprice == "") {
      lastprice = cartData[index].price
      price = "";
    } else {
      lastprice = cartData[index].saleprice
      price = cartData[index].price
    }

    totalPrice += cartData[index].saleprice * cartData[index].quantity;

    
      htmlCode +=  `
          <div class="flex gap-4 ">
              <div class="w-1/4 bg-box rounded-box">
                  <img src="${cartData[index].img}" alt="">
               </div>
               <div class="flex flex-col justify-between">
                   <div>
                       <div class="text-p font-bold">${cartData[index].name}</div>
                       <div class="text-sm text-customGray">${cartData[index].brand}</div>
                   </div>
                   <div class="flex flex-col">
                       <div class=" text-lg text-primary font-bold">${lastprice} VND</div>
                       <del class=" text-sm text-customGray">${price} VND</del>
                   </div>
               </div>
               <div class="ml-auto flex flex-col justify-between">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="ml-auto text-primary hover:scale-125 delay-75 h-5 w-5 cursor-pointer duration-150">
                       <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                   </svg>
                   <div class="flex items-center justify-center gap-3 text-sm py-1.5 w-20 text-customGray border-2 border-box rounded-lg">
                       <i class="fa-solid fa-minus"></i>
                       <span class="">${cartData[index].quantity}</span>
                       <i class="fa-solid fa-plus"></i>
                   </div>
               </div>
           </div>
       `;
      }
      productHtml.innerHTML = htmlCode;
      console.log(totalPrice);


  }


// == 5. MODAL CART ==
const openBtn = $(".open-cart");
const overlayCart = $(".modal-cart");
const closeBtn = $(".close-cart");
const cartNofication = $(".cart-nofi");

overlayCart.click(() => {
  lenis.start();
  $("body").toggleClass("overflow-hidden");
  overlayCart.toggleClass("hidden");
  cartNofication.toggleClass("cart-hide");
});

openBtn.on("click", () => {
  lenis.stop();
  $("body").toggleClass("overflow-hidden");
  overlayCart.toggleClass("hidden");
  overlayCart.toggleClass("overflow-hidden");

  cartNofication.toggleClass("cart-hide");
});

closeBtn.on("click", () => {
  lenis.start();
  $("body").toggleClass("overflow-hidden");
  overlayCart.toggleClass("hidden");
  cartNofication.toggleClass("cart-hide");
});

// == 6. PASSWORD TOGGLE ==
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