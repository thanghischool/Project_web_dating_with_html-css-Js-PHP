<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/hompage/content.css" />
    <link rel="stylesheet" href="css/hompage/footer.css" />
    <link rel="stylesheet" href="css/hompage/header.css" />
    <link rel="stylesheet" href="css/hompage/slider.css" />
    <link rel="stylesheet" href="css/hompage/team-inf.css" />
    <link rel="stylesheet" href="css/hompage/register-form.css" />
    <link rel="stylesheet" href="css/hompage/login-form.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <?php
    session_start();

    ?>
    <div id="page">
        <div class="header">
            <div class="logo">
                <img src="img/Logo.png" alt="logo" />
            </div>
            <div class="menu">
                <ul>
                    <li>
                        <a href="homepage.html" style="color: #ed147d !important">Trang chủ</a>
                    </li>
                    <li><a href="contact.html">Liên hệ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                </ul>
            </div>
            <div class="menu2">
                <li id="login-menu"><a href="#">Đăng nhập</a></li>
            </div>
        </div>
        <div class="slider" style="padding-bottom: 29px">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="sub-slider carousel-inner rounded-5">
                    <div class="carousel-item active" data-bs-interval="1000">
                        <img src="./img/suzy-15860783606351439858442.webp" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item" data-bs-interval="1000">
                        <img src="./img/1626989926801_fa3ec8c15d.png" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="./img/photo-1-16349975202301840663668.webp" class="d-block w-100" alt="..." />
                    </div>
                    <div class="title-sign">
                        <h1>"Tình yêu dây sóng, <br />gần gũi ngàn dặm"</h1>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- from sign in to advice for dating -->
        <div class="content">
            <div class="register-btn" id="register-btn">
                <span>Đăng ký</span>
            </div>
            <div class="started-bar">
                <div class="image">
                    <img src="css/hompage/content/image 1.png" style="left: 50px; top: -60px; z-index: 3" />
                    <img src="css/hompage/content/image 2.png" style="left: 0px; top: -130px" />
                    <img src="css/hompage/content/image 3.png" style="left: 200px; top: -100px" />
                </div>
                <span>BẮT ĐẦU CÂU CHUYỆN TÌNH YÊU CỦA BẠN</span>
                <div class="started-btn">
                    <span>Bắt Đầu</span>
                </div>
            </div>
            <div class="title">
                <p>TRANG HẸN HÒ ĐÁNG TIN CẬY</p>
            </div>

            <div class="advice">
                <div class="sub-advice-1">
                    <h1>Lời khuyên hẹn hò</h1>
                    <h6>Bình tĩnh. Tự tin. Hãy là chính bạn</h6>
                    <div class="gender-man">
                        <p>Nam</p>
                    </div>
                    <div class="gender-women">
                        <p>Nữ</p>
                    </div>
                    <div class="gender-another">
                        <p>Gới tính khác</p>
                    </div>
                </div>
                <div class="sub-advice-2">
                    <img src="./img/henhoquamang-1645778369-164577-1493-8065-1645778401.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="team-inf">
            <div class="title-team-inf">
                <p>Nhóm Của Chúng Tôi</p>
                <h1>Bắt Đầu Tìm Kiếm Ở Đây</h1>
            </div>

            <div class="dev-team-inf d-flex flex-row justify-content-between">
                <div class="dev-team-inf-1">
                    <div class="image" style="
                position: relative;
                width: 240px;
                height: 240px;
                border-radius: 50%;
              ">
                        <img src="./img/288833736_1442286016216316_5659101933587280407_n.jpg" style="width: 240px; height: 240px; border-radius: 50%" />
                    </div>
                    <h1>Thiện Thắng</h1>
                    <p>Developer</p>
                    <h6>
                        “Cuộc sống quanh ta luôn đầy rẫy <br />những khó khăn, áp lực. Hãy
                        đến với chúng tôi sẽ <br />giúp bạn giải toả những thứ này.”
                    </h6>
                </div>

                <div class="dev-team-inf-2">
                    <div class="image" style="
                position: relative;
                width: 240px;
                height: 240px;
                border-radius: 50%;
              ">
                        <img src="./img/236409205_1287793308342071_382330903940824065_n.jpg  " style="width: 240px; height: 240px; border-radius: 50%" />
                    </div>

                    <h1>Hoàng Quốc</h1>
                    <p>Developer</p>
                    <h6>
                        “Cuộc sống quanh ta luôn đầy rẫy <br />những khó khăn, áp lực. Hãy
                        đến với chúng tôi sẽ <br />giúp bạn giải toả những thứ này.”
                    </h6>
                </div>
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
    <form class="register-form" id="register-form" action="">
        <div id="success_register" style="width: 100%; align-self: flex-start; text-align: center">

        </div>
        <span class="title">Đăng Ký</span>
        <label for="surname">Họ</label>
        <input type="text" name="surname" id="surname" required />
        <h6 style="color: red; align-self:flex-start" id="surname_empty"></h6>

        <label for="name">Tên</label>
        <input type="text" name="name" id="name" required />
        <h6 style="color: red; align-self:flex-start" id="name_empty"></h6>

        <label for="email">Email hoặc số điện thoại</label>
        <input type="text" name="email" id="email" required />
        <h6 style="color: red; align-self:flex-start" id="email_empty"></h6>

        <h6 style="color: red; align-self:flex-start" id="exist_email"></h6>

        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password" required />
        <h6 style="color: red; align-self:flex-start" id="password_empty"></h6>

        <h6 style="color: red; align-self:flex-start" id="exist_password"></h6>


        <label for="birthdate">Ngày sinh</label>
        <div class="birthdate">
            <select name="day" class="day">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>

            <select name="month" class="month">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>

            <select name="year" class="year">

                <option value="2023" selected="1">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>

            </select>

        </div>
        <h6 style="color: red; align-self:flex-start" id="birtDate_empty"></h6>

        <label for="">Giới tính</label>
        <div class="gender">
            <div class="gender-1">
                <label for="women">Nữ</label>
                <input type="radio" name="sex" value="Nữ" id="" required>
            </div>
            <div class="gender-2">
                <label for="man">Nam</label>
                <input type="radio" name="sex" value="Nam" id="" required>
            </div>
            <div class="gender-3">
                <label for="other">Khác</label>
                <input type="radio" name="sex" value="Khác" id="" required>
            </div>

        </div>
        <h6 style="color: red; align-self:flex-start" id="sex_empty"></h6>

        <div class="button">
            <input class="register-btn-2" type="submit" name="sign_up" value="Đăng ký">

            <input type="button" class="cancel-btn" id="cancel-btn-register" value="Huỷ">
        </div>
    </form>

    <form class="login-form" id="login-form" action="">

        <span class="title">Đăng nhập</span>
        <label for="login-username">Tài khoản</label>
        <input type="text" id="login-username" name="email_login" required />
        <h6 style="color: red; align-self:flex-start" id="email_empty_login"></h6>
        <h6 style="color: red; align-self:flex-start" id="wrong_email_login"></h6>

        <p id="wrong"></p>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password_login" id="password" required />
        <h6 style="color: red; align-self:flex-start" id="password_empty_login"></h6>
        <h6 style="color: red; align-self:flex-start" id="wrong_password_login"></h6>

        <p id="wrong"></p>

        <div class="option">
            <a id="forget" href="#">Quên mật khẩu</a>
            <a id="register" href="#">Chưa có tài khoản ?</a>
        </div>
        <div class="button">
            <input type="button" class="login-btn" value="Đăng nhập">

            <input type="button" class="cancel-btn" id="cancel-btn-login" value="Huỷ">

        </div>
        <div class="other-login">
            <img src="css/hompage/img/google-logo.png" />
            <img src="css/hompage/img/facebook-logo.png" />
        </div>

    </form>
    <script src="js/homepage/slider.js"></script>
    <script src="./js/homepage/team-inf.js"></script>
    <script src="js/homepage/login-form.js"></script>
    <script src="js/homepage/register-form.js"></script>
    <script src="js/personal/header.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="./js/handle_protocol.js"></script>
</body>

</html>