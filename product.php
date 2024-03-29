<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <!-- Owl Slider css -->
    <link rel="stylesheet" href="assets/owlCarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlCarousel/assets/owl.theme.default.min.css">
    <!-- Layout -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <!-- index -->
    <link rel="stylesheet" type="text/css" href="./assets/css/product.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="assets/owlCarousel/owl.carousel.min.js"></script>

    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
</head>

<body>
    <div class="header scrolling" id="myHeader">
        <div class="grid wide">
            <div class="header__top">
                <div class="navbar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <a href="index.php" class="header__logo">
                    <img  src="./assets/img/slider/slide-logo.png" alt="" class="imgL">
                </a>
                <div class="header__search">
                    <div class="header__search-wrap">
                        <input type="text" class="header__search-input" placeholder="Tìm kiếm">
                        <a class="header__search-icon" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="header__account">
                    <a href="#my-Login" class="header__account-login">Đăng Nhập</a>
                    <a href="#my-Register" class="header__account-register">Đăng Kí</a>
                </div>
                <!-- Cart -->
                <div class="header__cart have" href="#">
                    <i class="fas fa-shopping-basket"></i>
                    <div class="header__cart-amount">
                        3
                    </div>
                    <div class="header__cart-wrap">
                        <ul class="order__list">
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="product.php" class="order-img">
                                        <img src="./assets/img/product/Slide1.JPG" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="product.php" class="order-main-name">Áo sơ mi caro </a>
                                        <div class="order-main-price"> 45,000 ₫</div>
                                    </div>
                                    <a href="product.php" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="product.php" class="order-img">
                                        <img src="./assets/img/product/Slide2.JPG" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="product.php" class="order-main-name">Áo khoác đen</a>
                                        <div class="order-main-price"> 476,000 ₫</div>
                                    </div>
                                    <a href="product.php" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                            <li class="item-order">
                                <div class="order-wrap">
                                    <a href="product.php" class="order-img">
                                        <img src="./assets/img/product/Slide23.JPG" alt="">
                                    </a>
                                    <div class="order-main">
                                        <a href="product.php" class="order-main-name">Áo phông xanh </a>
                                        <div class="order-main-price">210,000 ₫</div>
                                    </div>
                                    <a href="product.php" class="order-close"><i class="far fa-times-circle"></i></a>
                                </div>
                            </li>
                        </ul>
                        <div class="total-money">Tổng cộng: 135.000đ</div>
                        <a href="cart.php" class="btn btn--default cart-btn">Xem giỏ hàng</a>
                        <a href="pay.php" class="btn btn--default cart-btn orange">Thanh toán</a>
                        <!-- norcart -->
                        <!-- <img class="header__cart-img-nocart" src="http://www.giaybinhduong.com/images/empty-cart.JPG" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="header__nav">
            <ul class="header__nav-list">
                <li class="header__nav-item nav__search">
                    <div class="nav__search-wrap">
                        <input class="nav__search-input" type="text" name="" id="" placeholder="Tìm sản phẩm...">
                    </div>
                    <div class="nav__search-btn">
                        <i class="fas fa-search"></i>
                    </div>
                </li>
                <li class="header__nav-item authen-form">
                    <a href="#" class="header__nav-link">Tài Khoản</a>
                    <ul class="sub-nav">
                        <li class="sub-nav__item">
                            <a href="#my-Login" class="sub-nav__link">Đăng Nhập</a>
                        </li>
                        <li class="sub-nav__item">
                            <a href="#my-Register" class="sub-nav__link">Đăng Kí</a>
                        </li>
                    </ul>
                </li>
                <li class="header__nav-item index">
                    <a href="index.php" class="header__nav-link">Trang chủ</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">Giới Thiệu</a>
                </li>
                <li class="header__nav-item">
                    <a href="#" class="header__nav-link">Sản Phẩm</a>
                    <div class="sub-nav-wrap grid wide">
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                        <ul class="sub-nav">
                            <li class="sub-nav__item">
                                <a href="" class="sub-nav__link heading">Thời trang</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Áo khoác mùa đông</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Quần bò</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Sửa rửa mặt </a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Đồng hồ đeo tay</a>
                            </li>
                            <li class="sub-nav__item">
                                <a href="listProduct.php" class="sub-nav__link">Mũ thời trang</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="header__nav-item">
                    <a href="news.php" class="header__nav-link">Tin Tức</a>
                </li>
                <li class="header__nav-item">
                    <a href="contact.php" class="header__nav-link">Liên Hệ</a>
                </li>
            </ul>
        </div>
    </div>




    <div class="main">
        <div class="grid wide">
            <div class="productInfo">
                <div class="row">
                    <div class="col l-5 m-12 s-12">
                        <div class="owl-carousel owl-theme" id="sync1">
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide1.JPG)">
                                </div>
                            </a>
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide2.JPG)">
                                </div>
                            </a>
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide3.JPG)">
                                </div>
                            </a>
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide4.JPG)">
                                </div>
                            </a>
                        </div>
                        <div class="owl-carousel owl-theme" id="sync2">
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide5.JPG)">
                                </div>
                            </a>
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide6.JPG)">
                                </div>
                            </a>
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide7.JPG)">
                                </div>
                            </a>
                            <a href="#" class="product">
                                <div class="product__avt" style="background-image: url(assets/img/product/Slide8.JPG)">
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="col l-7 m-12s s-12 pl">
                        <div class="main__breadcrumb">
                            <div class="breadcrumb__item">
                                <a href="#" class="breadcrumb__link">Trang chủ</a>
                            </div>
                            <div class="breadcrumb__item">
                                <a href="#" class="breadcrumb__link">Cửa hàng</a>
                            </div>
                            <div class="breadcrumb__item">
                                <a href="#" class="breadcrumb__link">Sản phẩm</a>
                            </div>
                        </div>
                        <h3 class="productInfo__name">
                            Nhất Phát Shop
                        </h3>
                        <div class="productInfo__price">
                            330.000 <span class="priceInfo__unit">đ</span>
                        </div>
                        <div class="productInfo__description">
                            <span> Phong cách thời trang Smart Casual </span> chính là sự kết hợp thông minh (smart) trong những trang phục cơ bản thường ngày (casual) hướng đến sự chỉn chu nhưng vẫn thoải mái. Phong cách này không có sự giới hạn trong việc lựa chọn items để phối cho mình set đồ thích hợp nhất.
                        </div>

                        <div class="productInfo__addToCart">
                            <div class="buttons_added">
                                <input class="minus is-form" type="button" value="-" onclick="minusProduct()">
                                <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1">
                                <input class="plus is-form" type="button" value="+" onclick="plusProduct()">
                            </div>
                            <div class=" btn btn--default orange ">Thêm vào giỏ</div>
                        </div>
                        <div class="productIndfo__policy ">
                            <div class="policy bg-1 ">
                                <img src="./assets/img/policy/policy1.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                            <div class="policy bg-2 ">
                                <img src="./assets/img/policy/policy2.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                            <div class="policy bg-1 ">
                                <img src="./assets/img/policy/policy3.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                            <div class="policy bg-2 ">
                                <img src="./assets/img/policy/policy4.png " class="productIndfo__policy-img "></img>
                                <div class="productIndfo__policy-info ">
                                    <h3 class="productIndfo__policy-title ">Giao hàng miễn phí</h3>
                                    <p class="productIndfo__policy-description ">Cho đơn hàng từ 300K</p>
                                </div>
                            </div>
                        </div>
                        <div class="productIndfo__category ">
                            <p class="productIndfo__category-text"> Danh mục : <a href="# " class="productIndfo__category-link ">Thời trang nam</a></p>
                            <p class="productIndfo__category-text"> Hãng : <a href="# " class="productIndfo__category-link ">Nhất Phát Shop</a></p>
                            <p class="productIndfo__category-text"> Số lượng đã bán : 322</p>
                            <p class="productIndfo__category-text"> Số lượng trong kho :472</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="productDetail ">
                <div class="main__tabnine ">
                    <div class="grid wide ">
                        <!-- Tab items -->
                        <div class="tabs ">
                            <div class="tab-item active ">
                                Mô tả
                            </div>
                            <div class="tab-item ">
                                Đánh giá
                            </div>
                            <div class="line "></div>
                        </div>
                        <!-- Tab content -->
                        <div class="tab-content ">
                            <div class="tab-pane active ">
                                <div class="productDes ">
                                    <div class="productDes__title ">ÁO KHOÁC LÔNG CỪU LÀ GÌ</div>
                                    <p class="productDes__text "> <a href="# " class="productDes__link ">ÁO KHOÁC LÔNG CỪU LÀ GÌ </a> Thông tin mô tả ÁO KHOÁC LÔNG CỪU
                                        Áo khoác lông da cừu  là sản phẩm cao cấp mới nhất đến từ bộ sưu tập Ask Me Anything (AMA 2022) của thương hiệu Davinet. Phiên bản đặc biệt dành cho mùa Đông 2022 sử dụng lót lông cừu cao cấp cùng viền cổ lông sói Bắc Âu nổi bật giúp giữ ấm tuyệt đối đi cùng chất liệu da cừu Tarmi nhập khẩu mềm mại. Ngôn ngữ thiết kế cổ điển, phá cách bằng những đường Parabol giúp tôn dáng, tăng sự quyến rũ cho phái mạnh mang tính biểu tượng của Davinet vẫn được khai thác tối đa với dòng sản phẩm áo khoác Cừu.
                                    </p>
                                    <div class="productDes__title ">ÁO KHOÁC LÔNG CỪU LÀ GÌ</div>
                                    <p class="productDes__text "> <a href="# " class="productDes__link ">ÁO KHOÁC LÔNG CỪU LÀ GÌ </a> Thông tin mô tả ÁO KHOÁC LÔNG CỪU
                                        Áo khoác lông da cừu  là sản phẩm cao cấp mới nhất đến từ bộ sưu tập Ask Me Anything (AMA 2022) của thương hiệu Davinet. Phiên bản đặc biệt dành cho mùa Đông 2022 sử dụng lót lông cừu cao cấp cùng viền cổ lông sói Bắc Âu nổi bật giúp giữ ấm tuyệt đối đi cùng chất liệu da cừu Tarmi nhập khẩu mềm mại. Ngôn ngữ thiết kế cổ điển, phá cách bằng những đường Parabol giúp tôn dáng, tăng sự quyến rũ cho phái mạnh mang tính biểu tượng của Davinet vẫn được khai thác tối đa với dòng sản phẩm áo khoác Cừu.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane ">
                                <div class="productDes__ratting ">
                                    <div class="productDes__ratting-title ">Đánh giá của bạn</div>
                                    <div class="productDes__ratting-wrap">
                                        <div id="rating">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>

                                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>

                                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label class="full" for="star3" title="Meh - 3 stars"></label>

                                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>

                                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>

                                            <input type="radio" id="starhalf" name="rating" value="half" />
                                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                        </div>
                                        <textarea class="ratecomment" name=" " id=" " cols="30 " rows="1" placeholder="Vui lòng viết đánh giá của bạn "></textarea>
                                    </div>
                                    <input type="submit " class="btn btn--default" value="Đánh giá">
                                </div>
                                <ul class="rate__list">
                                    <li class="rate__item">
                                        <div class="rate__info">
                                            <img src="https://lh3.googleusercontent.com/ogw/ADGmqu9PFgn_rHIm9i3eIlVr5RwzwY2w8EystHF213wj=s32-c-mo" alt="">
                                            <h3 class="rate__user">Nguyễn Kế Lương</h3>
                                            <div class="rate__star">
                                                <div class="group-star">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rate__comment">Sản phẩm chất lượng rất tốt thật tuyệt vời</div>
                                    </li>
                                    <li class="rate__item">
                                        <div class="rate__info">
                                            <img src="https://lh3.googleusercontent.com/ogw/ADGmqu9PFgn_rHIm9i3eIlVr5RwzwY2w8EystHF213wj=s32-c-mo" alt="">
                                            <h3 class="rate__user">Triệu Huy Mạnh</h3>
                                            <div class="rate__star">

                                            </div>
                                        </div>
                                        <div class="rate__comment">Sản phẩm chất lượng rất tốt 10d</div>
                                    </li>
                                    <li class="rate__item">
                                        <div class="rate__info">
                                            <img src="https://lh3.googleusercontent.com/ogw/ADGmqu9PFgn_rHIm9i3eIlVr5RwzwY2w8EystHF213wj=s32-c-mo" alt="">
                                            <h3 class="rate__user">Nguyễn Thế Phát</h3>
                                            <div class="rate__star">

                                            </div>
                                        </div>
                                        <div class="rate__comment">Giao Hàng ngon đấy</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__frame ">
                <div class="grid wide ">
                    <h3 class="category__title ">Nhất Phát Men's fashion</h3>
                    <h3 class="category__heading ">Sản Phẩm Tương tự</h3>
                    <div class="owl-carousel hight owl-theme ">
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide5.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide6.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide7.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide8.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide9.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide10.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide11.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide12.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide13.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide14.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                        <a href="# " class="product ">
                            <div class="product__avt " style="background-image: url(assets/img/product/Slide15.JPG) ">
                            </div>
                            <div class="product__info ">
                                <h3 class="product__name ">Framed-Sleeve Tops Group</h3>
                                <div class="product__price ">
                                    <div class="price__old ">340.000 <span class="price__unit ">đ</span></div>
                                    <div class="price__new ">320.000 <span class="price__unit ">đ</span></div>
                                </div>
                            </div>
                            <div class="product__sale ">
                                <span class="product__sale-percent ">22%</span>
                                <span class="product__sale-text ">Giảm</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="grid wide">
            <div class="row">
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Menu</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="#" class="footer__link">Thời trang</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Phụ kiện </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">dày dép</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">quần áo</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link"> Sữa rửa mặt </a>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Hỗ trợ khách hàng</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="#" class="footer__link">Hướng dẫn mua hàng</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Giải đáp thắc mắc</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Chính sách mua hàng</a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">Chính sách đổi trả</a>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Liên hệ</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">
                                    <i class="fas fa-map-marked-alt"></i> Đường Z 115
                                    Xã Quyết Thắng, Thành Phố Thái Nguyên, Thái Nguyên
                                </span>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-phone"></i> 0333588937
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-envelope"></i> NguyenKeLuong@gmail.com
                            </a>
                        </li>
                        <li class="footer__item">
                            <div class="social-group">
                                <a href="#" class="social-item"><i class="fab fa-facebook-f"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-twitter"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-pinterest-p"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-invision"></i>
                                    </a>
                                <a href="#" class="social-item"><i class="fab fa-youtube"></i>  
                                    </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Đăng kí</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">Đăng ký để nhận được được thông tin ưu đãi mới nhất từ chúng tôi.</span>
                        </li>
                        <li class="footer__item">
                            <div class="send-email">
                                <input class="send-email__input" type="email" placeholder="Nhập Email...">
                                <a href="#" class="send-email__link">
                                    <i class="fas fa-paper-plane"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span class="footer__text"> &copy Bản quyền thuộc về <a class="footer__link" href="#"> Nguyễn Kế Lương</a></span>
        </div>
    </div>
    <!-- Modal Form -->
    <div class="ModalForm ">
        <div class="modal " id="my-Register ">
            <a href="# " class="overlay-close "></a>
            <div class="authen-modal register ">
                <h3 class="authen-modal__title ">Đăng Kí</h3>
                <div class="form-group ">
                    <label for="account " class="form-label ">Họ Tên</label>
                    <input id="account " name="account " type="text " class="form-control ">
                    <span class="form-message ">Không hợp lệ !</span>
                </div>
                <div class="form-group ">
                    <label for="password " class="form-label ">Tài khoản Email *</label>
                    <input id="password " name="password " type="text " class="form-control ">
                    <span class="form-message "></span>
                </div>
                <div class="form-group ">
                    <label for="password " class="form-label ">Mật khẩu *</label>
                    <input id="password " name="password " type="text " class="form-control ">
                    <span class="form-message "></span>
                </div>
                <div class="form-group ">
                    <label for="password " class="form-label ">Nhập lại mật khẩu *</label>
                    <input id="password " name="password " type="text " class="form-control ">
                    <span class="form-message "></span>
                </div>
                <div class="authen__btns ">
                    <div class="btn btn--default ">Đăng Kí</div>
                </div>
            </div>
        </div>
        <div class=" modal " id="my-Login ">
            <a href="# " class="overlay-close "></a>
            <div class="authen-modal login ">
                <h3 class="authen-modal__title ">Đăng Nhập</h3>
                <div class="form-group ">
                    <label for="account " class="form-label ">Địa chỉ email *</label>
                    <input id="account " name="account " type="text " class="form-control ">
                    <span class="form-message ">Tài khoản không chính xác !</span>
                </div>
                <div class="form-group ">
                    <label for="password " class="form-label ">Mật khẩu *</label>
                    <input id="password " name="password " type="text" class="form-control ">
                    <span class="form-message "></span>
                </div>
                <div class="authen__btns ">
                    <div class="btn btn--default ">Đăng Nhập</div>
                    <input type="checkbox " class="authen-checkbox ">
                    <label class="form-label ">Ghi nhớ mật khẩu</label>
                </div>
                <a class="authen__link ">Quên mật khẩu ?</a>
            </div>
        </div>
        <div class="up-top " id="upTop " onclick="goToTop() ">
            <i class="fas fa-chevron-up "></i>
        </div>

    </div>
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
    <!-- Modal Form -->
    <div class="ModalForm">
        <div class="modal" id="my-Register">
            <a href="#" class="overlay-close"></a>
            <div class="authen-modal register">
                <h3 class="authen-modal__title">Đăng Kí</h3>
                <div class="form-group">
                    <label for="account" class="form-label">Họ Tên</label>
                    <input id="account" name="account" type="text" class="form-control">
                    <!-- <span class="form-message">Không hợp lệ !</span> -->
                    <p>.</p>
                </div>
                <div class="form-group">
                    <label for="account" class="form-label">Tài khoản Email *</label>
                    <input id="account" name="account" type="text" class="form-control">
                    <span class="form-message"></span>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu *</label>
                    <input id="password" name="password" type="password" class="form-control">
                    <!-- <span class="form-message"></span> -->
                    <p>.</p>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Nhập lại mật khẩu *</label>
                    <input id="password" name="password" type="text" class="form-control">
                    <!-- <span class="form-message"></span> -->
                    <p>.</p>
                </div>
                <div class="authen__btns">
                    <div class="btn btn--default">Đăng Kí</div>
                </div>
            </div>
        </div>
        <div class=" modal" id="my-Login">
            <a href="#" class="overlay-close"></a>
            <form action="" method="post">
            <div class="authen-modal login">
                <h3 class="authen-modal__title">Đăng Nhập</h3>
                <div class="form-group">
                    <label for="account" class="form-label">Địa chỉ email *</label>
                    <br>
                    <input id="account" name="accountlogin" type="text" class="form-control">
                    <!-- <span class="form-message">Tài khoản không chính xác !</span> -->
                    <a>.</a>
                    
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Mật khẩu *</label>
                    <input id="password" name="passwordlogin" type="password" class="form-control">
                    <span class="form-message"></span>
                </div>
                <div class="authen__btns">
                    <div class="btn btn--default" onclick="checklogin()">Đăng Nhập</div>
                    <input type="checkbox" class="authen-checkbox">
                    <label class="form-label">Ghi nhớ mật khẩu</label>
                </div>
                <a class="authen__link">Quên mật khẩu ?</a>
            </div>
            </form>
        </div>
        <div class="up-top" id="upTop" onclick="goToTop()">
            <i class="fas fa-chevron-up"></i>
        </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "105913298384666");
        chatbox.setAttribute("attribution", "biz_inbox");
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
        $(document).ready(function() {
            var sync1 = $("#sync1 ");
            var sync2 = $("#sync2 ");
            var slidesPerPage = 4;
            var syncedSecondary = true;
            sync1.owlCarousel({
                items: 1,
                loop: true,
                margin: 20,
                nav: true,
                dots: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true
            })
            sync2
                .on('initialized.owl.carousel', function() {
                    sync2.find(".owl-item ").eq(0).addClass("current ");
                })
                .owlCarousel({
                    items: 4,
                    dots: false,
                    nav: false,
                    margin: 30,
                    smartSpeed: 200,
                    slideSpeed: 500,
                    slideBy: 4,
                    responsiveRefreshRate: 100
                }).on('changed.owl.carousel', syncPosition2);

            function syncPosition(el) {
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - (el.item.count / 2) - .5);

                if (current < 0) {
                    current = count;
                }
                if (current > count)  {
                    current = 0;
                }

                //end block

                sync2
                    .find(".owl-item ")
                    .removeClass("current ")
                    .eq(current)
                    .addClass("current ");
                var onscreen = sync2.find('.owl-item.active').length - 1;
                var start = sync2.find('.owl-item.active').first().index();
                var end = sync2.find('.owl-item.active').last().index();

                if (current > end) {
                    sync2.data('owl.carousel').to(current, 100, true);
                }
                if (current < start) {
                    sync2.data('owl.carousel').to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    sync1.data('owl.carousel').to(number, 100, true);
                }
            }

            sync2.on("click ", ".owl-item ", function(e) {
                e.preventDefault();
                var number = $(this).index();
                sync1.data('owl.carousel').to(number, 300, true);
            });
        });

        $('.owl-carousel.hight').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>

    <!-- Script common -->
    <script src="./assets/js/commonscript.js ">
    </script>
    <script>
        function calcRate(r) {
            const f = ~~r, //Tương tự Math.floor(r)
                id = 'star' + f + (r % f ? 'half' : '')
            id && (document.getElementById(id).checked = !0)
        }
    </script>
</body>

</html>