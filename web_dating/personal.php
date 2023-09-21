<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dating</title>
    <link rel="stylesheet" href="css/personal/header.css" />
    <link rel="stylesheet" href="css/personal/content.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
</head>

<body>
    <?php
    require_once("./connect.php");
    require_once("./class.php");
    session_start();

    ?>
    <div id="page" style="height: 2000px">
        <div class="header">
            <div class="logo">
                <img src="img/Logo.png" alt="logo" />
            </div>
            <div class="menu">
                <ul>
                    <li><a href="homepage.php">Trang chủ</a></li>
                    <li><a href="searching.php">Tìm Kiếm</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                </ul>
            </div>
            <div class="menu2">
                <li id="avt_small" style="position: relative;">
                    <?php
                    $user = new User();
                    $query = $user->show_information($_SESSION["email"]);
                    if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <img src="<?php echo !empty($row["avatar"]) ? $row["avatar"] : "https://e1.pxfuel.com/desktop-wallpaper/231/666/desktop-wallpaper-white-backgrounds-plain-https-www-pop-white-background-white-thumbnail.jpg" ?>"
                        alt="" style="width: 50px; height: 50px; border-radius: 50%">
                    <?php } ?>
                    <?php } ?>
                    <div class="acess_message"
                        style="width: 300px; background-color:azure; position:absolute; right: -100px; display:none">
                        <a href="message_interface.php" style="color: #000 !important"><i
                                class="bi bi-messenger"></i><span style="margin-left: 20px;">Mở trong
                                messenger</span></a>
                    </div>
                    <div class="logout"
                        style="width: 300px; background-color:azure; position:absolute; top: 90px; right: -100px; display:none; z-index: 1">
                        <a href="homepage.php" style="color: #000 !important"><i class="bi bi-box-arrow-right"></i><span
                                style="margin-left: 20px;">Logout</span></a>
                    </div>
                </li>
                <li class="notification" style="color: #fff; padding: 0 20px">
                    <i class="bi bi-bell-fill"></i>
                </li>
            </div>
        </div>

        <div class="content">
            <div id="image">
                <?php
                $user = new User();
                $query = $user->show_information($_SESSION["email"]);
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {

                ?>
                <img class="img-1"
                    src="<?php echo !empty($row["image_cover"]) ? $row["image_cover"] : "https://e1.pxfuel.com/desktop-wallpaper/231/666/desktop-wallpaper-white-backgrounds-plain-https-www-pop-white-background-white-thumbnail.jpg" ?>"
                    alt="" style="width: 1200px; height: 479px; border-radius: 20px; object-fit: cover">
                <img class="img-2"
                    src="<?php echo !empty($row["avatar"]) ? $row["avatar"] : ($row["gender"] == "Nam" ? "https://vnn-imgs-a1.vgcloud.vn/image1.ictnews.vn/_Files/2020/03/17/trend-avatar-1.jpg" : "https://cdn.vietnambiz.vn/2020/3/23/9043707928206972947073761007995628568969216n-15849335867312089792506.jpg"); ?>"
                    alt="" style="width: 190px; height: 190px; border-radius: 50%; object-fit: cover"></img>
                <?php } ?>
                <?php } ?>

            </div>

            <div class="inf">
                <ul>
                    <li class="inf-1">
                        <a href="">Giới Thiệu</a>
                    </li>
                    <li class="inf-2">
                        <a href="">Ảnh</a>
                    </li>
                </ul>

                <div class="depend-inf-1">
                    <?php
                    $user = new User();
                    $query = $user->show_information($_SESSION["email"]);
                    if (mysqli_num_rows($query) > 0) {
                        while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                    <h1 id="name">
                        <?php echo !empty($row["username"]) ? "Họ tên" . ':' . ' ' . $row["username"] : "Họ tên:" ?>
                    </h1>
                    <!-- <i class="bi bi-pencil-square" onclick="edit('name', ${describe.id})"></i> -->

                    <h1 id="gender">
                        <?php echo !empty($row["gender"]) ? "Giới tính" . ':' . ' ' . $row["gender"] : "Giới tính:" ?>
                    </h1>
                    <!-- <i class="bi bi-pencil-square" onclick="edit('name', ${describe.id})"></i> -->

                    <h1 id="hobbies">
                        <?php echo !empty($row["hobbies"]) ? "Sở thích" . ':' . ' ' . $row["hobbies"] : "Sở thích:" ?>
                    </h1>
                    <!-- <i class="bi bi-pencil-square" onclick="edit('Address',  ${describe.id})"></i> -->

                    <h1 id="location">
                        <?php echo !empty($row["location"]) ? "Địa chỉ" . ':' . ' ' . $row["location"] : "Địa chỉ:" ?>
                    </h1>
                    <!-- <i class="bi bi-pencil-square" onclick="edit('Hoobies',  ${describe.id})"></i> -->

                    <h1 id="Yearofbirth">
                        <?php echo !empty($row["birthDate"]) ? "Năm sinh" . ':' . ' ' . $row["birthDate"] : "Năm sinh:" ?>
                    </h1>
                    <!-- <i class="bi bi-pencil-square" onclick="edit('Yearofbirth',  ${describe.id})"></i> -->
                    <?php } ?>
                    <?php } ?>

                </div>

                <div class="depend-inf-2"></div>
            </div>
        </div>
    </div>
    <script src="js/personal/header.js"></script>
    <!-- <script>
        var id = location.href.split("=")[1];
        var personalApi = "http://localhost:3000/personal";
        fetch(personalApi)
            .then(function(response) {
                return response.json();
            })
            .then(function(imgs) {
                let find_imgs = imgs.find(function(find_img) {
                    return find_img.id == id;
                });
                var htmls =
                    `<img src="${find_imgs.img_avatar}" alt="" style="width: 50px; height: 50px; border-radius: 50%">`;

                var find_imgs_background = imgs.find(function(find_img_background) {
                    return find_img_background.id == id;
                });
                console.log(find_imgs_background);
                var img_background =
                    `<img class="img-1" src="${find_imgs_background.img_background}" alt="" style="width: 1200px; height: 479px; border-radius: 20px; object-fit: cover">
              <img class="img-2" src="${find_imgs_background.img_avatar}" alt="" style="width: 190px; height: 190px; border-radius: 50%; object-fit: cover"></img>`;
                document.getElementById("avt_small").innerHTML = htmls;
                document.querySelector("#image").innerHTML = img_background;
            })
            .catch(function(err) {
                console.log(err);
                alert("Không nhận được dữ liệu");
            });
    </script> -->
    <script src="js/personal/content.js"></script>
</body>

</html>