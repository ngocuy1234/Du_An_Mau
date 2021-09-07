<?php require_once "./mvc/views/viewAdmin/admin.php"; ?>


  <button type="button" class="btn btn-success btn__more" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm sản phẩm
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
          <form action="<?=ACTION_BACKEND?>adminProduct/addProduct/" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
              <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="product_name"
                id="exampleInputEmail1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Ảnh sản phẩm</label>
              <input type="file" class="form-control" name="product_img" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Size</label>
              <select class="form-select form-select-lg mb-3" name="product_size" aria-label=".form-select-lg example">
                <option value="1">Size M</option>
                <option value="2">Size L</option>
                <option value="3">Size XL</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Giá sản phẩm</label>
              <input type="number" class="form-control" name="product_price" placeholder="Nhập giá sản phẩm" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Số lượng</label>
              <input type="number" class="form-control" name="product_quantity" placeholder="Nhập số lượng sản phẩm"  id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Đơn vị</label>
              <input type="text" class="form-control" name="product_unit" placeholder="Nhập đơn vị sản phẩm"  id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Loại sản phẩm</label>
              <select class="form-select" name="cate_name" aria-label="Default select example">
                <option value="">Chọn</option>
                <?php foreach($data['data_category'] as $key){ ?>
                <option value="<?=$key['cate_id']?>">
                  <?=$key['cate_name']?>
                </option>
                <?php } ?>
              </select>
            </div>
            <button type="Thêm" class="btn btn-success">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<h3 class="header__content-title">Quản lý sản phẩm</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Size</th>
      <th scope="col">Giá </th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn vị</th>
      <th scope="col">Loại danh mục</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $index = 1;
        foreach($data['data_product'] as $key){ ?>
    <tr>
      <td>
        <?=$index++?>
      </td>
      <td>
        <?=$key['product_name']?>
      </td>
      <td>
        <img width="60px" src="./../../public/assets/imgProduct/<?=$key['product_img']?>" alt="">
      </td>
      <td>
          <?php 
          if($key['product_size'] == 1){
            echo "Size M";
          }elseif($key['product_size'] == 2){
            echo "Size L";
          }else{
            echo "Size XL";
          }
          ?>
      </td>
      <td>
        <?=$key['product_price']?>
      </td>
      <td>
        <?=$key['product_quantity']?>
      </td>
      <td>
        <?=$key['product_unit']?>
      </td>
      <td>
        <?=$key['cate_name']?>
      </td>
      <td><a class="btn btn-warning" href="<?=$key['product_id']?>"><i class="far fa-edit"></i></a></td>
      <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')" href="<?=ACTION_BACKEND?>adminProduct/deleteProduct/<?=$key['product_id']?>"><i class="fas fa-trash"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<!-- Button trigger modal -->