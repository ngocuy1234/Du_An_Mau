<?php require_once "./mvc/views/viewAdmin/admin.php"; 
// dd($data['dataStaff']);
?>


<button type="button" class="btn btn-success btn__more" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm nhân viên
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=ACTION_BACKEND?>adminStaff/addStaff" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên nhân viên</label>
            <input type="text" class="form-control" placeholder="Nhập tên nhân viên" name="staff_name"
              id="exampleInputEmail1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ảnh nhân viên</label>
            <input type="file" class="form-control" name="staff_img" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email nhân viên</label>
            <input type="email" class="form-control" name="staff_email" placeholder="Nhập email nhân viên"
              id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="staff_password" placeholder="Nhập mật khẩu nhân viên"
              id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giới Tính</label>
            <select class="form-select" name="staff_gender" aria-label="Default select example">
              <option value="1">Nam</option>
              <option value="2">Nữ</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Loại sản phẩm</label>
            <select class="form-select" name="staff_quyen" aria-label="Default select example">
                <option value="1">Chủ Shop</option>
                <option value="2">Nhân viên</option>
            </select>
          </div>
          <button type="Thêm" class="btn btn-success">Add more</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<h3 class="header__content-title">Quản lý nhân viên</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên nhân viên</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Email</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Quyền hạn</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $index = 1;
        foreach($data['dataStaff'] as $key){ ?>
    <tr>
      <td>
        <?=$index++?>
      </td>
      <td>
        <?=$key['staff_name']?>
      </td>
      <td>
        <img width="60px" src="./../../public/assets/imgstaff/<?=$key['staff_img']?>" alt="">
      </td>
      <td>
        <?=$key['staff_email']?>
      </td>
      <td>
        <?php 
        if($key['staff_gender'] == 1){
            echo "Nam";
        }else{
            echo "Nữ";
        }
        ?>
      </td>
      <td>
        <?php 
        if($key['staff_quyen'] == 1){
            echo "Chủ shop";
        }else{
            echo "Nhân viên";
        }
        ?>
      </td>
      <td><a class="btn btn-warning" href="<?=$key['staff_id']?>"><i class="far fa-edit"></i></a></td>
      <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')"
          href="<?=ACTION_BACKEND?>adminStaff/deleteStaff/<?=$key['staff_id']?>"><i class="fas fa-trash"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>