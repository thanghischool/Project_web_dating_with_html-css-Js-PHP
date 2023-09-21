var register_btn = document.getElementById("register-btn");
var register_form = document.getElementById("register-form");
var page = document.getElementById("page");
register_btn.addEventListener("click", function () {
  page.style = "filter: blur(1.5rem);";
  register_form.style.display = "flex";
  setTimeout(() => {
    register_form.style.filter = "blur(0px)";
  }, 100);
});
var cancel_login = document.getElementById("cancel-btn-register");
cancel_login.addEventListener("click", function () {
  page.style.filter = "blur(0px)";
  register_form.style.display = "flex";
  register_form.style.filter = "blur(1.5rem)";
  setTimeout(() => {
    register_form.style = "display: none; filter: blur(1.5rem);";
  }, 100);
});
