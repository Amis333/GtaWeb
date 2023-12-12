<?php
require_once('addtable.php');
require_once('search.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper" id="wrapper">

        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu_list-item">
                                <a class='menu__list-link' href="index.html" alt="">Главная</a>
                            </li>
                            <li class="menu_list-item">
                                <a class='menu__list-link' href="traidIn.html" alt="">Trade-in</a>
                            </li>
                            <li class="menu_list-item">
                                <a class='menu__list-link' href="catalog.html" alt="">Каталог</a>
                            </li>
                            <li class="menu_list-item">
                                <a class='menu__list-link' href="#" alt="">Информация</a>
                            </li>
                            <li class="menu_list-item">
                                <a class='menu__list-link' href="join.html" alt="">Аккаунт</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <section class="main">
            <form class="form_search" method="post" id="searchform"> 
                <input class="form_search-text" type="text" name="search"> 
                <input class="form_search-submit" type="submit" name="submit" value="Search"> 
            </form> 

            <section class="product__container">
                <div class="product_content">
                    <div class="product_content-body" id="product_content-body">
                        <?php
                            if (isset($_POST['submit'])) {
                                for ($i = 0; $i < count($carsDataSearch); $i++) {
                                    echo "<div class=\"product_content-card\">";
                                        echo "<a href=\"#\" class=\"product_content-link\">";
                                            echo '<img src="images/'.$carsDataSearch[$i]["img"].'" alt="Фото" class="product_content-img">';
                                            echo '<span class="product_content-about">';
                                                echo '<h3>'.$carsDataSearch[$i]["title"].'</h3>';
                                                echo '<span class="price">Цена: '.$carsDataSearch[$i]["price"].' рублей</span>';
                                                echo '</span>';
                                            echo '</a>';
                                        echo '</div>';
                                }
                            } else {
                                for ($i = 0; $i < count($carsData); $i++) {
                                    echo "<div class=\"product_content-card\">";
                                        echo "<a href=\"#\" class=\"product_content-link\">";
                                            echo '<img src="images/'.$carsData[$i]["img"].'" alt="Фото" class="product_content-img">';
                                            echo '<span class="product_content-about">';
                                                echo '<h3>'.$carsData[$i]["title"].'</h3>';
                                                echo '<span class="price">Цена: '.$carsData[$i]["price"].' рублей</span>';
                                                echo '</span>';
                                            echo '</a>';
                                        echo '</div>';
                                }
                            }
                        ?>

                    </div>
                </div>
            </section>

        </section>

        <footer class="footer">
            <div class="container&#45;&#45;foot">
                <div class="row">
                    <div class="footer-col">
                        <h4>company</h4>
                        <ul>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">our services</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="AffiliateProgram.html">affiliate program</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                </div>
        </footer>

    </div>

    <script src="scripts/jquery.js"></script>
    <script src="scripts/script.js"></script>

</body>

</html>