document
  .querySelector(".register-form .button .register-btn-2")
  .addEventListener("click", async (e) => {
    e.preventDefault();
    let form = document.getElementById("register-form");
    const data = new URLSearchParams();
    for (const p of new FormData(form)) {
      data.append(p[0], p[1]);
    }

    fetch("../handle_protocol/insert-data.php", {
      method: "POST",
      body: data,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        if (data.surname_empty) {
          document.getElementById("surname_empty").style.display = "block";

          document.getElementById("surname_empty").innerHTML =
            data.surname_empty;
        } else {
          document.getElementById("surname_empty").style.display = "none";
        }

        if (data.name_empty) {
          document.getElementById("name_empty").style.display = "block";

          document.getElementById("name_empty").innerHTML = data.name_empty;
        } else {
          document.getElementById("name_empty").style.display = "none";
        }

        if (data.email_empty) {
          document.getElementById("email_empty").style.display = "block";

          document.getElementById("email_empty").innerHTML = data.email_empty;
        } else {
          document.getElementById("email_empty").style.display = "none";
        }

        if (data.password_empty) {
          document.getElementById("password_empty").style.display = "block";

          document.getElementById("password_empty").innerHTML =
            data.password_empty;
        } else {
          document.getElementById("password_empty").style.display = "none";
        }

        if (data.sex_empty) {
          document.getElementById("sex_empty").style.display = "block";

          document.getElementById("sex_empty").innerHTML = data.sex_empty;
        } else {
          document.getElementById("sex_empty").style.display = "none";
        }

        if (data.exist_email) {
          document.getElementById("exist_email").style.display = "block";

          document.getElementById("exist_email").innerHTML = data.exist_email;
        } else {
          document.getElementById("exist_email").style.display = "none";
        }

        if (data.exist_password) {
          document.getElementById("exist_password").style.display = "block";

          document.getElementById("exist_password").innerHTML =
            data.exist_password;
        } else {
          document.getElementById("exist_password").style.display = "none";
        }
        if (data.success_register) {
          document.getElementById("success_register").style.display = "block";

          document.getElementById("success_register").innerHTML = `
            <p style="line-height: 34px; color: #CBDFAF; background-color: #72C35A; margin-bottom: 0">${data.success_register}</p>
          `;
        } else {
          document.getElementById("success_register").style.display = "none";
        }
      })

      .catch((error) => console.log(error));
  });

document
  .querySelector(".login-form .button .login-btn")
  .addEventListener("click", (e) => {
    e.preventDefault();
    let form = document.getElementById("login-form");
    const data = new URLSearchParams();
    for (let a of new FormData(form)) {
      data.append(a[0], a[1]);
    }

    fetch("../handle_protocol/login.php", {
      method: "POST",
      body: data,
    })
      .then((response) => response.json())

      .then((data) => {
        console.log(data);
        if (data.email_empty) {
          document.getElementById("email_empty_login").style.display = "block";

          document.getElementById("email_empty_login").innerHTML =
            data.email_empty;
        } else {
          document.getElementById("email_empty_login").style.display = "none";
        }

        if (data.password_empty) {
          document.getElementById("password_empty_login").style.display =
            "block";

          document.getElementById("password_empty_login").innerHTML =
            data.password_empty;
        } else {
          document.getElementById("password_empty_login").style.display =
            "none";
        }

        if (data.wrong_email) {
          document.getElementById("wrong_email_login").style.display = "block";

          document.getElementById("wrong_email_login").innerHTML =
            data.wrong_email;
        } else {
          document.getElementById("wrong_email_login").style.display = "none";
        }

        if (data.wrong_password) {
          document.getElementById("wrong_password_login").style.display =
            "block";

          document.getElementById("wrong_password_login").innerHTML =
            data.wrong_password;
        } else {
          document.getElementById("wrong_password_login").style.display =
            "none";
        }

        if (data.success_login) {
          window.location.href = "../personal.php";
        }
      })

      .catch((error) => console.log(error));
  });
