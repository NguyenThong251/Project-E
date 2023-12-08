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
const totalCartModal = $(".totalCart-modal");
const totalCart = $(".totalCart");
const productHtml = document.querySelector(".cart-box");
const totalCartAfterDiscount = $(".total-cart-discounted");
var totalPrice = 0;

$.ajax({
  type: "GET",
  url: "model/addtocart.php",
  dataType: "json",
  success: function (sessionData) {
    itemsCart.text(sessionData.length);
    updateCartContent(sessionData);
  },
  error: function (error) {
    console.log("Lỗi khi lấy dữ liệu session:", error);
  },
});

function addToCart(button) {
  let productImg = $(button).parent().parent().children().eq(0).val();
  let productName = $(button).parent().parent().children().eq(1).val();
  let productBrand = $(button).parent().parent().children().eq(2).val();
  let productPrice = $(button).parent().parent().children().eq(3).val();
  let productSalePrice = $(button).parent().parent().children().eq(4).val();

  // AJAX
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
      totalCartModal.text(response.length);
      itemsCart.text(response.length);
      updateCartContent(response);
    },
    error: function (error) {
      console.log(error);
    },
  });
}

function updateCartContent(cartData) {
  let htmlCode = "";
  let price = "";
  let lastprice = 0;
  let VND = "";
  totalPrice = 0;
  for (let index = 0; index < cartData.length; index++) {
    if (cartData[index].saleprice == "") {
      lastprice = cartData[index].price;
      price = "";
      VND = "";
    } else {
      lastprice = cartData[index].saleprice;
      price = cartData[index].price;
      VND = "VND";
    }
    totalPrice += lastprice * cartData[index].quantity;
    htmlCode += `
          <div class="flex gap-4 my-2 ">
              <div class="w-1/4 bg-box rounded-box">
                  <img src="${cartData[index].img}" alt="">
               </div>
               <div class="flex flex-col justify-between">
                   <div>
                       <div class="text-p font-bold">${
                         cartData[index].name
                       }</div>
                       <div class="text-sm text-customGray">${
                         cartData[index].brand
                       }</div>
                   </div>
                   <div class="flex flex-col">
                       <div class=" text-lg text-primary font-bold">${lastprice} VND</div>
                       <del class=" text-sm text-customGray">${
                         price + VND
                       }</del>
                   </div>
               </div>
               <div class="ml-auto flex flex-col justify-between">
               <button onclick="handleDeleteButtonClick(this)">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="delete-cart ml-auto text-primary hover:scale-125 delay-75 h-5 w-5 cursor-pointer duration-150">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                   </svg>
               </button>
 
 
                   <div class="flex items-center justify-center gap-3 text-sm py-1.5 w-20 text-customGray border-2 border-box rounded-lg">
                       <button onclick="minusQuantity(this)">
                          <i class="minus-quantity fa-solid fa-minus"></i>
                       </button>
                       <span class="">${cartData[index].quantity}</span>
                       <button onclick="plusQuantity(this)">
                          <i class="plus-quantity fa-solid fa-plus"></i>
                       </button>
                   </div>
               </div>
           </div>
       `;
  }
  productHtml.innerHTML = htmlCode;
  $(".total-price").text(totalPrice + " VND");
  totalCart.text(totalPrice);
  totalCartAfterDiscount.text(totalPrice);
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

// == 6. REMOVE CART ==
function handleDeleteButtonClick(button) {
  let productBox = $(button).parent().parent();
  let productName = $(button)
    .parent()
    .parent()
    .children()
    .eq(1)
    .children()
    .eq(0)
    .children()
    .eq(0)
    .text();
  let action = "action";

  productBox.slideUp("slow");

  setTimeout(function () {
    $.ajax({
      type: "POST",
      url: "model/updateCart.php",

      data: {
        action: action,
        productName: productName,
      },
      success: function (response) {
        console.log(response);
        updateCartContent(response);
        itemsCart.text(response.length);
        totalCartModal.text(response.length);
      },
      error: function (error) {
        console.log(error);
      },
    });
  }, 500);
}

// == 7. UPDATE QUANTITY CART ==

// MINUS
function minusQuantity(button) {
  let minus = "minus";
  let boxProduct = $(button).parent().parent().parent();
  let productName = $(button)
    .parent()
    .parent()
    .prev()
    .children()
    .eq(0)
    .children()
    .eq(0)
    .text();
  let productQuantity = parseInt($(button).next().text());

  if (productQuantity > 0) {
    productQuantity--;
  } else {
    boxProduct.slideUp("slow");
  }

  $(button).next().text(productQuantity);

  $.ajax({
    type: "POST",
    url: "model/updateCart.php",

    data: {
      minus: "minus",
      productQuantity: productQuantity,
      productName: productName,
    },
    success: function (response) {
      updateCartContent(response);
      itemsCart.text(response.length);
      totalCartModal.text(response.length);
    },
    error: function (error) {
      console.log(error);
    },
  });
}

function plusQuantity(button) {
  let boxProduct = $(button).parent().parent().parent();
  let productQuantity = parseInt($(button).prev().text());
  let productName = $(button)
    .parent()
    .parent()
    .prev()
    .children()
    .eq(0)
    .children()
    .eq(0)
    .text();
  let plus = "plus";

  if (productQuantity < 10) {
    productQuantity++;
  }
  $(button).prev().text(productQuantity);

  $.ajax({
    type: "POST",
    url: "model/updateCart.php",

    data: {
      plus: "plus",
      productQuantity: productQuantity,
      productName: productName,
    },
    success: function (response) {
      updateCartContent(response);
    },
    error: function (error) {
      console.log(error);
    },
  });
}

// == 8. VOUCHER ==

function applyPromoCode() {
  let promoCode = $(".promoteCode").val();
  let totalPriceNum = totalCart.text();
  let tl1 = gsap.timeline({ repeat: 0, repeatDelay: 1 });
  let tl2 = gsap.timeline({ repeat: 0, repeatDelay: 1 });

  tl1.fromTo(".total-cart-discounted", { y: -24 }, { y: 13, duration: 1 });
  tl1.restart();
  tl2.fromTo(".totalCart", { y: 3 }, { y: 40, duration: 1 });
  tl2.restart();

  let totalCartAfterDiscount = $(".total-cart-discounted");

  $.ajax({
    type: "POST",
    url: "model/updateCart.php",
    data: {
      discard: "discard",
      promoCode: promoCode,
      totalCart: totalPriceNum,
    },
    success: function (response) {
      totalCartAfterDiscount.text(response);
      $(".priceDiscount").text(totalPrice - response);
    },
    error: function (error) {
      console.log(error);
    },
  });
}

// CLICK
$(".promodeApply").on("click", applyPromoCode);

// PRESS ENTER
$(".promoteCode").on("keyup", function (event) {
  if (event.key === "Enter") {
    applyPromoCode();
  }
});

// == 9. PASSWORD TOGGLE ==
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
