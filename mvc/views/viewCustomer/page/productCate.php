<?php
// require_once "./mvc/views/viewCustomer/base_face.php"; 
// dd($data['dataProduct']);
?>
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
        </div>
     