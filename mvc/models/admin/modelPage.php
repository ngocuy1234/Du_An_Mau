<?php

class modelPage extends DB{

    public function getPage(){
        $getPage = "SELECT * FROM `data_page`";
        return mysqli_query($this->con , $getPage);
    }

    public function getPageWhere($cate_id){
        $getPage = "SELECT * FROM `data_page` WHERE `cate_id` = $cate_id";
        return mysqli_query($this->con , $getPage);
    }

    public function getPageId($page_id){
        $getPage = "SELECT * FROM `data_page` WHERE `page_id` = $page_id";
        return mysqli_query($this->con , $getPage);
    }

    public function InsertPage($data){
        // dd($data);
        $page_title =  $data['page_title'];
        $page_content = $data['page_content'];
        $page_description = $data['page_description'];
        $page_img = $data['page_img'];
        $cate_id = $data['cate_name'];

        $InsertPage = "INSERT INTO `data_page`(`page_title`, `page_content`, `page_description`, `page_img`, `cate_id`) VALUES ('$page_title','$page_content','$page_description','$page_img','$cate_id')";
        return mysqli_query($this->con , $InsertPage);
    }

    public function deletePage($id){
        $queryPage = "DELETE FROM `data_page` WHERE `page_id` = $id";
        return mysqli_query($this->con , $queryPage);
    }
}