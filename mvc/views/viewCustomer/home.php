<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../public/css/base.css">
    <link rel="stylesheet" href="./../public/css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container_fluid">
        <header class="header">
            <div class="header__top">
                <ul class="header__top-contact">
                    <li class="header__top-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <a class="header__top-contact-item-link" href="">18006226</a>
                    </li>
                    <li class="header__top-contact-item">
                        <i class="fas fa-envelope"></i>
                        <a class="header__top-contact-item-link" href="">Hỗ trợ</a>
                    </li>
                </ul>
                <!--  -->
                <a href=""><img class="header__top-img" style="margin-left: 60px;" src="./../public/assets/img/logo.png" alt=""></a>
                <ul class="header__top-fucntion">
                    <li class="header__top-fucntion-item"><a href=""><i class="fas fa-search"></i></a></li>
                    <li class="header__top-fucntion-item"><a href="http://localhost/MVC/registerCustomer/"><i class="fas fa-user"></i></a></li>
                    <li class="header__top-fucntion-item"><a href="./../Cart/"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <!--  -->
            <div class="header__main">
                <ul class="header__main-contact">
                    <li class="header__main-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <a class="header__main-contact-item-link" href="">18006226</a>
                    </li>
                    <li class="header__main-contact-item">
                        <i class="fas fa-envelope"></i>
                        <a class="header__main-contact-item-link" href="">Hỗ trợ</a>
                    </li>
                </ul>
                <!--  -->
                <ul class="header_main-list">
                    <li class="header__main-item"><a href="">Trang chủ</a></li>
                    <li class="header__main-item"><a href="./../Product/pages/1">Sản Phẩm</a></li>
                    <li class="header__main-item"><a href="./../Collection/">Bộ sưu tập</a></li>
                    <a href=""><img class="header__main-img" src="./../public/assets/img/logo-typo (1).png" alt=""></a>
                    <li class="header__main-item"><a href="./../loginAdmin/">Admin</a></li>
                    <li class="header__main-item"><a href="./../pageList/">Tin Tức</a></li>
                    <li class="header__main-item"><a href="./../Contact/">Liên Hệ</a></li>
                </ul>
                <!--  -->
                <ul class="header__main-fucntion">
                    <li class="header__main-fucntion-item"><a href=""><i class="fas fa-search"></i></a></li>
                    <li class="header__main-fucntion-item"><a 
                            href="http://localhost/MVC/registerCustomer/"><i class="fas fa-user"></i></a></li>
                    <li class="header__main-fucntion-item"><a href="./../Cart/"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </header>
        <!-- BANNER -->
        <div id="carouselExampleIndicators" class="carousel slide banner" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./../public/assets/img/banner-web-9-9-1-min.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./../public/assets/img/aristino-banner-amazing-wonder.jpg" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- CONTENT -->
        <div class="content">
            <main>
                <section class="section__header">
                    <ul class="category__product-list">
                        <li class="category__product-list-item"><a href="">Áo</a></li>
                        <li class="category__product-list-item"><a href="">Quần</a></li>
                        <li class="category__product-list-item"><a href="">Đồ lót</a></li>
                        <li class="category__product-list-item"><a href="">Compo</a></li>
                        <li class="category__product-list-item"><a href="">Phụ Kiện</a></li>
                        <li class="category__product-list-item"><a href="">Kidman</a></li>
                        <li class="category__product-list-item"><a href="">Hàng Khuyến mại</a></li>
                    </ul>
                </section>
                <section class="section__product product__bag">
                    <a href=""><img src="./../public/assets/img/2_Website Layout_350x493_01-min.jpg" alt=""
                            class="section__product-item"></a>
                    <a href=""><img src="./../public/assets/img/2_Website Layout_350x493_02-min.jpg" alt=""
                            class="section__product-item"></a>
                </section>
                <section class="banner__sub">
                    <img src="./../public/assets/img/3_Website Layout_1903x982-min.jpg" alt="" class="img_banner-sub">
                </section>
                <section class="section__product">
                    <div class="product__bag">
                        <a href=""><img src="./../public/assets/img/4_Website Layout_350x490_01-min.jpg" alt=""
                                class="section__product-item"></a>
                        <a href=""><img src="./../public/assets/img/4_Website Layout_350x490_02-min.jpg" alt=""
                                class="section__product-item"></a>
                    </div>
                    <div class="product__bag">
                        <a href=""><img src="./../public/assets/img/4_Website Layout_350x490_03-min.jpg" alt=""
                                class="section__product-item"></a>
                        <a href=""><img src="./../public/assets/img/4_Website Layout_350x490_04-min.jpg" alt=""
                                class="section__product-item"></a>
                    </div>
                </section>
                <section class="banner__sub">
                    <img src="./../public/assets/img/5_Website Layout_1903x915_01-min.jpg" alt=""
                        class="img_banner-sub">
                </section>
                <section class="banner__sub">
                    <img src="./../public/assets/img/5_Website Layout_1903x915_02-min.jpg" alt=""
                        class="img_banner-sub">
                </section>
                <section class="banner__sub">
                    <img src="./../public/assets/img/6_Website Layout_1903x805-min.jpg" alt="" class="img_banner-sub">
                </section>
                <section class="banner__sub-end">
                    <img src="./../public/assets/img/7_Website Layout_1903x808-min.jpg" alt="" class="img_banner-sub">
                </section>
                <section class="section__footer">
                    <div class="section__footer-bag">
                        <label class="section__footer-label" for="">Theo dõi bản tin của chúng tôi</label>
                        <form action="" class="section__footer-form">
                            <input class="section__footer-form-input" type="text" placeholder="Địa chỉ email">
                            <button class="section__footer-form-submit">Đăng ký</button>
                        </form>
                    </div>
                </section>
            </main>
        </div>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="footer__bag">
                <div class="footer__contact">
                    <h4 class="footer__contact-title">Về chúng tôi</h4>
                    <ul class="footer__contact-list">
                        <li class="footer__contact-item"><a href="">Câu chuyện thương hiệu</a></li>
                        <li class="footer__contact-item"><a href="">Tin tức</a></li>
                        <li class="footer__contact-item"><a href="">Đôi cánh yêu thương</a></li>
                        <li class="footer__contact-item"><a href="">Liên Hệ</a></li>
                    </ul>
                </div>
                <!--  -->
                <div class="footer__contact">
                    <h4 class="footer__contact-title">Chính sách bán hàng</h4>
                    <ul class="footer__contact-list">
                        <li class="footer__contact-item"><a href="">Chính sách đổi hàng</a></li>
                        <li class="footer__contact-item"><a href="">Chính sách bảo hành</a></li>
                        <li class="footer__contact-item"><a href="">Chính sách hội viên</a></li>
                        <li class="footer__contact-item"><a href="">Chính sách giao nhận</a></li>
                        <li class="footer__contact-item"><a href="">Hưỡng dẫn mua hàng</a></li>
                    </ul>
                </div>
                <!--  -->
                <div class="footer__contact">
                    <h4 class="footer__contact-title">Tư vẫn</h4>
                    <ul class="footer__contact-list">
                        <li class="footer__contact-item"><a href="">Tư vẫn phong cách</a></li>
                        <li class="footer__contact-item"><a href="">Tư vẫn chọn size</a></li>
                        <li class="footer__contact-item"><a href="">Hồi đáp</a></li>
                    </ul>
                </div>
                <div class="footer__contact">
                    <h4 class="footer__contact-title">Kết lỗi với chúng tôi</h4>
                    <ul class="footer__contact-icon-list">
                        <li class="footer__contact-icon-item"><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        <li class="footer__contact-icon-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li class="footer__contact-icon-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li class="footer__contact-icon-item"><a href=""><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <a href=""><img src="./../public/assets/img/dathongbao.png" alt="" class="footer__contact-img"></a>
                </div>
            </div>
            <div class="footer__link">
                <p>Copyright © 2020 ARISTINO. All Rights Reserved</p>
            </div>
        </footer>
        <style>
            #backTop {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    background-color: #000;
    color: #ffff;
    font-size: 1.2rem;
    align-items: center;
    position: fixed;
    bottom: 40px;
    right: 20px;
    border-radius: 50px;
    cursor: pointer;
}
        </style>
        <div id="backTop">
        <i class="fas fa-arrow-up"></i>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop()) {
                    $('header').addClass('header__sub');
                } else {
                    $('header').removeClass('header__sub');
                }
            });

            $(window).scroll(function () {
               if ($(this).scrollTop()) {
                  $('#backTop').fadeIn();
                } else {
                  $('#backTop').fadeOut();
                }
            });
            $("#backTop").click(function () {
               $('html , body').animate({
                scrollTop: 0
             }, 200);
            });
        });
    </script>
</body>

</html>