<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <!-- Layout -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <!-- index -->
    <link rel="stylesheet" type="text/css" href="./assets/css/product.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/productSale.css">

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

    <div class="main">
        <div class="grid wide">
            <div class="main__taskbar">
                <div class="main__breadcrumb">
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Trang chủ</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Cửa hàng</a>
                    </div>
                    <div class="breadcrumb__item">
                        <a href="#" class="breadcrumb__link">Hãng DHC</a>
                    </div>
                </div>
                <div class="main__sort">
                    <h3 class="sort__title">
                        Hiển thị kết quả theo
                    </h3>
                    <select class="sort__select"> name="" id="">
                        <option value="1">Thứ tự mặc định</option>
                        <option value="2">Mức độ phổ biến</option>
                        <option value="3">Điểm đánh giá</option>
                        <option value="4">Mới cập nhật</option>
                        <option value="5">Giá : Cao đến thấp</option>
                        <option value="6">Giá Thấp đến cao</option>
                    </select>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane active">
                    <div class="row">
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide2.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo khoác mùa đông cho nam</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide3.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo Khoác đen</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            390.000 đ
                                        </div>
                                        <div class="price__new">260.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">20%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide4.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo khoác lông cừu</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            195.000 đ
                                        </div>
                                        <div class="price__new">110.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">32%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide5.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo da</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            350.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">44%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide7.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo phông nam</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            310.000 đ
                                        </div>
                                        <div class="price__new">170.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">65%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide8.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">áo ngắn tay</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            590.000 đ
                                        </div>
                                        <div class="price__new">340.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">44%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide9.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo thể thao</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            400.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">34%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide10.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo phông đỏ</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide13.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">áo đi biển</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide15.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">áo gucci</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide18.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">áo khoác túi</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                        <div class="col l-2 m-4 s-6">
                            <div class="product">
                                <div class="product__avt" style="background-image: url(./assets/img/product/Slide16.JPG);">
                                </div>
                                <div class="product__info">
                                    <h3 class="product__name">Áo khoác có mũ</h3>
                                    <div class="product__price">
                                        <div class="price__old">
                                            300.000 đ
                                        </div>
                                        <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                    </div>
                                    <div class="product__sale">
                                        <span class="product__sale-percent">24%</span>
                                        <span class="product__sale-text">Giảm</span>
                                    </div>
                                </div>
                                <a href="product.php" class="viewDetail">Xem chi tiết</a>
                                <a href="cart.html" class="addToCart">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>


                
                <div class="pagination">
                    <ul class="pagination__list">
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination__item active">
                            <a href="listFilm.html" class="pagination__link">1</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">2</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">3</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">4</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">5</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">...</a>
                        </li>
                        <li class="pagination__item active">
                            <a href="listFilm.html" class="pagination__link">14</a>
                        </li>
                        <li class="pagination__item">
                            <a href="listFilm.html" class="pagination__link">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
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

    </div>
    <!-- Script common -->
    <script src="./assets/js/commonscript.js"></script>
</body>

</html>