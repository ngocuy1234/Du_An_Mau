<?php require_once "./mvc/views/viewAdmin/admin.php"; 
// dd($data['dataCate']);
?>

<a class="btn btn-success" href="http://localhost/MVC/admin/addPage/">Thêm bài viết</a>

<!-- Modal -->
<h3 class="header__content-title">Quản lý danh mục bài viết</h3>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Nội dung</th>
      <th scope="col">Giới Thiệu</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $index = 1;
        foreach($data['dataPage'] as $key){ ?>
    <tr>
      <td>
        <?=$index++?>
      </td>
      <td>
        <?=$key['page_title']?>
      </td>
      <td>
      <?=$key['page_content']?>
      </td>
      <td>
      <?=$key['page_description']?>
      </td>
      <td>
      <img width="60px" src="./../../public/assets/imgPage/<?=$key['page_img']?>" alt="">
      </td>
      <td>
      <?php
      foreach($data['dataCate'] as $item){
          if($key['cate_id'] == $item['cate_id']){
              echo $item['cate_name'];
          };
      };
      ?>
      </td>
      <td><a class="btn btn-success" href="<?=$key['cate_id']?>"><i class="far fa-edit"></i></a></td>
      <td><a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không ?')"
          href="<?=ACTION_BACKEND?>addPage/deletePage/<?=$key['page_id']?>"><i class="fas fa-trash"></i></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>