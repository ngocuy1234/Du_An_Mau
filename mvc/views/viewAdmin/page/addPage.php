<div class="form__add-page" style="height: 1000px;">
  <h4 style="margin-left: 220px;color:#8E0007">Thêm bài viết</h4>
  <form action="<?=ACTION_BACKEND?>addPage/addPage/" enctype="multipart/form-data" method="POST">
    <h6>Tiêu đề bài viết</h6>
    <textarea name="page_title" id="" cols="80" rows="4">

    </textarea>
    <h6>Nội dung bài viết bài viết</h6>
    <textarea name="page_content" id="" cols="80" rows="8">

    </textarea>
    <h6>Giới thiệu </h6>
    <textarea name="page_description" id="" cols="80" rows="6">

    </textarea>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name="page_img" style="width:580px" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <label  for="exampleInputEmail1" class="form-label">Email address</label>
    <select style="width:580px" name="cate_name" class="form-select" aria-label="Default select example">
    <?php foreach($data['dataCate'] as $key){ ?>
      <option value="<?=$key['cate_id']?>"><?=$key['cate_name']?></option>
      <?php } ?>
    </select>
    <button type="submit" style="margin-top: 30px;" class="btn btn-success">Add more</button>
</form>
</div