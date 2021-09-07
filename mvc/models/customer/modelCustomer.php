<?php

class modelCustomer extends DB{

    public function getCustomer(){
        $queryCustomer =  "SELECT * FROM `data_customer`";
        return mysqli_query($this->con , $queryCustomer);
    }

    public function InsertCustomer($data){
        $customer_name = $data['customer_name'];
        $customer_img = $data['customer_img'];
        $customer_gender = $data['customer_gender'];
        $customer_email = $data['customer_email'];
        $customer_password = $data['customer_password'];
        $customer_address = $data['customer_address'];
        $customer_phone = $data['customer_phone'];

        $queryCustomer = "INSERT INTO `data_customer`(`customer_name`, `customer_phone`, `customer_gender`, `customer_email`, `customer_img`, `customer_addess` , `customer_password`) VALUES ('$customer_name','$customer_phone','$customer_gender','$customer_email','$customer_img' ,'$customer_address' , '$customer_password')";
        return mysqli_query($this->con , $queryCustomer);
    }

    public function getCustomerWhereEmail($email){
        $queryCustomer = "SELECT * FROM `data_customer` WHERE `customer_email` = '$email'";
        return mysqli_query($this->con , $queryCustomer);
    }

    public function deleteCustomer($id){
        $queryCustomer = "DELETE FROM `data_customer` WHERE `customer_id` = '$id'";
        return mysqli_query($this->con , $queryCustomer);
    }
}