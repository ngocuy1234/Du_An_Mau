<div class="login__bg">
    <div class="login__container">
        <div class="login__body">
            <div class="login_title">
                <h3 class="login__main">Đăng Nhập</h3>
                <h4 class="login__login"><a class="login__login-link" href="http://localhost/MVC/registerCustomer/">Đăng
                        Ký</a></h4>
            </div>
            <form action="<?=ACTION_FRONTEND?>/loginCustomer/checkCustomer/" method="POST" class="login__form">
                <div class="input__bag">
                    <input class="login__input" name="customer_email" placeholder="Nhập email của bạn" type="text">
                </div>
                <div class="input__bag">
                    <input class="login__input" name="customer_password" placeholder="Nhập password của bạn"
                        type="password">
                </div>
                <p class="resgister__rules">Hãy đăng nhập đẩy đủ thông tin của bạn để thực hiện các thao tác
                    <span>Thank you !!!</span>
                </p>
                <div class="btn_bag">
                    <a href="http://localhost/MVC/Home/" class="btn__login-link">Trở lại</a>
                    <button class="btn__login">Đăng Nhập</button>
                </div>
                <?php
         if(isset($_SESSION['notifi'])){
         if($_SESSION['notifi']['number'] == 2){  ?>
            <h4 style="color:#E80007;text-align:center;padding-top:20px">
                <?=$_SESSION['notifi']['message']?>
            </h4>
            <?php 
         unset($_SESSION['notifi']);
        }else{ ?>
            <h4 style="color:#10ac84;text-align:center;padding-top:20px">
                <?=$_SESSION['notifi']['message']?>
            </h4>
            <?php
          unset($_SESSION['notifi']);
         }
        }?>
            </form>
        </div>
    </div>
</div>