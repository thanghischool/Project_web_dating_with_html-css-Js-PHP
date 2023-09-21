var accountApi = "http://localhost:3000/account";
function checkAccount() {
  let username = document.getElementById("login-username");
  let password = document.getElementById("login-password");
  fetch(accountApi)
    .then(function (response) {
      return response.json();
    })
    .then(function (inf_users) {
      inf_users.forEach(function (inf_user) {
        if (
          inf_user.name_account === username.value &&
          inf_user.password === password.value
        ) {
          window.location.href = `personal.html?id=${inf_user.id}`;
        }
      });
    });
}
