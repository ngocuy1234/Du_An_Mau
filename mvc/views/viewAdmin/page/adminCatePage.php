<?php require_once "./mvc/views/viewAdmin/admin.php"; 
// dd($data['dataCatePage']);
?>

<button type="button" class="btn btn-success btn__more" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Thêm danh mục bài viết
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục sản phẩm</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=ACTION_BACKEND?>adminCatePage/addCatePage" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" onkeyup="ChangeToSlug();" placeholder="Nhập tên nhân viên" name="cate_name"
              id="slug">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slug danh mục</label>
            <input type="text" class="form-control"  name="cate_slug"
              id="convert_slug">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lớp cha</label>
            <select class="form-select" name="parent_id"  aria-label="Default select example">
                <option value="0">Chọn</option>
                <?php foreach($data['dataCatePage'] as $key){ ?>
                  <option value="<?=$key['cate_id']?>"><?=str_repeat("___" ,$key['level']).$key['cate_name']?></option>
                <?php } ?>
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


<h3 class="header__content-title">Quản lý danh mục bài viết</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên</th>
      <th scope="col">Slug url</th>
      <th scope="col">Lớp cha</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        foreach($data['dataCatePage'] as $key){ ?>
    <tr>
      <td>
        <?=$key['cate_id']?>
      </td>
      <td>
        <?=str_repeat("___" ,$key['level']).$key['cate_name']?>
      </td>
      <td>
      <?=$key['cate_slug']?>
      </td>
      <td>
      <?=$key['parent_id']?>
      </td>
      <td><a class="btn btn-success" href="<?=$key['cate_id']?>"><i class="far fa-edit"></i></a></td>
      <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')"
          href="<?=ACTION_BACKEND?>adminCatePage/deleteCatePage/<?=$key['cate_id']?>"><i class="fas fa-trash"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>