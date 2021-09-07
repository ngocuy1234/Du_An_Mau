<?php

class modelCatePage extends DB{

    public function getCatePage(){
        $getCatePage = "SELECT * FROM `data_cate_page`";
        return mysqli_query($this->con , $getCatePage);
    }

    public function getCatePageWhere($slug){
        $getCatePage = "SELECT * FROM `data_cate_page` WHERE `cate_slug` = '$slug'";
        return mysqli_query($this->con , $getCatePage);
    }

    public function InsertCatePage($data){
        $cate_name = $data['cate_name'];
        $cate_slug = $data['cate_slug'];
        $parent_id = $data['parent_id'];

        $InsertCate = "INSERT INTO `data_cate_page`(`cate_name`, `cate_slug`, `parent_id`) VALUES ('$cate_name','$cate_slug','$parent_id')";
        return mysqli_query($this->con , $InsertCate);
    }

    public function deleteCatePage($id){
        $deleteCate = "DELETE FROM `data_cate_page` WHERE `cate_id` = '$id'";
        return mysqli_query($this->con , $deleteCate);
    }
}