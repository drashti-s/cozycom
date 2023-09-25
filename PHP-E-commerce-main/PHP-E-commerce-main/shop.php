<!DOCTYPE html>
<html>
    <head>
        <!--CSS-->
        <link rel="stylesheet" href="CSS/style.css"/>

        <!--Swiper CSS-->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

        <!---->
        <link rel="stylesheet" 
        href="https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css"/>

        <title>Cozycom</title>
    </head>
    <body>
        <header class="header">
            <div class="header__top">
                <div class="header__container container">
                    <div class="header__contact">
                        <span>+91 98858 23659</span>
                    </div>
                    <p class="header__alert-news">
                        Tiny Toes, Big Adventures
                    </p>

                    <a href="logout.php" class="header__top-action">
                       Logout
                    </a>
                </div>
            </div>
            <!-- logo-->
            <nav class="nav container">
                <a href="" class="nav__logo">
                    <img src="" alt="" class="nav__log-img">
                </a>

                <!-- All pages-->
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__items">
                            <a href="index.php" class="nav__link">Home</a>
                        </li>

                        <li class="nav__items">
                            <a href="shop.php" class="nav__link active-link">Shop</a>
                        </li>

                        <li class="nav__items">
                            <a href="login.php" class="nav__link">Login</a>
                        </li>

                        <li class="nav__items">
                            <a href="register.php" class="nav__link">Register</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="main">

            <!--Breadcrumb-->
            <section class="breadcrumb">
                <ul class="breadcrumb__list flex container">
                    <li><a href="index.html" class="breadcrumb__link">Home</a></li>
                    <li><span class="breadcrumb__link">></span></li>
                    <li><span class="breadcrumb__link">Shop</span></li>
                </ul>
            </section>

            <!--Products Section-->
            <section class="products section--lg container">
                <div class="product__container grid">
                        <!--Product 1-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize8.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/resize 8(1).jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-pink">-15%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">hygienic</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Little Story Cotton Rope Diaper</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹1699</span>
                                        <span class="old__price">₹1999</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 2-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize 1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/resize 1(1).jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-green">-25%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Full Sleeves Sweater With Bow</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹759</span>
                                        <span class="old__price">₹999</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 3-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize3.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/resize 3(1).jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">-15%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Bluebell Net Sleeveless Party Dress</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹1549</span>
                                        <span class="old__price">₹1795</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 4-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize5.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/resize 5(1).jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-orange">-49%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Care</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Babyhug Milk Protein Formula Daily Full Body </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹270</span>
                                        <span class="old__price">₹525</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 5-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/Extra/resize1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Extra/resize1(1).jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">-32%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">FootWear</span>
                                    <a href="details.html">
                                        <h3 class="product__title">BabyMoo Shark Infant Anti-Slip </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹475</span>
                                        <span class="old__price">₹699</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 6-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/Extra/resize2.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Extra/resize2(1).jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">-44%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Hygienic</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Mosquito Net</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹1155</span>
                                        <span class="old__price">₹2079</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 7-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/Extra/resize3.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Extra/resize3(1).jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-green">-43%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Soft-Toy</span>
                                    <a href="details.html">
                                        <h3 class="product__title">DearJoy Elephant Shaped Baby Pillow /h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹569</span>
                                        <span class="old__price">₹999</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 8-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize6.jpg" class="product__img default">
                                        <img src="New folder/Product/resize 6(1).jpg" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">-2%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Care</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Cetaphil Baby Daily Lotion</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹782</span>
                                        <span class="old__price">₹795</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 9-->
                        <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize 2(1).jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/resize2.jpg" alt="" class="product__img hover">
                                    </a>

                                    <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                    </div>

                                    <div class="product__badge light-blue">-22%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Knit Full Sleeves Sweater With Solid Colour</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹779</span>
                                        <span class="old__price">₹999</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                        </div>

                        <!--Product 10-->
                        <div class="product__item">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize 9(1).jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/resize9.jpg" alt="" class="product__img hover">
                                </a>
                                <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                </div>

                                <div class="product__badge light-blue">-8%</div>
                            </div>

                            <div class="product__content">
                                    <span class="product__category">FootWear</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Tiekart Funky Animal Embroidery Design </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹735</span>
                                        <span class="old__price">₹799</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                            </div>
                        </div>

                        <!--Product 11-->
                        <div class="product__item">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                        <img src="New folder/Product/resize4.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/resize 4(1).jpg" alt="" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                </div>

                                <div class="product__badge light-green"></div>
                            </div>

                            <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Sleeveless Flower Applique Layered Party Dress</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹1235</span>
                                        <span class="old__price">₹1299</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                            </div>
                        </div>

                        <!--Product 12-->
                        <div class="product__item">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                        <img src="New folder/Product/Product-18-1.jpg" class="product__img default">
                                        <img src="New folder/Product/Product-18-2.jpg" class="product__img hover">
                                </a>

                                <div class="product__actions">
                                        <a href="#" class="action__btn" aria-label="Quick view">
                                            <i class="fi fi-rs-eye"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Add to Wishlist">
                                            <i class="fi fi-rs-heart"></i>
                                        </a>

                                        <a href="#" class="action__btn" aria-label="Compare">
                                            <i class="fi fi-rs-shuffle"></i>
                                        </a>
                                </div>

                                <!--<div class="product__badge light-blue">-32%</div>-->
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                        <h3 class="product__title">Taffy Sleeveless Ruffle Detail Textured Crop Top And Pant Set </h3>
                                </a>
                                <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                        <span class="new__price">₹1199</span>
                                        <span class="old__price">₹1499</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                </div>
            </section>

            <!--Newsletter Section-->
            <section class="newsletter section home__newsletter">
                <div class="newsletter__container container grid">
                    <h3 class="newsletter__title flex">
                        <img src="IMG/icon-email.svg" class="newsletter__icon">Sign up to Newsletter
                    </h3>

                    <p class="newsletter__description">
                        ....and receive ₹500 Coupon for first Shopping
                    </p>

                    <form action="" class="newsletter__form">
                        <input type="text" class="newsletter__input" 
                        placeholder="Enter your Email"/>

                        <button type="submit" class="newsletter__btn">Subscribe</button>
                    </form>
                </div>
            </section>
        </main>

            <!--Footer Section-->
            <footer class="footer container">
                <div class="footer__container grid">
                    <div class="footer__content">
                        <a href="index.html" class="footer__logo">
                            <img src="" alt="" class="footer__logo">
                        </a>

                        <h4 class="footer__subtitle">Contact</h4>

                        <p class="footer__description">
                            <span>Address:</span> Ganesh Complex, Street 2,Ahmedabad
                        </p>

                        <p class="footer__description">
                            <span>Phone:</span> +91 98858 23659 / +91 65485 96584
                        </p>

                        <p class="footer__description">
                            <span>Hours:</span> 10:00 - 18:00, Mon - Sat
                        </p>

                        <div class="footer__social">
                            <h4 class="footer__subtitle">Follow Us</h4>

                            <div class="footer__social-links flex">
                                <a href="https://www.instagram.com/neel_0089/" >
                                    <img src="IMG/icon-instagram.svg" alt="" class="footer__social-icon">
                                </a>
                            
                                <a href="" >
                                    <img src="IMG/icon-youtube.svg" alt="" class="footer__social-icon">
                                </a>
                
                                <a href="https://twitter.com/VariaNeel" >
                                    <img src="IMG/icon-x.svg" alt="" class="footer__social-icon ">
                                </a>

                                <a href="" >
                                    <img src="IMG/icon-pinterest.svg" alt="" class="footer__social-icon ">
                                </a>

                                <a href="https://www.linkedin.com/in/neel-varia-464732237/">
                                    <img src="IMG/icons8-linkedin.svg" alt="" class="footer__social-icon">
                                </a>

                            </div>
                        </div>

                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Address</h3>

                        <ul class="footer__links">
                            <li><a href="" class="footer___link">About Us</a></li>
                            <li><a href="" class="footer___link">Privacy Policy</a></li>
                            <li><a href="" class="footer___link">Terms & Condition</a></li>
                            <li><a href="" class="footer___link">Contact Us</a></li>
                            <li><a href="" class="footer___link">Support Center</a></li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">My Account</h3>

                        <ul class="footer__links">
                            <li><a href="login-register.html" class="footer___link">Register</a></li>
                            <li><a href="login.html" class="footer___link">Sign In</a></li>
                            <li><a href="help.html" class="footer___link">Help</a></li>
                            <li><a href="logout.html" class="footer___link">Logout</a></li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Pages</h3>

                        <ul class="footer__links">
                            <li><a href="index.html" class="footer___link">Home</a></li>
                            <li><a href="shop.html" class="footer___link">Shop</a></li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Secured Payment Gateways</h3>

                        <img src="IMG/payment-method.png" alt="" class="payment__img">
                    </div>
                </div>

                <div class="footer__bottom">
                    <p class="copyright">@copy 2023 CozyCom. All Rights Reserved</p>
                    <span class="designer">Desgined by CozyCom Team</span>
                </div>
            </footer>
        

        <!--Swiper JS-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <!--Swiper JS-->
        <script>
            var swiperCategories = new Swiper(".categories__container", {
                spaceBetween: 24,
                loop: true,
                
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
    
                breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                 },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1400: {
                    slidesPerView: 6,
                    spaceBetween: 24,
                },
            }
        });
    
        //Product JS
            const tabs = document.querySelectorAll('[data-target]'),
                tabContents = document.querySelectorAll('[content]');
    
            tabs.forEach((tab) =>{
                tab.addEventListener('click', () =>{
                    const target = document.querySelector(tab.dataset.target);
                    tabContents.forEach((tabContent) => {
                        tabContent.classList.remove('active-tab');
                    });
    
                    target.classList.add('active-tab');
    
                    tabs.forEach((tab) => {
                        tab.classList.remove('active-tab');
                    });
                    tab.classList.add('active-tab');
    
                });
            });
    
            var swiperProducts = new Swiper(".new__container", {
                spaceBetween: 24,
                loop: true,
                
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
    
                breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                 },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1400: {
                    slidesPerView: 5,
                    spaceBetween: 24,
                },
            }
        });
            </script>

    </body>
</html>