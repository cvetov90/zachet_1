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
// Массивы с информацией о товарах для генерации каточек на главной странице
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
// Массив с путями к изображениям логотипов брендов для вывода в соответствующем разделе
    $our_brands_logo =  [
                            'brand_logo_1' => 'image/our-brands-logo.png',
                            'brand_logo_2' => 'image/our-brands-logo.png',
                            'brand_logo_3' => 'image/our-brands-logo.png',
                            'brand_logo_4' => 'image/our-brands-logo.png',
                        ];
?>

    <div id="container-main">
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
        <div id="first-screen">
            <div id="logo">
                <div class="font-logo">
                    PORTEN
                </div>
                <div class="font-PT-Sans">
                    Санкт-Петербург
                </div>
            </div>
            <div id="welcom-text" class="font-PT-Sans">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus interdum purus, est tortor pulvinar ut
                in. Fringilla a diam enim sed justo, sed iaculis sagittis. Tortor id eu interdum nec ut iaculis.
                Penatibus ullamcorper ultricies morbi ipsum sem metus pharetra, mi. Tortor nibh magna feugiat id nunc,
                dui nisl viverra.
            </div>
        </div>
        <div id="new-season">
            <div id="new-season-title" class="font-PD-36">
                Cезон 2020/21
            </div>
            <hr class="line-separator">
            <div id="new-season-product-list">
                <?php foreach($new_season_products_top3 as $item): ?>
                    <a href="">
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
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="new-collection">
            <div id="new-collection-content" class="font-PD-36">
                <div>
                    Новая коллекция
                </div>
                <hr class="line-separator">
                <a class="content-button font-PT-Sans" href="">
                        Каталог
                </a>
            </div>
        </div>
        <div id="collection-2018">
            <div id="collection-2018-image"></div>
            <div id="collection-2018-text">
                <div id="collection-2018-name" class="font-PD-36">
                    Коллекция 2018
                </div>
                <hr class="line-separator">
                <div id="collection-2018-description" class="font-PT-Sans">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non rutrum ornare ut mattis habitant dui arcu. Sagittis amet nunc ut neque quis nibh arcu. Vivamus vestibulum nisi et venenatis sed scelerisque magna consectetur. Amet convallis quis gravida facilisis vulputate. Faucibus facilisi habitasse ipsum interdum dictum aliquet. Velit quis ullamcorper pulvinar nulla malesuada integer. Aenean praesent viverra nulla nullam natoque volutpat curabitur auctor. Viverra viverra ullamcorper scelerisque risus dignissim egestas. Id aliquam a aliquam egestas leo orci pharetra sed diam. 
                </div>
                <a class="content-button font-PT-Sans" href="">
                        Посмотреть коллекцию
                </a>
            </div>
        </div>
        <div id="new-goods">
            <div id="new-goods-title" class="font-PD-36">Новые поступления</div>
            <hr class="line-separator">
            <div id="new-goods-product-list">
                <?php foreach($new_goods_products_top8 as $item): ?>
                    <a href="">
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
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="our-brands">
            <div id="our-brands-title" class="font-PD-36">Наши бренды</div>
            <hr class="line-separator">
            <div id="our-brands-logo">
                <?php foreach($our_brands_logo as $value): ?>
                    <a href=""><img class="our-brands-logo-img" src="<?php	echo $value; ?>" alt="our-brands-logo.png"></a>
                <?php endforeach; ?>
            </div>
        </div>
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