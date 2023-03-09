<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8f4ddd016f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/style.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>My Shop</title>
</head>
<body>
    <div class="all">
        <!--Header-->
        <header>
            <!--Navigation bar-->
            <div class="main-header">
                <div class="container">
                    <div class="header-content">
                        <div class="header-logo">
                            <a href="#">
                                <img src="img/Logo.png">
                            </a>
                        </div>
                        <div class="header-navigator">
                            <ul>
                                <li >
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="category">
                                    <a href="http://localhost/myshop/product.php">Sản Phẩm</a>
                                    <ul class="category-hover">
                                        <li>
                                            <a href="http://localhost/myshop/shirt.php">ÁO THUN</a>
                                        </li>
                                        <li>
                                            <a href="http://localhost/myshop/pants.php">QUẦN</a>
                                        </li>
                                        <li>
                                            <a href="">PHỤ KIỆN</a>
                                        </li>
                                    </ul>
                                </li>
                                <li >
                                    <a href="http://localhost/myshop/contact.php">Liên Hệ</a>
                                </li>
                        </div>
                        <div class="header-menu">
                            <ul class="menu-list">
                                <li class="icon-search">
                                    <a href="#">
                                        <button>
                                            <i class="fa-sharp fa-solid fa-magnifying-glass" id="menu-icon"></i>
                                        </button>
                                    </a>
                                </li>
                                <li class="icon-user">
                                    <a href="http://localhost/myshop/login.php">
                                        <button>
                                            <i class="fa-solid fa-user"
                                    id="menu-icon"></i>
                                        </button>
                                    </a>
                                </li>
                                <li class="icon-cart">
                                    <a href="#">
                                        <button>
                                            <i class="fa-solid fa-basket-shopping"
                                            id="menu-icon"></i>
                                            <span class="cart-amount">0</span>
                                        </button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Content-->
        <section>
            <div class="main-content-section">
                <div class="container">
                    <!--Slider Banner-->
                    <div class="promotion">
                        <div class="promotion-list">
                            <div class="slider">
                                <picture>
                                    <img src="img/slide1.png">
                                </picture>
                            </div>
                            <div class="slider">
                                <picture>
                                    <img src="img/slide2.png">
                                </picture>
                            </div>
                            <div class="slider">
                                <picture>
                                    <img src="img/slide3.png">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="collection">
                        <div class="collection-list">
                            <div class="collection-all">
                                <a class="collection-link" href="http://localhost/myshop/product.php">
                                    <img src="img/collection-all.png">
                                    <div class="category-block-content">
                                        <p>Sản phẩm mới</p>
                                        <h3>Sản phẩm mới</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-shirt">
                                <a class="collection-link" href="http://localhost/myshop/shirt.php">
                                    <img src="img/collection-shirt.png">
                                    <div class="category-block-content">
                                        <p>Áo phông</p>
                                        <h3>Áo phông</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-pant">
                                <a class="collection-link" href="http://localhost/myshop/pants.php">
                                    <img src="img/collection-pant.png">
                                    <div class="category-block-content">
                                        <p>Quần đùi</p>
                                        <h3>Quần đùi</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product"></div>
                </div>
            </div>
        </section>
        <!--Footer-->
        <footer>
            <div class="sectionGallery">
                <div class="container-fluid">
                    <div class="row">
                        <div class="wraptitle-gallery text-center">
                            <a href="//www.instagram.com/instagram/" target="_blank" rel="noreferrer">
                                FOLLOW US<span>@instagram</span>				
                            </a>
                        </div>	
                        <div class="wraplist-container-gallery">
                            <div class="gallery_item">
                                <a href="https://www.instagram.com/gucci/" target="_blank" rel="noreferrer">
                                    <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_1_img.jpg?v=80" src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_1_img.jpg?v=80" alt="instagram">
                                        <span class="ico-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>						
                                </a>
                            </div>
                            <div class="gallery_item">
                                <a href="https://www.instagram.com/gucci/" target="_blank" rel="noreferrer">
                                    <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_2_img.jpg?v=80" src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_2_img.jpg?v=80" alt="instagram">
                                        <span class="ico-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>						
                                </a>
                            </div>
                            <div class="gallery_item">
                                <a href="https://www.instagram.com/gucci/" target="_blank" rel="noreferrer">
                                    <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_3_img.jpg?v=80" src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_3_img.jpg?v=80" alt="instagram">
                                        <span class="ico-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>						
                                </a>
                            </div>
                            <div class="gallery_item">
                                <a href="https://www.instagram.com/gucci/" target="_blank" rel="noreferrer">
                                    <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_4_img.jpg?v=80" src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_4_img.jpg?v=80" alt="instagram">
                                        <span class="ico-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>						
                                </a>
                            </div>
                            <div class="gallery_item">
                                <a href="https://www.instagram.com/gucci/" target="_blank" rel="noreferrer">
                                    <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_5_img.jpg?v=80" src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_5_img.jpg?v=80" alt="instagram">
                                        <span class="ico-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>						
                                </a>
                            </div>
                            <div class="gallery_item">
                                <a href="https://www.instagram.com/gucci/" target="_blank" rel="noreferrer">
                                    <img class=" ls-is-cached lazyloaded" data-src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_6_img.jpg?v=80" src="//theme.hstatic.net/200000015470/1000737480/14/gallery_item_6_img.jpg?v=80" alt="instagram">
                                        <span class="ico-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></span>						
                                </a>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="footer-top-content">
                    <div class="footer-top-logo">
                        <img src="img/Logo.png">
                    </div>
                    <div class="footer-top-body">  
                        <p>Ra đời với mong muốn mang đến cho các bạn trẻ những bộ quần áo đơn giản nhưng vẫn thể hiện được cá tính riêng. MyShop sẽ mang đến những sản phẩm không chỉ đẹp về mẫu mà còn chất lượng về chất vải cho bạn. Chúng tớ quan tâm đến nhu cầu của mọi cá nhân và trân trọng từng sản phẩm gửi tới các bạn trẻ</p>
                    </div>
                    <div class="footer-icon">
                        <a href="https://www.facebook.com/GUCCI/?locale=vi_VN">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/gucci?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/gucci/">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCo6fjlKg6GuCmEMeqYbGJng">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="footer-top-contact">
                    <div class="contact-list">
                        <div class="contact">
                            <div class="contact-tile">
                                <h4>CONTACT US</h4>
                            </div>
                            <div class="info-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span id="info">123, Lương Ngọc Quyến, Thái Nguyên</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-phone-flip"></i>
                                            <span id="info">085 988 2251</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-solid fa-envelope"></i>
                                            <span id="info">nogthaison@gmail.com</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="fa-sharp fa-solid fa-clock"></i>
                                            <span id="info">8:00 - 22:00 All day</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="contact-tile">
                                <h4>MY ACCOUNT</h4>
                            </div>
                            <div class="info-list">
                                <ul>
                                    <li>
                                        <a href="#">Thanh toán</a>
                                    </li>
                                    <li>
                                        <a href="#">Đăng ký</a>
                                    </li>
                                    <li>
                                        <a href="http://localhost/myshop/login.php">Đăng nhập</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="contact-tile">
                                <h4>INFORMATION</h4>
                            </div>
                            <div class="info-list">
                                <ul>
                                    <li>
                                        <a href="#">Liên hệ</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms of user</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact">
                            <div class="contact-tile">
                                <h4>QUICK LINK</h4>
                            </div>
                            <div class="info-list">
                                <ul>
                                    <li>
                                        <a href="#">Help center</a>
                                    </li>
                                    <li>
                                        <a href="#">Report spam</a>
                                    </li>
                                    <li>
                                        <a href="#">FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p>Copyright © 2023 MyShop - Design by Thai Son</p>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
</body>
</html>