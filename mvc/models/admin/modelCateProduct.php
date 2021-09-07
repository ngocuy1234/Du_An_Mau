<?php

class modelCateProduct extends DB{

    public function getCate(){
        $getCate = "SELECT * FROM `data_category`";
        return mysqli_query($this->con , $getCate);
    }

    public function getCateWhereSlug($slug){
        $getCate = "SELECT * FROM `data_category` WHERE `cate_name_slug` = '$slug'";
        return mysqli_query($this->con , $getCate);
    }
}