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
