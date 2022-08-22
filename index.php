<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTEN</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/post-no-bills-jaffna">
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/playfair-display">
    <link rel="stylesheet" href="http://fonts.cdnfonts.com/css/pt-sans-2">
                
                
</head>

<body>

<?php
    $new_season_products_top3 = [
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ]
                               ];

    $new_goods_products_top8 = [
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ],
                                [
                                    'product_image' => 'image/watch.png',
                                    'product_name'  => 'Louis XVI ATHOS',
                                    'product_price' => '165 000 руб.'
                                ]
                               ];

    $our_brands_logo =  [
                            'brand_logo_1' => 'image/our-brands-logo.png',
                            'brand_logo_2' => 'image/our-brands-logo.png',
                            'brand_logo_3' => 'image/our-brands-logo.png',
                            'brand_logo_4' => 'image/our-brands-logo.png',
                        ];
?>

    <div id="container-main">
        <!-- Раздел готов. Нужно разобраться с наложением элементов при уменьшении масштаба страницы -->
        <div id="top-line" class="font-PT-Sans">
            <div class="top-line-info">
                <img src="image/phone.png" alt="phone.png">
                <pre> 8 (812) 123-45-67 | Работаем 7 дней в неделю | 9:00 — 18:00</pre>
            </div>
            <div class="top-line-login">
                <img src="image/login.png" alt="login.png">
                <pre> <a class="top-line-link" href="login.html">Войти</a> / <a class="top-line-link" href="reg.html">Регистрация</a></pre>
            </div>
        </div>
        <!--  Раздел готов. Нужно разобраться с наложением элементов при уменьшении масштаба страницы.
                Также нужно переработать меню в список со ссылками, на корзину и поиск также повешать ссылки.
                Повешать ссылку на логотип в шапке  -->
        <div id="second-line">
            <div class="second-line-logo"><a href="index.php">PORTEN</a></div>
            <div class="second-line-menu font-PT-Sans">
                <div class="menu-item">Понравилось</div>
                <div class="menu-item">Личный кабинет</div>
                <div class="menu-item">Настройки</div>
                <div id="menu-img-1">
                    <img class="menu-img" src="image/cart.png" alt="cart.png">
                </div>
                <div id="menu-img-2">
                    <img class="menu-img" src="image/search.png" alt="search.png">
                </div>
            </div>
        </div>
        <!-- Раздел готов. -->
        <div id="first-screen">
            <div class="logo">
                <div>
                    PORTEN
                </div>
                <div class="font-PT-Sans">
                    Санкт-Петербург
                </div>
            </div>
            <div class="welcom-text font-PT-Sans">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus interdum purus, est tortor pulvinar ut
                in. Fringilla a diam enim sed justo, sed iaculis sagittis. Tortor id eu interdum nec ut iaculis.
                Penatibus ullamcorper ultricies morbi ipsum sem metus pharetra, mi. Tortor nibh magna feugiat id nunc,
                dui nisl viverra.
            </div>
        </div>
        <!-- Раздел готов. Добавить анимацию на карточки товаров -->
        <div id="new-season">
            <div id="new-season-title" class="font-PD-36">
                Cезон 2020/21
            </div>
            <hr class="line-separator">
            <div class="new-season-product-list">
                <?php foreach($new_season_products_top3 as $item): ?>
                    <div class="new-season-product-item">
                        <div class="new-season-product-image">
                            <img src="<?php	echo $item['product_image']; ?>" alt="watch.png">
                        </div>
                        <div class="new-season-product-name">
                            <?php echo $item['product_name']; ?>
                        </div>
                        <div class="new-season-product-price">
                            <?php echo $item['product_price']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- <div class="new-season-product-item">
                    <div class="new-season-product-image">
                        <img src="image/watch.png" alt="watch.png">
                    </div>
                    <div class="new-season-product-name">
                        Louis XVI ATHOS
                    </div>
                    <div class="new-season-product-price">
                        165 000 руб.
                    </div>
                </div>
                <div class="new-season-product-item">
                    <div class="new-season-product-image">
                        <img src="image/watch.png" alt="watch.png">
                    </div>
                    <div class="new-season-product-name">
                        Louis XVI ATHOS
                    </div>
                    <div class="new-season-product-price">
                        165 000 руб.
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Раздел готов. Добавить ссылку на кнопку -->
        <div id="new-collection">
            <div id="new-collection-content" class="font-PD-36">
                <div>
                    Новая коллекция
                </div>
                <hr class="line-separator">
                <button class="button font-PT-Sans">
                    Каталог
                </button>
            </div>
        </div>
        <!-- Раздел готов -->
        <div id="collection-2018">
            <div class="collection-2018-image"></div>
            <div class="collection-2018-text">
                <div id="collection-2018-name" class="font-PD-36">
                    Коллекция 2018
                </div>
                <hr class="line-separator">
                <div class="collection-2018-description font-PT-Sans">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non rutrum ornare ut mattis habitant dui arcu. Sagittis amet nunc ut neque quis nibh arcu. Vivamus vestibulum nisi et venenatis sed scelerisque magna consectetur. Amet convallis quis gravida facilisis vulputate. Faucibus facilisi habitasse ipsum interdum dictum aliquet. Velit quis ullamcorper pulvinar nulla malesuada integer. Aenean praesent viverra nulla nullam natoque volutpat curabitur auctor. Viverra viverra ullamcorper scelerisque risus dignissim egestas. Id aliquam a aliquam egestas leo orci pharetra sed diam. 
                </div>
                <div>
                    <button class="button font-PT-Sans collection-2018-button">Посмотреть коллекцию</button>
                </div>
            </div>
        </div>
        <!-- Раздел готов -->
        <div id="new-goods">
            <div id="new-goods-title" class="font-PD-36">Новые поступления</div>
            <hr class="line-separator">
            <div class="new-goods-product-list">
                <?php foreach($new_goods_products_top8 as $item): ?>
                    <div class="new-season-product-item new-goods-product-item">
                        <div class="new-season-product-image">
                            <img src="<?php	echo $item['product_image']; ?>" alt="watch.png">
                        </div>
                        <div class="new-season-product-name">
                            <?php echo $item['product_name']; ?>
                        </div>
                        <div class="new-season-product-price">
                            <?php echo $item['product_price']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Раздел готов. Добавить ссылки на лого брендов -->
        <div id="our-brands">
            <div id="our-brands-title" class="font-PD-36">Наши бренды</div>
            <hr class="line-separator">
            <div class="our-brands-logo">
                <?php foreach($our_brands_logo as $value): ?>
                    <img class="our-brands-logo-img" src="<?php	echo $value; ?>" alt="our-brands-logo.png">
                <?php endforeach; ?>
            </div>
        </div>
        <!-- Убрать пробел между полями формы, поднять весь контейнер повыше в соответствии с макетом -->
        <div id="footer">
            <div class="footer-content"> 
                <div class="footer-info">
                    <div id="footer-info-title" class="font-PD-24">О магазине</div>
                    <div class="footer-info-text font-PT-Sans">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi semper viverra nunc cursus tortor lectus nunc nulla nibh. Egestas amet consectetur vel vitae aliquam dictum suspendisse. Lobortis eget consequat, tellus et et sed turpis. Pretium quisque vitae, amet, porttitor odio ultricies massa pharetra leo. Et ipsum urna fames in sit mi ultrices nisi, nunc.
                    </div>
                </div>
            <div class="footer-category">
                <div id="footer-category-title" class="font-PD-24">Категории</div>
                <div class="footer-category-selector font-PT-Sans">
                    <button class="footer-button">часы</button>
                    <button class="footer-button">браслеты</button>
                    <button class="footer-button">ремни</button>
                    <button class="footer-button">ювелирные изделия</button>
                    <button class="footer-button">запонки</button>
                </div>
            </div>
            <div class="footer-mailing">
                <div id="footer-mailing-title" class="font-PD-24">Рассылка</div>
                <div class="footer-mailing-text font-PT-Sans">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mi semper viverra nunc cursus tortor lectus nunc nulla nibh.
                </div>
                <div class="footer-mailing-form">
                    <form>
                        <input class="footer-input-email" type="text" placeholder="Ваша почта"><input class="footer-button footer-form-button" type="submit" value="Подписаться">
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div id="last-line">
            <div class="last-line-copyright font-PT-Sans">
                © 2020 Все права защищены
            </div>
            <div class="last-line-author font-PT-Sans">
                Сделано Figma.info
            </div>
        </div>
    </div>
</body>

</html>