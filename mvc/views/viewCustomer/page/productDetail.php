<?php
    require_once "./mvc/views/viewCustomer/base_face_level2.php"; 
   $dataDetail = $data['dataProductDetail'];
//    dd($dataDetail[0]['product_img']);
// dd($data['dataCustomer'][0]['customer_img']);
?>
        <style>
            .content{
                margin-top: -50px;
            }
        </style>
        <!-- CONTENT -->
        <div class="content container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">aristino.com</a></li>
                    <li class="breadcrumb-item"><a href="#">Áo</a></li>
                    <li class="breadcrumb-item"><a href="#">Áo sơ mi</a></li>
                    <li class="breadcrumb-item"><a href="#">Áo sơ mi ngắn tay</a></li>
                </ol>
            </nav>
            <!-- ---- -->
            <section class="product__infor">
                <div class="product__infor-img-bag">
                    <div class="img__wrap">
                        <img class="product__infor-img" src="./../../public/assets/imgProduct/<?=$dataDetail[0]['product_img']?>"
                            alt="">
                    </div>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="img__bag">
                                    <img class="img__bag" src="./../../public/assets/img/ok1.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/ok2.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/ok4.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/ok5.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/oke6.jpg" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="img__bag">
                                    <img class="img__bag" src="./../../public/assets/img/ok1.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/ok2.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/ok4.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/ok5.jpg" alt="">
                                    <img class="img__bag" src="./../../public/assets/img/oke6.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="product__detail-bag accordion-header">
                    <h2 class="product__detail-name"><?=$dataDetail[0]['product_name']?></h2>
                    <h3 class="product__detail-price"><?=$dataDetail[0]['product_price']?></h3>
                    <a href=""><img src="./../../public/assets/img/icon.jpg" alt="" class="product__detail-icon"></a>
                    <!-- --- -->
                    <div class="product__detail-infor">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Chi tiết sản phẩm
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="infor__list">
                            <div class="infor__list-bag">
                                <p class="infor__list-item">Kiểu dáng : <span> PERFECT FIT</span></p>
                                <p class="infor__list-item">CHI TIẾT:</p>
                                <span>- Tà bằng, họa tiết hoa sen nổi bật tạo
                                    điểm nhấn tinh tế trên áo</span>
                                <p class="infor__list-item">CHẤT LIỆU: <span> 49% MODAL + 49% POLYESTER + 2%
                                        SPANDEX</span></p>
                                <p class="infor__list-item">MÀU SẮC: <span>Trắng in hoa sen</span></p>
                                <p class="infor__list-item">SIZE:<span> 38 - 09 - 40 - 41 - 42 - 43</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="product__detail-infor">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Thêm vào giỏ hàng
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body infor__list-bag">
                                <h3 class="add__product-heading">
                                    Hãy điền đủ thông tin để thêm vào giỏ hàng
                                </h3>
                                <form id="form__add-cart" onsubmit="addCart" action="./../../Cart/addCart/<?=$dataDetail[0]['product_id']?>" method="POST">
                                    <h4 class="form__label">Chọn size của bạn</h4>
                                    <div class="input__bag">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" checked name="product_size"
                                                value="1">
                                            <label class="form-check-label" for="inlineRadio1">Size M</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="product_size" value="2">
                                            <label class="form-check-label" for="inlineRadio2">Size L</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="product_size" value="3">
                                            <label class="form-check-label" for="inlineRadio2">Size XL</label>
                                        </div>
                                    </div>
                                    <div class="input__bag">
                                        <h4 class="form__label">Chọn size chọn số lượng</h4>
                                        <input style="padding-left:10px" type="number" class="form-control text" name="product_number"
                                            id="validationCustom01">
                                    </div>
                                    <input type="submit"  class="btn__add-product" id="btn_add-cart" value="Thêm giỏ hàng">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                var btn_add = document.querySelector('#btn_add-cart');
                var form_add = document.querySelector('#form__add-cart');
                function addCart(e){
                    e.preventDefault();
                    <?php 
                    if(!isset($_SESSION['customer']) || empty($_SESSION['customer'])){ ?>
                    swal({
                       title: "Bạn chưa đăng nhâp !!!",
                       text: "Bạn có đăng nhập không ?",
                       icon: "warning",
                       buttons: true,
                       dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                     window.location="http://localhost/MVC/loginCustomer/";
                    }
                    });
                    <?php }else{ ?>
                        // form_add.onsubmit;
                        // alert('Uy nguyễn');
                        document.getElementById("form__add-cart").onsubmit;
                    <?php } ?>
                };
                
            </script>


            <style>
                .section__cmtt {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 50px;
}

.section__cmtt-import {
    border-right: 1px solid #ccc;
}


.section__cmtt-title {
    padding: 10px 0px;
}

.section__cmtt-infor-img {
    width: 50px;
    height: 50px;
    border-radius: 50px;
}

.section__cmtt-output-item {
    display: flex;
    justify-content: left;
    align-items: center;
}

.img-out {
    margin-bottom: 30px;
}

.cmtt_ready {
    margin-top: -5px;
}

.cmtt_ready a {
    text-decoration: none;
}

.section__cmtt-output-name {
    margin-bottom: -1px;
}

.section__cmtt-output-infor {
    margin-left: 20px;
}

.section__cmtt-infor-input {
    padding-left: 10px;
    height: 40px;
    width: 310px;
    font-size: 1.1rem;
    margin-left: 20px;
}

.btn__cmtt {
    margin: 20px;
    margin-left: 290px;
    background-color: #000;
    color: #ffff;
    font-size: 1.1rem;
    padding: 5px 10px;
}

.section__cmtt-infor {
    display: flex;
    justify-content: left;
    align-items: center;
    margin: 20px 0px;
}

.section__cmtt-infor-message {
    margin-left: 20px;
}
            </style>
            <!-- ---- -->
            <section class="section__cmtt">
                <?php
                if(!empty($data['dataCustomer']) == true){?>
                    <div class="section__cmtt-import">
                    <h5 class="section__cmtt-title">
                        Để lại bình luận của bạn
                    </h5>
                    <h6 style="color:#8E0007">
                    <?php 
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                    </h6>
                    <div class="section__cmtt-infor">
                            <form action="./../productComment/" method="POST">
                                <img class="section__cmtt-infor-img" src="./../../public/assets/imgCustomer/<?=$data['dataCustomer'][0]['customer_img']?>" alt="">
                                <input type="text" hidden name="product_id" value="<?=$dataDetail[0]['product_id']?>">
                                <input type="text" name="content_cmtt" class="section__cmtt-infor-input"
                                    placeholder="Bình luận của bạn về sản phẩm">
                                <br>
                                <button class="btn__cmtt">Bình luận</button>
                            </form>
                     </div>
                </div>
               <?php  }
                 ?>
                <div class="section__cmtt-output">
                    <h5 class="section__cmtt-title">Chi tiết bình luận</h5>
                    <ul class="section__cmtt-output-list">
                    <h6 style="color:#8E0007">
                    <?php 
                    if(isset($_SESSION['error_two'])){
                        echo $_SESSION['error_two'];
                        unset($_SESSION['error_two']);
                    }
                    ?>
                    </h6>
                        <?php foreach($data['dataCmtt'] as $key){ ?>
                        <li class="section__cmtt-output-item">
                            <img class="section__cmtt-infor-img img-out" src="./../../public/assets/imgCustomer/<?=$key['customer_img']?>" alt="">
                            <div class="section__cmtt-output-infor">
                                <h6 class="section__cmtt-output-name">
                                    <?=$key['customer_name']?>
                                </h6>
                                <p class="section__cmtt-output-detail">
                                <?=$key['comment_content']?>
                                </p>
                                <h6 class="cmtt_ready"> <a onclick="return confirm('Bạn muốn xóa bình luận này ?')" href="./../deleteComment/<?=$key['comment_id']?>/<?=$dataDetail[0]['product_id']?>/<?=$data['dataCustomer'][0]['customer_id']?>">Xóa bình luận</a></h6>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <section class="section__product-similar">
                <h3 class="section__product-similar-heading">
                    Sản phẩm cùng loại
                </h3>
                <div class="section__product-similar-img">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="section__product-similar-fist">
                                    <div class="section__product-similar-item">
                                        <a href=""><img src="./../../public/assets/img/ao-so-mi-nam-aristino-ALSR21-05x500x500x4.jpg"
                                                alt=""></a>
                                        <h4 class="section__product-similar-name">Áo sơ mi ngắn tay nam Aristino
                                            ASS208S1</h4>
                                        <h5 class="section__product-similar-price">825.000 đ</h5>
                                    </div>
                                    <div class="section__product-similar-item">
                                        <a href=""><img src="./../../public/assets/img/ao-so-mi-nam-aristino-ALS18601-05x500x500x4.jpg"
                                                alt=""></a>
                                        <h4 class="section__product-similar-name">Áo sơ mi ngắn tay nam Aristino
                                            ASS208S1</h4>
                                        <h5 class="section__product-similar-price">925.000 đ</h5>
                                    </div>
                                    <div class="section__product-similar-item">
                                        <a href=""><img src="./../../public/assets/img/ao-so-mi-nam-aristino-ALS01901-03x500x500x4.jpg"
                                                alt=""></a>
                                        <h4 class="section__product-similar-name">Áo sơ mi nam ngắn tay Aristino
                                            ASS100S9</h4>
                                        <h5 class="section__product-similar-price">650.000 đ</h5>
                                    </div>
                                    <div class="section__product-similar-item">
                                        <a href=""><img src="./../../public/assets/img/ao-so-mi-nam-aristino-ASS205S1-01x500x500x4.jpg"
                                                alt=""></a>
                                        <h4 class="section__product-similar-name">Áo sơ mi nam ngắn tay Aristino
                                            ASS100S9</h4>
                                        <h5 class="section__product-similar-price">800.000 đ</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </section>
        </div>
