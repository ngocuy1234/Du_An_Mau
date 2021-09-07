<?php

class modelProduct extends DB{

    public function getProduct(){
        $qr = "SELECT * FROM `list_product` INNER JOIN `data_category` ON list_product.cate_id =  data_category.cate_id";
        return mysqli_query($this->con, $qr);
    }

    public function getProductWhereId($id){
        $qr = "SELECT * FROM `list_product` WHERE `product_id` = '$id'";
        return mysqli_query($this->con, $qr);
    }

    public function getProductWhereSlug($slug_id){
        $qr = "SELECT * FROM `list_product` WHERE `cate_id` = '$slug_id'";
        return mysqli_query($this->con, $qr);
    }

    public function CountNumberItem(){
        $queryProduct = "SELECT COUNT(`product_id`) as number FROM `list_product`";
        return mysqli_query($this->con, $queryProduct);
    }

    public function getProductLimit($index){
        $queryProduct = "SELECT * FROM `list_product` LIMIT $index , 12";
        return mysqli_query($this->con, $queryProduct);
    }

    public function InsertProduct($data){
        $product_name = $data['product_name'];
        $product_size = $data['product_size'];
        $product_img = $data['product_img'];
        $product_unit = $data['product_unit'];
        $cate_name = $data['cate_name'];
        $product_price = $data['product_price'];
        $product_quantity = $data['product_quantity'];

        $setProduct = "INSERT INTO `list_product`(`product_size`, `product_quantity`, `product_price`, `product_unit`, `product_img`, `cate_id`, `product_name`) VALUES ('$product_size','$product_quantity','$product_price','$product_unit','$product_img','$cate_name','$product_name')";
        return mysqli_query($this->con, $setProduct); 
    }

    public function deleteProduct($id){
        $deleteProduct = "DELETE FROM `list_product` WHERE `product_id` = $id";
        return mysqli_query($this->con, $deleteProduct); 
    }
}