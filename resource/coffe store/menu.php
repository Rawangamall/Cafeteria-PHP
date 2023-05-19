<?php
include("../../App/http/controllers/Product/allProducts.php");
include("../../App/http/controllers/Category/allCategories.php");

?>
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from xpressrow.com/html/cafena/cafena/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 09:11:24 GMT -->
<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Cafena - Coffee Shop HTML5 Template</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="assets/images/logo/favicon.ico" type="images/x-icon" />

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <header class="site-header site-header__3 site-header__4">
        <div class="menu-area menu-area__3 menu-area__4">
            <div class="container-fluid custom-width custom-width__2">
                <div class="row d-none d-xl-flex">
                    <div class="col-xl-5 col-lg-4 col-md-5 align-self-center">
                        <div class="main-menu main-menu__3 main-menu__4">
                            <nav>
                                <ul>
                                    <li class="menu-item-has-children"><a href="index-2.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Home 01</a></li>
                                            <li><a href="home-2.html">Home 02</a></li>
                                            <li><a href="home-3.html">Home 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="active"><a href="menu.php">Menu</a></li>
                                    <!-- <li><a href="reservation.html">Reservation</a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 d-none d-lg-block text-center align-self-center">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="assets/images/logo/logo-black.png" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-7 align-self-center">
                        <div class="menu-area__right menu-area__right--3 menu-area__right--4 d-flex justify-content-end align-items-center">
                            <div class="main-menu main-menu__3 main-menu__4">
                                <nav>
                                    <ul>
                                        <li><a href="#0">pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="chefs.html">Chefs</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="story.html">Story</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="product-details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Shop Cart</a></li>
                                                <li><a href="checkout.html">Shop Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="wrapper wrapper__2 pl-50 d-flex justify-content-end align-items-center">
                                <div class="search">
                                    <div class="search__trigger item">
                                        <span class="open"><i class="far fa-search"></i></span>
                                        <span class="close"><i class="fal fa-times"></i></span>
                                    </div>
                                    <div class="search__form">
                                        <form role="search" method="get" action="https://xpressrow.com/html/cafena/cafena/index.html">
                                            <input type="search" name="s" value="" placeholder="Search Keywords">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="hamburger-trigger item">
                                    <i class="far fa-bars"></i>
                                </div>
                                <div class="cart cart-trigger item position-relative">
                                    <i class="fa fa-shopping-basket"></i>
                                    <span class="cart__count">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-lg-flex d-xl-none">
                    <div class="col-xl-9 col-lg-10 col-6">
                        <div class="wrapper-for-lg d-flex align-items-center">
                            <div class="logo">
                                <a href="index-2.html">
                                    <img src="assets/images/logo/logo-black.png" alt="img">
                                </a>
                            </div>
                            <div class="main-menu main-menu__3 main-menu__4">
                                <nav id="mobile-menu">
                                <ul>
                                    <li class="menu-item-has-children"><a href="index-2.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Home 01</a></li>
                                            <li><a href="home-2.html">Home 02</a></li>
                                            <li><a href="home-3.html">Home 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="active"><a href="menu.html">Menu</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li><a href="#0">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="chefs.html">Chefs</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="story.html">Story</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Shop Cart</a></li>
                                            <li><a href="checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-6 align-self-center">
                        <div class="menu-area__right menu-area__right--4  d-flex justify-content-end align-items-center">
                            <div class="search">
                                <div class="search__trigger item">
                                    <span class="open"><i class="far fa-search"></i></span>
									<span class="close"><i class="fal fa-times"></i></span>
                                </div>
                                <div class="search__form">
                                    <form role="search" method="get" action="https://xpressrow.com/html/cafena/cafena/index.html">
                                        <input type="search" name="s" value="" placeholder="Search Keywords">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="hamburger-trigger item">
                                <i class="far fa-bars"></i>
                            </div>
                            <div class="cart cart-trigger item position-relative">
                                <i class="fa fa-shopping-basket"></i>
                                <span class="cart__count">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- side info for mobile view -->
    <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab"
                    href="#menu-tab-1" role="tab" aria-controls="menu-tab-1"
                    aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2"
                    role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index-2.html">
                    <img src="assets/images/logo/logo-black.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
                aria-labelledby="menu-tab-1-tab">
                <div class="mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel"
                aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="title mb-5">About us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
                        <a class="site-btn mt-20" href="contact.html">Contact us</a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-10">Contact us</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Bowery St., New York, NY 10013, USA</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+1255-568-6523</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>information@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <!-- side info for desktop view -->
    <aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index-2.html">
                    <img src="assets/images/logo/logo-black.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-5">About us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  nisi ut aliquip ex ea commodo consequat.</p>
                <a class="site-btn mt-20" href="contact.html">Contact us</a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-10">Contact us</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Bowery St., New York, NY 10013, USA</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+1255-568-6523</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>information@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="social-links mt-20 d-flex justify-content-start align-items-center">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>

    <!-- cart list -->
    <aside class="cart-bar-wrapper">
        <div class="cart-bar__close">
            <a class="d-flex align-items-center justify-content-center" href="javascript:void(0);"><i class="fal fa-times"></i></a>
        </div>
        <div class="cart-bar">
            <h4 class="cart-bar__title">Cart Items - <span>4</span></h4>
            <div class="cart-bar__lists">
                <div class="cart-bar__item position-relative d-flex">
                    <div class="thumb">
                        <img src="assets/images/top-grade/tg-1.png" alt="image_not_found">
                    </div>
                    <div class="content">
                        <h4 class="title">
                            <a href="product-details.html">Rorem ipsum dolor sit amet.</a>
                        </h4>
                        <span class="price">$19.00</span>
                        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
                    </div>
                </div>
                
                
                
            </div>
            <div class="cart-bar__subtotal d-flex align-items-center justify-content-between">
                <span>Sub Total:</span>
                <span>$87.00</span>
            </div>
            <div class="btns d-flex align-items-center justify-content-center">
                <a href="cart.html" class="site-btn">View Cart</a>
                <a href="checkout.html" class="site-btn site-btn__borderd">Checkout</a>
            </div>
        </div>
    </aside>
    <div class="overlay"></div>

    <main>
        <!-- breadcrumb area start -->
        <section class="breadcrumb-area pt-140 pb-140 bg_img" data-background="assets/images/bg/breadcrumb-bg-1.jpeg" data-overlay="dark" data-opacity="5">
            <div class="shape shape__1"><img src="assets/images/shape/breadcrumb-shape-1.png" alt=""></div>
            <div class="shape shape__2"><img src="assets/images/shape/breadcrumb-shape-2.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <h2 class="page-title">cafena menu</h2>
                        <div class="cafena-breadcrumb breadcrumbs">
                            <ul class="list-unstyled d-flex align-items-center justify-content-center">
                                <li class="cafenabcrumb-item duxinbcrumb-begin">
                                    <a href="index-2.html"><span>Home</span></a>
                                </li>
                                <li class="cafenabcrumb-item duxinbcrumb-end">
                                    <span>menu</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- populer menu area start -->
        <section class="popular-menu__area position-relative pb-120 pt-115">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="section-heading section-heading__black mb-40">
                            <span class="sub-title">menu</span>
                            <h2 class="title">Our Popular Menu</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 text-center">
                        <div class="popular-menu__wrapper m-auto d-inline-block">
                            
                            <div class="popular-menu__filter d-flex justify-content-center align-items-center mb-45">
                                <button class="active" data-filter="*">All</button>
                                <?php
                                    // include "../Admin/include/connection.php";
                                    // $sql = "SELECT id, name FROM category"; 
                                    // $result = $db->query($sql);
                                    if ($allCategories) {
                                        foreach ($allCategories as $row) {
                                            echo '<button data-filter=".cat'.$row['id'].'">'.$row['name'].'</button>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="popular-menu-grid-2" class="row popular-menu__grid popular-menu__lists mt-none-30">
                    <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-sizer"></div>
                    <?php
                        // include "../Admin/include/connection.php";
                        // $sql = "SELECT image, name, price FROM product";
                        // $result = $db->query($sql);
                        if ($allProducts) {
                            foreach ($allProducts as $row) {
                    ?>
                                <div class="col-xl-6 col-lg-6 col-md-6 l-item grid-item cat1 cat2 cat3 mt-35">
                                <div class="popular-menu__list" data-product-id="<?php echo $row['id']; ?>">
                                        <div class="thumb">
                                            <img src="../Admin/<?php echo $row['image']; ?>" alt="">
                                        </div>
                                        <div class="content">
                                            <h3 class="title border-effect"><a href="#0"><?php echo $row['name']; ?></a></h3>
                                            <span class="price">EGP <?php echo $row['price']; ?></span>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    ?>
                </div>
              
            </div>
        </section>
        <!-- populer menu area end -->

    </main>

    <footer class="site-footer dark-bg pt-155 position-relative">
        <div class="footer__top">
            <a href="#" class="go-top go-top__white position-absolute d-flex align-items-center justify-content-center">
                <i class="fal fa-long-arrow-up"></i>
            </a>
            <div class="container">
                <div class="row justify-content-center mt-none-30">
                    <div class="col-xl-3 col-lg-6 mt-30">
                        <div class="footer__widget footer__info">
                            <div class="item d-flex align-items-center justify-content-center">
                                <img src="assets/images/icons/ft-phone.png" alt="">
                                <span>Phone :</span>
                                <a href="tel:88019339702520">+88019 339 702 520</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 mt-30 pl-55">
                        <div class="footer__widget footer__info">
                            <div class="item d-flex align-items-center justify-content-start">
                                <img src="assets/images/icons/ft-map-marker.png" alt="">
                                <span>Address :</span>
                                <p>30 North West New</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8 mt-30 pl-55">
                        <div class="footer__widget">
                            <div class="subscribe">
                                <form action="https://xpressrow.com/html/cafena/cafena/index.html">
                                    <input type="email" name="email" id="email" placeholder="Enter your email">
                                    <button type="submit" class="subscribe__btn">Subscribe <i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__middle mt-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="footer__logo--content">
                            <img class="mb-15" src="assets/images/logo/logo.png" alt="">
                            <p>Donec et nibh maximus, congue est eu, mattis nunc. Praesent ut quam quis quam venenatis fringilla. Morbi vestibulum</p>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self-end">
                        <div class="social-links d-flex align-items-center justify-content-lg-end">
                            <a href="#0" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#0" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__menu-area mt-30 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="footer__menu">
                            <nav>
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="menu.html">Menu</a></li>
                                    <li><a href="reservation.html">Reservation</a></li>
                                    <li><a href="#0">pages</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center text-lg-end">
                        <a href="#" class="go-top go-top__bottom">
                            <span>go top</span>
                            <i class="fal fa-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--========= JS Here =========-->
    
    <!-- <script>
       



const  productElements = document.querySelectorAll('.popular-menu__list');
productElements.forEach((productElement) => {
    console.log(productElement);
  productElement.addEventListener('click',handleClick ); }); 
    // Retrieve the product data from the clicked element

    function handleClick() {
    console.log(productElement);
    const productId = productElement.dataset.productId;
    const productName = productElement.querySelector('.title a').textContent;
    const productPrice = productElement.querySelector('.price').textContent;
    const productImage = productElement.querySelector('.thumb img').src;

    console.log('Product clicked:', productId, productName, productPrice, productImage);

    // Update the cart with the product data
    updateCart(productId, productName, productPrice, productImage);
 
    }
  function updateCart(productId, productName, productPrice,productImage) {
  const cartBar = document.querySelector('.cart-bar__lists');

  // Check if the product is already in the cart
  const existingCartItem = cartBar.querySelector(`[data-product-id="${productId}"]`);
  if (existingCartItem) {
    // If the product is already in the cart, increase its quantity
    const quantityElement = existingCartItem.querySelector('.quantity');
    quantityElement.textContent = parseInt(quantityElement.textContent) + 1;
  } else {
    // If the product is not in the cart, create a new cart item element
    const cartItemElement = document.createElement('div');
    cartItemElement.classList.add('cart-bar__item', 'position-relative', 'd-flex');
    cartItemElement.setAttribute('data-product-id', productId);
    cartItemElement.innerHTML = `
      <div class="thumb">
      <?php
      if($productImage!="")
        {
            ?>
        <img src="../Admin/${productImage}" alt="">
        <?php } ?>
      </div>
      <div class="content">
        <h4 class="title">
          <a href="product-details.html">${productName}</a>
        </h4>
        <span class="price">${productPrice}</span>
        <div class="quantity">1</div>
        <a href="#0" class="remove"><i class="fal fa-times"></i></a>
      </div>
    `;
    console.log(cartItemElement);
    cartBar.appendChild(cartItemElement);
  }

  // Update the cart subtotal
  updateCartSubtotal();
}
function updateCartSubtotal() {
  const cartBar = document.querySelector('.cart-bar');
  const cartItems = cartBar.querySelectorAll('.cart-bar__item');

  let subtotal = 0;
  cartItems.forEach((cartItem) => {
    const priceElement = cartItem.querySelector('.price');
    const quantityElement = cartItem.querySelector('.quantity');
    const price = parseFloat(priceElement.textContent.replace('$', ''));
    const quantity = parseInt(quantityElement.textContent);
    subtotal += price * quantity;
  });

  const subtotalElement = cartBar.querySelector('.cart-bar__subtotal span:last-child');
  subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
}



        </script> -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/tilt.jquery.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrollwatch.js"></script>
    <script src="assets/js/sticky-header.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfpGBFn5yRPvJrvAKoGIdj1O1aO9QisgQ"></script>
    <script src="assets/js/jquery-ui-slider-range.js"></script>
    <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from xpressrow.com/html/cafena/cafena/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Apr 2023 09:11:24 GMT -->
</html>