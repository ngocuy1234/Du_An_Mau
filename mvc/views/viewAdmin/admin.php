<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=CSS_URL?>/adminCss/adminMain.css">
    <!-- <link rel="stylesheet" href="/public/css/adminCss/adminMain.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="wrap">
        <header class="header padding_style">
            <div class="header__left">
                <label for="input__ckeck-nav" class="header__icon-menu">
                    <i class="fas fa-bars"></i>
                </label>

                <input type="checkbox" hidden class="nav__input" id="input__ckeck-nav">

                <div id="sidebar__bag" class="sidebar__bag">
                    <h3 class="sidebar__title">Trang quản trị wed</h3>
                    <img src="./../../public/assets/img/logo-text.png" alt="" class="sidebar__logo">
                    <ul class="sidebar-list">
                        <li class="sidebar-item"><i class="fas fa-table"></i><a href="<?=ACTION_BACKEND?>adminPage/"
                                class="sidebar-link">Bảng bài
                                viết</a></li>
                        <li class="sidebar-item"><i class="fas fa-table"></i><a href="<?=ACTION_BACKEND?>adminProduct/"
                                class="sidebar-link">Bảng sản
                                phẩm</a></li>
                        <li class="sidebar-item"><i class="fas fa-table"></i><a href="<?=ACTION_BACKEND?>adminCustomer/" class="sidebar-link">Bảng khách
                                hàng</a></li>

                        <li class="sidebar-item"><i class="fas fa-table"></i><a href="<?=ACTION_BACKEND?>adminStaff/"
                                class="sidebar-link">Bảng nhân
                                viên</a></li>
                        <li class="sidebar-item"><i class="fas fa-table"></i><a href="<?=ACTION_BACKEND?>adminCatePage/"
                                class="sidebar-link">Bảng danh mục bài viết</a></li>
                        <li class="sidebar-item"><i class="fas fa-table"></i><a href="<?=ACTION_BACKEND?>adminCateProduct/"
                        class="sidebar-link">Bảng danh mục sản phẩm</a></li>
                    </ul>
                </div>

                <span class="header__new-text">
                    Create New <i class="fas fa-chevron-down"></i>
                </span>
                <div class="header__seach">
                    <input type="text" placeholder="Tìm kiêm thêm...">
                    <button class="btn__seach"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="header__right-user">
                <?php 
                // dd($_SESSION['staff_infor']);
                if(isset($_SESSION['staff_infor'])){ ?>
                <img class="header__right-user-img"
                    src="./../../public/assets/imgStaff/<?=$_SESSION['staff_infor']['staff_img']?>" alt="">
                <label for="input__ckeck-user" class="header__right-user-name">
                    <?=$_SESSION['staff_infor']['staff_name']?>
                </label>
                <?php } ?>
                <input hidden type="checkbox" class="nav__input-user" id="input__ckeck-user">
                <div class="list__fucntion-user">
                    <ul class="function__list">
                        <li class="function__list-item"><a href="">Quên mật khẩu</a></li>
                        <li class="function__list-item"><a href="<?=ACTION_BACKEND?>editStaffPassword/">
                                Sửa mật khẩu
                            </a></li>
                        <li class="function__list-item"><a type="button" data-bs-toggle="modal"
                                data-bs-target="#addAmin" href="">
                                Chuyển tài khoản
                            </a></li>
                        <li class="function__list-item"><a href="<?=ACTION_BACKEND?>logoutAdmin/">
                                Đăng xuất
                            </a></li>
                    </ul>
                </div>
            </div>
            <!-- Button trigger modal -->

            <!-- Modal -->

        </header>
        <div class="modal fade" id="addAmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Chuyển tài khoản</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="./../../loginAdmin/checkStaff/" method="POST"> 
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email nhân viên</label>
                                <input type="email" placeholder="Nhập email của bạn" class="form-control" name="staff_email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" placeholder="Nhập password của bạn"  name="staff_password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="header__content">
                <label for="input__ckeck-nav-content" class="header__icon-menu extent__content-icon">
                    <i class="fas fa-expand"></i>
                </label>

                <input hidden type="checkbox" class="nav__input-content" id="input__ckeck-nav-content">

                <?php echo require_once "./mvc/views/viewAdmin/page/".$data['from'].".php"; ?>
            </div>
        </div>
    </div>

</body>
<script src="./../../public/js/createSlug.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    // ----------------------------------------
    $(window).on('load', function () {
        $('#sidebar__bag').css("transform", "translateX(0%)");
    });
</script>
<script>

</script>

</html>