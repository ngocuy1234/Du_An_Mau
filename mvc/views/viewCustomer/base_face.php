<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../public/css/base.css">
    <link rel="stylesheet" href="./../public/css/header_commom.css">
    <?php echo "<link rel='stylesheet' href='./../public/css/".$data['from'].".css'>" ?>
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
                    <li class="header__main-item"><a href="./../Home/">Trang chủ</a></li>
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
                    <li class="header__main-fucntion-item"><a href="http://localhost/MVC/registerCustomer/"><i class="fas fa-user"></i></a></li>
                    <li class="header__main-fucntion-item"><a href="./../Cart/"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>
        </header>
        <?php echo require_once "./mvc/views/viewCustomer/page/".$data['from'].".php"; ?>
        <!-- FOOTER -->
        <footer class="footer">
            <div class="section__footer">
                <div class="section__footer-bag">
                    <label class="section__footer-label" for="">Theo dõi bản tin của chúng tôi</label>
                    <form action="" class="section__footer-form">
                        <input class="section__footer-form-input" type="text" placeholder="Địa chỉ email">
                        <button class="section__footer-form-submit">Đăng ký</button>
                    </form>
                </div>
            </div>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function () {
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