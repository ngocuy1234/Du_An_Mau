<div class="register__bg">
        <div class="register__container">
            <div class="register__body">
                <div class="register_title">
                    <h3 class="register__main">Đăng Ký</h3>
                    <h4 class="register__login"><a class="register__login-link" href="http://localhost/MVC/loginCustomer/">Đăng nhập</a></h4>
                </div>
                <form action="<?=ACTION_FRONTEND?>/registerCustomer/addCustomer/" enctype="multipart/form-data" method="POST" class="register__form">
                    <div class="input__bag">
                        <input class="register__input" name="customer_name" placeholder="Nhập tên của bạn" type="text">
                    </div>
                    <div class="input__bag">
                        <span>Ảnh của bạn</span>
                        <input class="register__input-file" name="customer_img" type="file">
                    </div>
                    <div class="input__bag">
                        <input class="register__input" name="customer_email" placeholder="Nhập email của bạn" type="text">
                    </div>
                    <div class="input__bag">
                        <input class="register__input" name="customer_password" placeholder="Nhập mật khẩu" type="password">
                    </div>
                    <div class="input__bag">
                        <select name="customer_gender" class="register__input-select" id="">
                            <option value="">Chọn giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                            <option value="3">Khác</option>
                        </select>
                    </div>
                    <div class="input__bag">
                        <input placeholder="Nhập số điện thoại của bạn" class="register__input" name="customer_phone" type="text">
                    </div>
                    <div class="input__bag">
                        <input placeholder="Nhập địa chỉ của bạn" name="customer_address" class="register__input" type="text">
                    </div>
                    <p class="resgister__rules">Hãy nhập đầy đủ thông tin để chúng tôi cấp tài khoản cho bạn <a
                            href="">Aristio</a>
                    </p>
                    <div class="btn_bag">
                        <a href="http://localhost/MVC/Home/" class="btn__register-link">Trở lại</a>
                        <button class="btn__register">Đăng ký</button>
                    </div>
                </form>
               <h3 style="text-align:center;color:#8E0007">
               <?php
                if(isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                    unset( $_SESSION['error']);
                }
                ?>
               </h3>
            </div>
        </div>
    </div>