<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/hompage/footer.css" />
  <link rel="stylesheet" href="css/personal/header.css" />
  <link rel="stylesheet" href="css/searching/input.css" />
  <link rel="stylesheet" href="css/searching/range.css" />
  <link rel="stylesheet" href="css/searching/gender.css" />
  <link rel="stylesheet" href="css/searching/topic.css" />
  <link rel="stylesheet" href="css/searching/user.css" />
  <link rel="stylesheet" href="css/searching/user-slider.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="css/Font-Awesome-640/css/all.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div id="page" style="display: block; height: 1700px">
    <div class="header">
      <div class="logo">
        <img src="img/Logo.png" alt="logo" />
      </div>
      <div class="menu">
        <ul>
          <li><a href="homepage.html">Trang chủ</a></li>
          <li>
            <a href="searching.html" style="color: #ed147d !important">Tìm Kiếm</a>
          </li>
          <li><a href="#">Giới thiệu</a></li>
        </ul>
      </div>
      <div class="menu2">
        <li class="avt-small"></li>
        <li class="notification" style="color: #fff; padding: 0 20px">
          <i class="bi bi-bell-fill"></i>
        </li>
      </div>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

      <div class="input" style="position: relative;">
        <input type="text" name="search-input" id="search-input" placeholder="Tìm kiếm" style="display: flex" required />
        <div class="topic">
          <span>Chủ đề <i class="fa-light fa-chevron-down"></i></span>
        </div>
        <div class="age">
          <span>Độ tuổi <i class="fa-light fa-chevron-down"></i></span>
        </div>
        <div class="gender">
          <span style="width: 100%">Giới tính <i class="fa-light fa-chevron-down"></i></span>
        </div>
        <input class="search-button" type="submit" style="display: none;" value="Tìm kiếm">
        <!-- <div class="search-button" style="display: none">Tìm Kiếm</div> -->

        <div class="cancel-btn" style="display: none">Hủy</div>
      </div>
    </form>

    <div class="topic-form" style="display: none"></div>
    <div class="range-form" style="display: none">
      <div id="value-range">16</div>
      <input type="range" name="range" id="range" min="16" max="50" step="1" value="16" onresize="resize()" />
    </div>
    <div class="gender-form" style="display: none"></div>
    <p style="font-size: 20px; margin: 20px; color: #9747ff">
      *Lưu ý: công cụ có 2 lựa chọn là tìm người dùng theo tên và lọc người
      dùng. Bạn không thể sử dụng 2 công cụ cùng lúc.
    </p>
    <?php
    require_once("./connect.php");
    if (isset($_POST['search-input'])) {
      $sql = "select * from users where username like '" . '%' . $_POST["search-input"] . '%' . "'";
      $query = mysqli_query($conn, $sql);
      if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_array($query)) {
    ?>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $row["avatar"] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row["username"] ?></h5>
              <p class="card-text"><?php echo $row["hobbies"] ?></p>
              <a href="#" class="btn btn-primary"><?php echo $row["location"] ?></a>
            </div>
          </div>
        <?php } ?>
      <?php } ?>
    <?php  } ?>
    <div class="user-list"></div>
    <div id="demo" class="carousel slide display">
      <div class="carousel-inner"></div>
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev" style="filter: brightness(-100%); height: 602px">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next" style="filter: brightness(-100%); height: 602px">
        <span class="carousel-control-next-icon"></span>
      </button>
      <div class="icon-bar">
        <img src="img/searching/reload-icon.png">
        <img src="img/searching/remove-icon.png">
        <img src="img/searching/check-icon.png">
        <img class="heart" src="img/searching/heart-icon.png">
        <img src="img/searching/info-icon.png" id="showInfo" index="0" title="Show info">
      </div>
      <div class="body" style="transition: 0.5 linear"></div>
    </div>
  </div>
  <script src="js/searching/searching.js"></script>
  <div class="footer">
    <img src="img/Logo.png" />
    <nav>
      <a href="#"><img src="css/hompage/footer/facebook.svg" /></a>
      <a href="#"><img src="css/hompage/footer/instagram.svg" /></a>
      <a href="#"><img src="css/hompage/footer/twitch.svg" /></a>
      <a href="#"><img src="css/hompage/footer/twitter.svg" /></a>
    </nav>
  </div>

  <script src="js/searching/header.js"></script>
</body>

</html>