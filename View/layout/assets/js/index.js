

// SMOOTH SCROLL
const lenis = new Lenis()


function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}
requestAnimationFrame(raf)

 
// FOOTER
const footerBtnShow = document.querySelectorAll('.footer-btn-show');
const footerShow = document.querySelectorAll('.footer-show');

footerBtnShow.forEach((button,index) => {
  button.addEventListener('click',() => {
    footerShow[index].classList.toggle('h-44');
  })
})





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



