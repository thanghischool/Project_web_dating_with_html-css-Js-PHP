<?php
require_once('connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css/hompage/footer.css" />
  <link rel="stylesheet" href="css/hompage/header.css" />
  <link rel="stylesheet" href="css/hompage/slider.css" />
  <link rel="stylesheet" href="css/contact/content.css" />
  <link rel="stylesheet" href="css/hompage/login-form.css" />
  <link rel="stylesheet" href="css/hompage/register-form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div id="page">
    <div class="header">
      <div class="logo">
        <img src="img/Logo.png" alt="logo" />
      </div>
      <div class="menu">
        <ul>
          <li><a href="homepage.html">Trang chủ</a></li>
          <li><a href="#" style="color: #fff !important">Liên hệ</a></li>
          <li><a href="#">Giới thiệu</a></li>
        </ul>
      </div>
      <div class="menu2">
        <li id="login-menu"><a href="#">Đăng nhập</a></li>
      </div>
    </div>
    <div class="cards">

      <div class="item">





        <?php
        $sql = "SELECT id,username,email,password,birthdate,gender,location,hobbies,avatar,created_at from users ";
        $result = mysqli_query($conn, $sql);
        $kq = mysqli_fetch_assoc($result)
        ?>
        <table>
          <tr>
            <div class="id">
              <?php echo $kq['id']; ?>
            </div>
            <div class="username">
              <?php echo $kq['username']; ?>
            </div>
            <div class="email">
              <?php echo $kq['email']; ?>
            </div>
            <div class="password">
              <?php echo $kq['password']; ?>
            </div>
            <div class="birthdate">
              <?php echo $kq['birthdate']; ?>
            </div>
            <div class="gender">
              <?php echo $kq['gender']; ?>
            </div>
            <div class="location">
              <?php echo $kq['location']; ?>
            </div>
            <div class="hobbies">
              <?php echo $kq['hobbies']; ?>
              <div class="avatar">
                <?php echo $kq['avatar']; ?>
              </div>
              <div class="created_at">
                <?php echo $kq['created_at']; ?></div>
          </tr>




        </table>
        <form method="post">
          <input type="submit" name="add_user" value="Thêm">
        </form>

        <?php
        if (isset($_POST['add_user'])) {
        }
        ?>
        <form method="post">
          <input type="submit" name="delete_user" value="Xóa">
        </form>

        <?php
        if (isset($_POST['delete_user'])) {
        }
        ?>
      </div>
    </div>



    <div class="footer">
      <img src="img/Logo.png" />
      <nav>
        <a href="#"><img src="css/hompage/footer/facebook.svg" /></a>
        <a href="#"><img src="css/hompage/footer/instagram.svg" /></a>
        <a href="#"><img src="css/hompage/footer/twitch.svg" /></a>
        <a href="#"><img src="css/hompage/footer/twitter.svg" /></a>
      </nav>
    </div>
  </div>
</body>

</html>