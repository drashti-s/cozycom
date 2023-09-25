
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

        <title>Dashboard - Cozycom</title>
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
                            <a href="index.php" class="nav__link active-link">Home</a>
                        </li>

                        <li class="nav__items">
                            <a href="shop.php" class="nav__link">Shop</a>
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

            <!--Home Section-->
            <section class="home section--lg">
                <div class="home__container container grid">
                    <div class="home__content">
                        <span class="home__subtitle">Hot Promotions</span>
                        <h1 class="home__title">Every baby deserves a Touch of Magic</h1>
                        <p class="home__description">Save more on baby's b-day</p>
                        <a href="shop.html" class="btn">Shop Now</a>
                    </div>
                    <img src="New folder/Coverpage.png" alt="" class="home__img"/>
                </div>
            </section>

            <!--Category Section-->
            <section class="categories container section">
                <h3 class="section__title"><span>Popular</span> Categories</h3>

                <div class="categories__container swiper">
                    <div class="swiper-wrapper">
                        <!--Category 1-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/category-1.jpg" alt="" class="category__img">

                            <h3 class="category__title">Clothing</h3>
                        </a>

                        <!--Category 2-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-2.jpg" alt="" class="category__img">

                            <h3 class="category__title">Soft Toys</h3>
                        </a>

                        <!--Category 3-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-3.jpg" alt="" class="category__img">

                            <h3 class="category__title">hygienic</h3>
                        </a>

                        <!--Category 4-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-4.png" alt="" class="category__img">

                            <h3 class="category__title">Footwear</h3>
                        </a>

                        <!--Category 5-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-5.jpg" alt="" class="category__img">

                            <h3 class="category__title">Care</h3>
                        </a>

                        <!--Category 6-->
                        <a href="shop.html" class="category__items swiper-slide">
                            <img src="New folder/Category/Category-6.jpg" alt="" class="category__img">

                            <h3 class="category__title">Travelling Bags</h3>
                        </a>
                    </div>

                    <div class="swiper-button-next">
                        <i class="fi fi-rs-angle-right"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fi fi-rs-angle-left"></i>
                    </div>
                </div>
            </section>

            <!--Products Section-->
            <section class="products section container">
                <div class="tab__btns">
                    <span class="tab__btn active-tab">Featured</span>
                </div>

                <div class="tab__items">
                    <div class="tab__item active-tab" content id="featured">
                        <div class="product__container grid">
                            <!--Product 1-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/Product-1-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-1-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-pink">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Regular Fit Printed Casual Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹499</span>
                                        <span class="old__price">₹999</span>
                                    </div>

                                    <a href="cart.html" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>

                            <!--Product 2-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">
                                        <img src="New folder/Product/Product-2-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-2-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Soft-Toy</span>
                                    <a href="details.html">
                                        <h3 class="product__title"> Blue Elephant Soft-Toy</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹369</span>
                                        <span class="old__price">₹549</span>
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
                                        <img src="New folder/Product/Product-8-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-8-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-blue">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Care</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Baby Lotion</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹359</span>
                                        <span class="old__price">₹399</span>
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
                                        <img src="New folder/Product/Product-4-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-4-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-orange">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Soft-Toy</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Babyhug Turtle Soft Toy Green & Pink </h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹285</span>
                                        <span class="old__price">₹545</span>
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
                                        <img src="New folder/Product/Product-9-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-9-2.jpg" alt="" class="product__img hover">
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
                                    <span class="product__category">FootWear</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Fruit Printed Flip Flop</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹339</span>
                                        <span class="old__price">₹399</span>
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
                                        <img src="New folder/Product/Product-11-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-11-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-blue">-52%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Travelling Bag</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Diaper Backpack Star Print</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹1339</span>
                                        <span class="old__price">₹2795</span>
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
                                        <img src="New folder/Product/Product-14-1.jpg" alt="" class="product__img default">
                                        <img src="New folder/Product/Product-14-1.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">hygienic</span>
                                    <a href="details.html">
                                        <h3 class="product__title">MotherCare Soap</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹45</span>
                                        <span class="old__price">₹50</span>
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
                    </div>

                    <div class="tab__item" content id="popular">
                        <div class="product__container grid">
                            <!--Product 1-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="IMG/product-10-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-10-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-pink">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-2-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-2-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-3-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-3-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-orange">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-4-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-4-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-blue">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-5-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-5-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-blue">-30%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-6-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-6-2.jpg" alt="" class="product__img hover">
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
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-7-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-7-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-8-1.jpg" class="product__img default">
                                        <img src="IMG/product-8-2.jpg" class="product__img hover">
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
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab__item" content id="new-added">
                        <div class="product__container grid">
                            <!--Product 1-->
                            <div class="product__item">
                                <div class="product__banner">
                                    <a href="details.html" class="product__images">

                                        <!--Product1-->
                                        <img src="IMG/product-1-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-1-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-pink">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-2-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-2-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-3-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-3-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-orange">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-4-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-4-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-blue">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-5-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-5-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-blue">-30%</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-6-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-6-2.jpg" alt="" class="product__img hover">
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
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-7-1.jpg" alt="" class="product__img default">
                                        <img src="IMG/product-7-2.jpg" alt="" class="product__img hover">
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

                                    <div class="product__badge light-green">Hot</div>
                                </div>

                                <div class="product__content">
                                    <span class="product__category">Clothing</span>
                                    <a href="details.html">
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
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

                                        <!--Product1-->
                                        <img src="IMG/product-8-1.jpg" class="product__img default">
                                        <img src="IMG/product-8-2.jpg" class="product__img hover">
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
                                        <h3 class="product__title">Colorful Shirt</h3>
                                    </a>
                                    <div class="product__rating">
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                        <i class="fi fi-rs-star"></i>
                                    </div>
                                    <div class="product__price flex">
                                        <span class="new__price">₹999</span>
                                        <span class="old__price">₹1499</span>
                                    </div>

                                    <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                        <i class="fi fi-rs-shopping-bag-add"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--New Arrivals-->
            <section class="new__arrivals container section">
                <h3 class="section__title"><span>New</span> Arrivals</h3>
                <div class="new__container swiper">
                    <div class="swiper-wrapper">
                        <div class="product__item swiper-slide">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="New folder/Newarrivals/new_arrivals1.jpg" alt="" class="product__img default">
                                    <img src="New folder/Newarrivals/new_arrivals1.jpg" alt="" class="product__img hover">
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
                                <div class="product__badge light-pink">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Full Sleeves Frocks with Inner Tee Anchor Print</h3>
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
                                    <span class="old__price">₹789</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>

                        <!--Product 2-->
                        <div class="product__item swiper-slide">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="New folder/Newarrivals/new_arrivals2.jpg" alt="" class="product__img default">
                                    <img src="New folder/Newarrivals/new_arrivals2.jpg" alt="" class="product__img hover">
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

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Full Sleeves Sweater Set With Socks & Cap</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹769</span>
                                    <span class="old__price">₹898</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>

                        <!--Product 3-->
                        <div class="product__item swiper-slide">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="New folder/Newarrivals/new_arrivals3.jpg" alt="" class="product__img default">
                                    <img src="New folder/Newarrivals/new_arrivals3.jpg" alt="" class="product__img hover">
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

                                <div class="product__badge light-orange">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Cotton Full Sleeves Sweatshirt</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹339</span>
                                    <span class="old__price">₹499</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>

                        <!--Product 4-->
                        <div class="product__item swiper-slide">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="New folder/Newarrivals/new_arrivals4.jpg" alt="" class="product__img default">
                                    <img src="New folder/Newarrivals/new_arrivals4.jpg" alt="" class="product__img hover">
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

                                <div class="product__badge light-blue">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Elephant Printed Kurta With Dhoti - White</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹719</span>
                                    <span class="old__price">₹899</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>

                        <!--Product 5-->
                        <div class="product__item swiper-slide">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="New folder/Newarrivals/new_arrivals5.jpg" alt="" class="product__img default">
                                    <img src="New folder/Newarrivals/new_arrivals5.jpg" alt="" class="product__img hover">
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

                                <div class="product__badge light-blue">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category"></span>
                                <a href="details.html">
                                    <h3 class="product__title">Full Sleeves Vests Animals Printed &  Blue Baby Peach</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹399</span>
                                    <span class="old__price">₹699</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>

                        <!--Product 6-->
                        <div class="product__item swiper-slide">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">
                                    <img src="New folder/Newarrivals/new_arrivals6.jpg" alt="" class="product__img default">
                                    <img src="New folder/Newarrivals/new_arrivals6.jpg" alt="" class="product__img hover">
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

                                <div class="product__badge light-blue">-50%</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Full Sleeves Night Suit Giraffe & Elephant</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹249</span>
                                    <span class="old__price">₹499</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>

                        <!--Product 7-->
                        <div class="product__item swiper-slide">
                            <div class="product__banner">
                                <a href="details.html" class="product__images">

                                    <img src="New folder/Newarrivals/new_arrivals7.jpg" alt="" class="product__img default">
                                    <img src="New folder/Newarrivals/new_arrivals7.jpg" alt="" class="product__img hover">
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

                                <div class="product__badge light-green">Hot</div>
                            </div>

                            <div class="product__content">
                                <span class="product__category">Clothing</span>
                                <a href="details.html">
                                    <h3 class="product__title">Full Sleeves Footed Sleep Suits</h3>
                                </a>
                                <div class="product__rating">
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                    <i class="fi fi-rs-star"></i>
                                </div>
                                <div class="product__price flex">
                                    <span class="new__price">₹1449</span>
                                    <span class="old__price">₹1999</span>
                                </div>

                                <a href="#" class="action__btn cart__btn" aria-label="Add to Cart">
                                    <i class="fi fi-rs-shopping-bag-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                        
                    <div class="swiper-button-next">
                       
                    </div>
                    <div class="swiper-button-prev">
                        
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