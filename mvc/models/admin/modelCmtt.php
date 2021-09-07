<?php 

class modelCmtt extends DB{

    function InsertCmtt($data){
        $customer_id = $data['customer_id'];
        $product_id = $data['product_id'];
        $parent_id = $data['parent_id'];
        $content_cmtt = $data['content_cmtt'];

        $queryCmtt = "INSERT INTO `data_comment`(`customer_id`, `product_id`, `comment_content`, `parent_comment`) VALUES ('$customer_id','$product_id','$content_cmtt','$parent_id')";
        return mysqli_query($this->con , $queryCmtt);
    }

    function cmttDetail($id){
        $queryCmtt = "SELECT * FROM `data_comment` INNER JOIN `data_customer` ON data_comment.customer_id = data_customer.customer_id WHERE data_comment.product_id = '$id'";
        return mysqli_query($this->con , $queryCmtt);
    }

    function getCmtt($id){
        $queryCmtt = "SELECT * FROM `data_comment` WHERE `comment_id` = '$id'";
        return mysqli_query($this->con , $queryCmtt);
    }

    function deleteComment($id){
        $queryCmtt = "DELETE FROM `data_comment` WHERE `comment_id` = $id";
        return mysqli_query($this->con , $queryCmtt);
    }
}