// var descriptionApi = " http://localhost:3000/description";
// var pictureApi = "http://localhost:3000/picture";

// fetch(descriptionApi)
//   .then(function (response) {
//     return response.json();
//   })

//   .then(function (data) {
//     let shows = data.map(function (describe) {
//       return `<h1 id="name">${describe.name} <span style="color: rgba(74, 157, 82, 1)">${describe.character}</span></h1>
//       <i class="bi bi-pencil-square" onclick="edit('name', ${describe.id})"></i>

//       <h1 id="Address">Sống tại ${describe.Address}</h1>
//       <i class="bi bi-pencil-square" onclick="edit('Address',  ${describe.id})"></i>

//       <h1 id="Hoobies">Sở thích: ${describe.Hoobies}</h1>
//       <i class="bi bi-pencil-square" onclick="edit('Hoobies',  ${describe.id})"></i>

//       <h1 id="Yearofbirth">Sinh năm: ${describe.Yearofbirth}</h1>
//       <i class="bi bi-pencil-square" onclick="edit('Yearofbirth',  ${describe.id})"></i>`;
//     });

//     var show = shows.join("");

//     document.querySelector(".depend-inf-1").innerHTML = show;
//   })
//   .catch(function (err) {
//     console.log(err);
//     alert("Không lấy được dữ liệu");
//   });

// fetch(pictureApi)
//   .then(function (response) {
//     return response.json();
//   })
//   .then(function (data) {
//     let showimgs = data.map(function (img) {
//       return `<div><img src="${img.image}" alt="" style="width: 100%; height: 495px; object-fit: cover"></img></div>`;
//     });

//     let showimg = showimgs.join("");

//     document.querySelector(".inf-2").addEventListener("click", function () {
//       let targetElement = document.querySelector(".depend-inf-2");

//       targetElement.innerHTML = showimg;
//     });
//   })
//   .catch(function (error) {
//     console.log("Có lỗi xảy ra:", error);
//   });
let avt_small = document.getElementById("avt_small");
let acess_message = document.querySelector("#avt_small .acess_message ");
let logout = document.querySelector("#avt_small .logout");
let isMessageVisible = false;

avt_small.addEventListener("click", (e) => {
  if (isMessageVisible) {
    acess_message.style.display = "none";
    logout.style.display = "none";
  } else {
    acess_message.style.display = "block";
    logout.style.display = "block";
  }
  isMessageVisible = !isMessageVisible;
});

function change_selection_img(event) {
  event.preventDefault();

  let avartar = document.querySelector(".inf-2");
  avartar.style.borderBottom = "5px solid #286DF2";
  document.querySelector(".inf-2 a").style.color = "#286DF2";

  let introduce = document.querySelector(".inf-1");
  introduce.style.borderBottom = "0";
  document.querySelector(".inf-1 a").style.color = "rgba(0, 0, 0, 1)";

  document.querySelector(".depend-inf-1").style.display = "none";
  document.querySelector(".depend-inf-2").style.display = "grid";
}

function change_selection_introduce(event) {
  event.preventDefault();

  let introduction = document.querySelector(".inf-1");
  introduction.style.borderBottom = "5px solid #286DF2";
  document.querySelector(".inf-1 a").style.color = "#286DF2";

  let avartar = document.querySelector(".inf-2");
  avartar.style.borderBottom = "0";
  document.querySelector(".inf-2 a").style.color = "rgba(0, 0, 0, 1)";

  document.querySelector(".depend-inf-2").style.display = "none";
  document.querySelector(".depend-inf-1").style.display = "inline-block";
}

var image_click = document.querySelector(".inf-2");
image_click.addEventListener("click", change_selection_img);

let introduce_click = document.querySelector(".inf-1");
introduce_click.addEventListener("click", change_selection_introduce);

let inputCreated = false;
function edit(elementId, id) {
  if (!inputCreated) {
    let element = document.getElementById(elementId);
    let input = document.createElement("input");
    input.value = element.textContent;

    element.style.display = "none";
    element.parentNode.insertBefore(input, element.nextSibling);
    input.addEventListener("keydown", function (event) {
      if (event.key === "Enter") {
        updateData(elementId, input.value, id);
      }
    });
    inputCreated = true;
  }
}

function updateData(elementId, newValue, id) {
  let options = {
    method: "PATCH",
    headers: {
      "Content-Type": "application/json",
    },

    body: JSON.stringify({
      [elementId]: newValue,
    }),
  };
  fetch(descriptionApi + "/" + id, options)
    .then(function (response) {
      return response.json();
    })

    .then(function () {
      let element = document.getElementById(elementId);
      element.textContent = newValue;
      input.parentNode.removeChild(input);
      element.style.display = "block";
    })

    .catch((error) => {
      console.error(error);
    });
}
