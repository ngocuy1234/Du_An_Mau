<div class="content">
            <div class="container__bag">
                <h5 class="text-center">Hãy đăng nhập để vào trang quản trị</h5>
                <div class="btn_bag text-center" style="padding: 30px;">
                    <button class="btn btn-primary text-center" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Đăng nhập</button>
                    <!--  -->
                </div>
                <!--  -->
               <h6 class="text-center" style="color:#8E0007;">
               <?php
                    if(isset($_SESSION['error'])){
                        echo  $_SESSION['error'];
                        unset($_SESSION['error']);
                     };
                ?>
               </h6>
                <!--  -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Đăng nhập</h5>
                            </div>
                            <div class="modal-body">
                                <form action="<?=ACTION_BACKEND?>loginAdmin/checkStaff/" method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Nhập email" name="staff_email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Nhập password"
                                            name="staff_password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="marque_bag">
                <marquee behavior="alternate" direction="left" class="marq">
                    <img src="./../public/assets/img/ao-so-mi-nam-aristino-ALSR21-05x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/ao-so-mi-nam-aristino-ASS208S1-01x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/ao-so-mi-nam-aristino-ASS236S1-03x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/ao-so-mi-nam-aristino-ASS127S1-02x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/ao-so-mi-nam-aristino-ASS205S1-01x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/ao-so-mi-nam-aristino-ASS236S1-03x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/ao-so-mi-nam-aristino-ALS01901-03x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/bo-suit-nam-aristino-ASU00108-01x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/bo-suit-nam-aristino-ASU00808-01x500x500x4.jpg" alt="">
                    <img src="./../public/assets/img/bo-suit-nam-aristino-ASU00208-11x500x500x4.jpg" alt="">
                </marquee>
            </div>
        </div>