<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTEN - Регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/post-no-bills-jaffna">
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/playfair-display">
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/pt-sans-2">
    <script src="reg.js"></script>
</head>

<body>

<?php
$our_brands_logo =  [
                            'brand_logo_1' => 'image/our-brands-logo.png',
                            'brand_logo_2' => 'image/our-brands-logo.png',
                            'brand_logo_3' => 'image/our-brands-logo.png',
                            'brand_logo_4' => 'image/our-brands-logo.png',
                        ];
?>

    <div class="container-login">
                <!-- Раздел готов. Нужно разобраться с наложением элементов при уменьшении масштаба страницы -->
                <div id="top-line" class="font-PT-Sans">
                    <div id="top-line-info">
                        <img src="image/phone.png" alt="phone.png">
                        <pre>    8 (812) 123-45-67    |    Работаем 7 дней в неделю    |    9:00 — 18:00</pre>
                    </div>
                    <div id="top-line-login">
                        <img src="image/login.png" alt="login.png">
                        <pre><a class="top-line-link" href="login.php">  Войти</a> / <a class="top-line-link" href="reg.php">Регистрация</a></pre>
                    </div>
                </div>
                <!--  Раздел готов. Нужно разобраться с наложением элементов при уменьшении масштаба страницы.
                        Также нужно переработать меню в список со ссылками, на корзину и поиск также повешать ссылки.
                        Повешать ссылку на логотип в шапке  -->
                <div id="second-line">
                    <div id="second-line-logo" class="font-logo"><a href="index.php">PORTEN</a></div>
                    <div id="second-line-menu" class="font-PT-Sans">
                        <a  class="menu-item" href="">Понравилось</a>
                        <a  class="menu-item" href="">Личный кабинет</a>
                        <a  class="menu-item" href="">Настройки</a>
                        <div id="menu-img-1">
                            <a href=""><img class="menu-img" src="image/cart.png" alt="cart.png"></a>
                        </div>
                        <div id="menu-img-2">
                            <a href=""><img class="menu-img" src="image/search.png" alt="search.png"></a>
                        </div>
                    </div>
                </div>
                <!-- Раздел готов. -->
                <div id="first-screen">
                    <div class="window">
                        <div class="font-PD-36">
                            Зарегистрироваться
                        </div>
                        <form id="form" class="font-PT-Sans">
                            <div class="form-item">
                                <label for="first_name">
                                    <input class="form-input" name="first_name" type="text" placeholder="Ваше имя" required>
                                </label>
                            </div>
                            <div class="form-item">
                                <label for="sur_name">
                                    <input class="form-input" name="sur_name" type="text" placeholder="Ваша фамилия" required>
                                </label>
                            </div>
                            <div class="form-item">
                                <label for="email">
                                    <input class="form-input" name="email" type="email" placeholder="Ваш e-mail" required>
                                </label>
                            </div>
                            <div class="form-item">
                                <label for="password">
                                    <input class="form-input" name="password" type="password" placeholder="Пароль" required>
                                </label>
                            </div>
                            <div class="form-item">
                                <label for="retry_password">
                                    <input class="form-input" name="retry_password" type="password" placeholder="Повторите пароль" required>
                                </label>
                            </div>
                            <div>
                                <button id="myBtn" class="btn content-button" type="submit">
                                    Зарегистрироваться
                                </button>
                            </div>                      
                    </form>
                </div>

                    <div id="myModal" class="modal">
                    <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p id="modalText"></p>
                       </div>
                    </div>
                </div>
                <!-- Раздел готов. Добавить ссылки на лого брендов -->
                <div id="our-brands">
                    <div id="our-brands-title" class="font-PD-36">Наши бренды</div>
                    <hr class="line-separator">
                    <div id="our-brands-logo">
                        <?php foreach($our_brands_logo as $value): ?>
                            <a href=""><img class="our-brands-logo-img" src="<?php	echo $value; ?>" alt="our-brands-logo.png"></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Убрать пробел между полями формы, поднять весь контейнер повыше в соответствии с макетом -->
                <div id="footer">
                    <div id="footer-content"> 
                        <div id="footer-info">
                            <div id="footer-info-title" class="font-PD-24">О магазине</div>
                            <div id="footer-info-text" class="font-PT-Sans">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi semper viverra nunc cursus tortor lectus nunc nulla nibh. Egestas amet consectetur vel vitae aliquam dictum suspendisse. Lobortis eget consequat, tellus et et sed turpis. Pretium quisque vitae, amet, porttitor odio ultricies massa pharetra leo. Et ipsum urna fames in sit mi ultrices nisi, nunc.
                            </div>
                        </div>
                        <div id="footer-category">
                            <div id="footer-category-title" class="font-PD-24">Категории</div>
                            <div id="footer-category-selector" class="font-PT-Sans">
                                <a class="footer-button" href="">часы</a><a class="footer-button" href="">браслеты</a><a class="footer-button" href="">ремни</a><a class="footer-button" href="">ювелирные изделия</a><a class="footer-button" href="">запонки</a>
                            </div>
                        </div>
                        <div id="footer-mailing">
                            <div id="footer-mailing-title" class="font-PD-24">Рассылка</div>
                            <div id="footer-mailing-text" class="font-PT-Sans">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi semper viverra nunc cursus tortor lectus nunc nulla nibh.
                            </div>
                            <div id="footer-mailing-form">
                                <form>
                                    <input id="footer-input-email" class="form-input font-PT-Sans" type="text" placeholder="Ваша почта"><input class="footer-button footer-form-button" type="submit" value="Подписаться">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="last-line">
                    <div id="last-line-copyright" class="font-PT-Sans">
                        © 2020 Все права защищены
                    </div>
                    <div id="last-line-author" class="font-PT-Sans">
                        Сделано Figma.info
                    </div>
                </div>        
    </div>
</body>

</html>