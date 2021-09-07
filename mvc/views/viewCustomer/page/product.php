<?php
// require_once "./mvc/views/viewCustomer/base_face.php"; 
// dd($data['dataProduct']);
?>
        <style>
            .section__header-filter{
                cursor: pointer;
            }

            .input_product:checked~.over__lay{
                display: block;
            }

            .input_product:checked~.cate_product-bag{
                /* display: block; */
                transform: translateX(0%);
                /* transition: all ease-in-out 0.5s; */
                opacity: 1;
            }

            .over__lay{
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0, 0, 0, 0.3);
                display: none;
                animation: fadeIn linear 0.3s;
            }

            .cate_product-bag{
                position: fixed;
                width: 350px;
                top: 50px;
                left: 0;
                bottom: 0;
                background-color: #ffff;
                /* display: none; */
                transform: translateX(-100%);
                transition: all linear 0.4s;
                opacity: 0;
            }

            @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
            }

            .cate_product-title{
                font-size: 1.2rem;
                padding: 50px 0px 0px 50px;
                padding-bottom: -20px;
            }

            .cate_product-list{
                list-style-type: none;
                padding: 10px 50px;
            }

            .cate_product-item{
                padding: 10px 0px;
            }

            .cate_product-item i{
                padding-right: 10px;
                font-size: 0.8rem;
            }

            .close__cate{
                float: right;
                padding: 15px 20px;
                font-size: 1.3rem;
                cursor: pointer;
            }

            .cate_product-item a{
                text-decoration: none;
                color: #000;
            }

            .logo__cate{
                background-color: #000;
                text-align: center;
                width: 100%;
                position: fixed;
                bottom: 0;
            }

            .logo__cate-img-on{
                width: 100px;
            }

            .logo__cate-img{
                width: 250px;
            }

            .img__cate-bag{
                padding: 20px;
            }
            
        </style>
        <div class="content">
            <header class="section__header">
                <div class="section__header-bag">
                    <label class="section__header-filter" for="input_check">
                        <i class="fas fa-chevron-right"></i>
                        Lọc sản phẩm
                    </label>
                    <input class="input_product" hidden type="checkbox" id="input_check">
                    <!-- <h1>Nguyễn Ngọc Uy</h1> -->

                    <label for="input_check" class="over__lay">
                    </label>

                    <div class="cate_product-bag">
                    <label for="input_check" class="close__cate">
                         <i class="fas fa-times"></i>   
                    </label>
                    <h4 class="cate_product-title">Danh mục sản phẩm</h4>
                    <ul class="cate_product-list">
                        <?php foreach($data['dataCate'] as $key){ ?>
                        <li class="cate_product-item"><i class="fas fa-chevron-right"></i> <a href="http://localhost/MVC/Product/cateProduct/<?=$key['cate_name_slug']?>"><?=$key['cate_name']?></a> </li>
                        <?php } ?>
                    </ul>
                    <div class="logo__cate">
                       <div class="img__cate-bag">
                       <a href=""><img class="logo__cate-img-on" src="./../../public/assets/img/logo.png" alt=""></a>
                        <a href=""><img class="logo__cate-img" src="./../../public/assets/img/logo-typo (1).png" alt=""></a>
                       </div>
                    </div>
                    </div>
                    <!-- ---- -->
                    <ul class="section__header-list-product">
                        <li class="section__header-list-item"><a href="">aristino.com </a>/</li>
                        <li class="section__header-list-item"><a href=""> Áo </a>/</li>
                        <li class="section__header-list-item"><a href=""> Áo sơ mi</a></li>
                    </ul>
                    <select class="section__header-select">
                        <option selected>Mới nhất</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <p class="section__header-addess">24 trong 518 sản phẩm | Trang 1</p>
                </div>
            </header>
            <!-- - -->

            <section class="container">
                <div class="product_bag" style="padding-top:70px">
                <div class="row">
                    <?php
                        foreach($data['dataProduct'] as $key){
                           echo '<div class="col-md-3 col-6 product" style="margin-bottom:30px;">
                           <a href="../productDetail/'.$key['product_id'].'">
                           <img src="./../../public/assets/imgProduct/'.$key['product_img'].'" 
                           alt="" style="width:100%"></a>
                           <a style="text-decoration: none;color:#000" href=""><h6 class="text-center" style="margin:15px 0px;">'.$key['product_name'].'</h6>
                           </a>
                                <h5 class="text-center" style="color:#8E0007">'.number_format($key['product_price']).' VND'.'</h5>
                            </div>';
                        }
                    ?>
                </div>
                </div>
            </section>
            <style>
                .btn__more-product{
                    text-decoration: none;
                    padding: 10px;
                    color: #000;
                    margin: 0px 5px;
                }
            </style>

            <div class="button__bag">
                <?php for($i = 1 ; $i <= $data['pages'] ; $i++){ ?>
                        <a class="btn__more-product" href="http://localhost/MVC/Product/pages/<?=$i?>"><?=$i?></a>
                 <?php } ?>
                        <button class="review__more">Xem thêm</button>
                    </div>
                   
            <!--  -->
        </div>
     