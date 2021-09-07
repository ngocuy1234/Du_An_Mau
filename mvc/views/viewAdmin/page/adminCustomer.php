<?php require_once "./mvc/views/viewAdmin/admin.php"; 
// dd($data['dataCustomer']);
?>
  <!-- Modal -->

<h3 class="header__content-title">Quản lý khách hàng</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên khách hàng/th>
      <th scope="col">Ảnh</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Email</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $index = 1;
        foreach($data['dataCustomer'] as $key){ ?>
    <tr>
      <td>
        <?=$index++?>
      </td>
      <td>
        <?=$key['customer_name']?>
      </td>
      <td>
        <img width="60px" src="./../../public/assets/imgCustomer/<?=$key['customer_img']?>" alt="">
      </td>
      <td>
          <?php 
          if($key['customer_gender'] == 1){
            echo "Nam";
          }elseif($key['customer_gender'] == 2){
            echo "Nữ";
          }else{
            echo "Khác";
          }
          ?>
      </td>
      <td>
        <?=$key['customer_email']?>
      </td>
      <td>
        <?=$key['customer_phone']?>
      </td>
      <td>
        <?=$key['customer_addess']?>
      </td>
      <td><a class="btn btn-warning" href="<?=$key['customer_id']?>"><i class="far fa-edit"></i></a></td>
      <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')" href="<?=ACTION_BACKEND?>adminCustomer/deleteCustomer/<?=$key['customer_id']?>"><i class="fas fa-trash"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>