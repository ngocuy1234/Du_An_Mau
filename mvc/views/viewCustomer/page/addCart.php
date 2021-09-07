<?php
// dd($data['dataCart']);
?>
        <!-- CONTENT -->
        <h4>Uy nguyễn</h4>
        <div class="content">
            <div class="content__nav">
                <ul class="content__nav-list">
                    <li class="content__nav-list-item"><a href="">Giỏ Hàng</a><i class="fas fa-chevron-right"></i></li>
                    <li class="content__nav-list-item"><a href="">Thanh Toán</a>
                        <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="content__nav-list-item"><a href="">Hoàn Tất</a></li>
                </ul>
            </div>
            <?php
                 if($data['dataCart'] != null || isset($data['dataCart'])){ ?>
                  <section class="section__infor-cart">
                    <div class="table_cart">
                        <h4 class="table_cart-title">Giỏ hàng</h4>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Sản phẩm</th>
                                    <th></th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $index = 1;
                                // dd($data['dataCart']);
                                foreach($data['dataCart'] as $key){ ?>
                                <tr>
                                    <td><?=$index++?></td>
                                    <td>
                                        <img width="70px" src="./../public/assets/imgProduct/<?=$key['product_img']?>" alt="">
                                    </td>
                                    <td><?=$key['product_name']?> <br>
                                    <?php if($key['product_size'] == 1){
                                        echo "Size M";
                                    }else if($key['product_size'] == 2){
                                        echo "Size L";
                                    }else{
                                        echo "Size XL";
                                    }
                                    ?>
                                    </td>
                                    <td><?=$key['product_price']?></td>
                                    <td>
                                        <input type="number" style="width:50px" value="<?=$key['product_number']?>">
                                    </td>
                                    <td><?=$key['sum_money']?></td>
                                    <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa sản phẩm này ?')" href="./../Cart/deleteCart/<?=$key['product_id']?>"><i class="fas fa-trash-alt"></i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="btn__table-cart-bag">
                            <button class="btn__table-cart-more"><a href="http://localhost/MVC/Product/pages/1"><i class="fas fa-arrow-left"></i> Mua thêm sản
                                    phẩm</a></button>
                            <button class="btn__table-cart-update"><a href="">Cập nhật sản phẩm</a></button>
                        </div>
                    </div>
                    <div class="cart__money">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Cộng giỏ hàng</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sumMoney = 0;
                                foreach($data['dataCart'] as $key){
                                    $sumMoney += intval($key['sum_money']);
                                }
                                ?>
                                <tr>
                                    <th scope="col">Tạm tính</th>
                                    <td><?=number_format($sumMoney)?></td>
                                </tr>
                                <tr>
                                    <th scope="col">
                                        <h5>Tổng Tiền</h5>
                                        <td><h6><?=number_format($sumMoney)?></h6></td>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn__pay" href="">Tiền hành thanh toán</a>
                    </div>
                </section> 
               <?php  }else{ ?>
                   <h5 style="color:#8E0007;text-align:center">Giỏ hàng của bạn đang trống !!!!</h5>
                   <div class="text-center" style="margin-top:40px">
                   <a class="btn__pay" href="http://localhost/MVC/Product/pages/1">Quay lại cửa hàng <i class="fas fa-shopping-cart"></i></a>
                   </div>
               <?php } ?>
        
        </div>
