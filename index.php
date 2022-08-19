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
?>

    <div class="container">
        <!-- Раздел готов. Нужно разобраться с наложением элементов при уменьшении масштаба страницы -->
        <div class="top-line">
            <div>
                <img src="image/phone.png" alt="phone.png">
                <pre> 8 (812) 123-45-67 | Работаем 7 дней в неделю | 9:00 — 18:00</pre>
            </div>
            <div>
                <img src="image/login.png" alt="login.png">
                <pre> Войти / Регистрация</pre>
            </div>
        </div>
        <!--  Раздел готов. Нужно разобраться с наложением элементов при уменьшении масштаба страницы.
                Также нужно переработать меню в список со ссылками, на корзину и поиск также повешать ссылки.
                Повешать ссылку на логотип в шапке  -->
        <div class="second-line">
            <div>PORTEN</div>
            <div>
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
        <div class="first-screen">
            <div class="logo">
                <div>
                    PORTEN
                </div>
                <div>
                    Санкт-Петербург
                </div>
            </div>
            <div class="welcom-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus interdum purus, est tortor pulvinar ut
                in. Fringilla a diam enim sed justo, sed iaculis sagittis. Tortor id eu interdum nec ut iaculis.
                Penatibus ullamcorper ultricies morbi ipsum sem metus pharetra, mi. Tortor nibh magna feugiat id nunc,
                dui nisl viverra.
            </div>
        </div>
        <!-- Раздел готов. Добавить анимацию на карточки товаров -->
        <div class="new-season">
            <div class="new-season-title">
                Cезон 2020/21
            </div>
            <hr id="new-season-line">
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
        <div class="new-collection">
            <div>
                <div>
                    Новая коллекция
                </div>
                <hr id="new-collection-line">
                <button class="button">
                    Каталог
                </button>
            </div>
        </div>
        <!-- Раздел готов -->
        <div class="collection-2018">
            <div class="collection-2018-image"></div>
            <div class="collection-2018-text">
                <div class="collection-2018-name">
                    Коллекция 2018
                </div>
                <hr class="collection-2018-line">
                <div class="collection-2018-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non rutrum ornare ut mattis habitant dui arcu. Sagittis amet nunc ut neque quis nibh arcu. Vivamus vestibulum nisi et venenatis sed scelerisque magna consectetur. Amet convallis quis gravida facilisis vulputate. Faucibus facilisi habitasse ipsum interdum dictum aliquet. Velit quis ullamcorper pulvinar nulla malesuada integer. Aenean praesent viverra nulla nullam natoque volutpat curabitur auctor. Viverra viverra ullamcorper scelerisque risus dignissim egestas. Id aliquam a aliquam egestas leo orci pharetra sed diam. 
                </div>
                <div>
                    <button class="button collection-2018-button">Посмотреть коллекцию</button>
                </div>
            </div>
        </div>
        <div class="new-goods">
            <div class="new-goods-title">Новые поступления</div>
            <hr class="new-goods-line">
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
        <div class="our-brands">our-brands</div>
        <div class="footer">footer</div>
        <div class="last-line">last-line</div>
    </div>
</body>

</html>