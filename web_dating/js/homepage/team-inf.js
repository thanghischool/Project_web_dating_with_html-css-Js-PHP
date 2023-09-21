var image_dev_1 = document.querySelector(".dev-team-inf-1 .image");
image_dev_1.onmousemove = function () {
  image_dev_1.style.backgroundColor = "rgba(237, 20, 125, 0.7)";
};

var image_dev_2 = document.querySelector(".dev-team-inf-2 .image");
image_dev_2.onmousemove = function () {
  image_dev_2.style.backgroundColor = "rgba(237, 20, 125, 0.7)";
};

var headingNode_1 = document.querySelector(".dev-team-inf-1 h1");
headingNode_1.onmousemove = function () {
  headingNode_1.style.color = "rgba(238, 31, 31, 1)";
};

headingNode_1.onmouseout = function () {
  headingNode_1.style.color = "rgba(237, 20, 125, 0.8)";
};

var headingNode_2 = document.querySelector(".dev-team-inf-2 h1");
headingNode_2.onmousemove = function () {
  headingNode_2.style.color = "rgba(238, 31, 31, 1)";
};

headingNode_2.onmouseout = function () {
  headingNode_2.style.color = "rgba(237, 20, 125, 0.8)";
};
