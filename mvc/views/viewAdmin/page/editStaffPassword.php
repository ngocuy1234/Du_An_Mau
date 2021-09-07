<div class="edit_password" style="display:flex">
  <div class="edit_password_left"> 
    <h4 class="margin-top:30px">Sửa mật khẩu</h4>
    <div class="form__edit" style="width: 500px;margin-top:30px">
      <form method="POST" action="<?=ACTION_BACKEND?>editStaffPassword/editPassword/">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email của bạn</label>
          <input type="email" class="form-control" placeholder="Nhập email của bạn" name="staff_email" id="exampleInputEmail1"
            aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mật khẩu cũ</label>
          <input type="password" placeholder="Nhập mật khẩu cũ của bạn" class="form-control" name="staff_password_old" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mật khẩu mới</label>
          <input type="password" class="form-control" placeholder="Nhập mật khẩu của mới bạn" name="staff_password_new" id="exampleInputPassword1">
        </div>
         <?php
         if(isset($_SESSION['notifi'])){
         if($_SESSION['notifi']['number'] == 2){  ?>
            <h6 style="color:#E80007"><?=$_SESSION['notifi']['message']?></h6>
         <?php 
         unset($_SESSION['notifi']);
        }else{ ?> 
            <h6 style="color:#10ac84"><?=$_SESSION['notifi']['message']?></h6>
          <?php
          unset($_SESSION['notifi']);
         }
        }?>
        <button style="margin-top: 30px;" type="submit" class="btn btn-dark">Edit Password</button>
      </form>
    </div>
  </div>
  <div class="edit_password_right" style="margin-left:100px">
    <img src="./../../public/assets/img/bo-suit-nam-aristino-ASU001W9-07x500x500x4.jpg" alt="">
  </div>
</div>