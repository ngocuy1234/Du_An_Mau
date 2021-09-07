<?php

class registerCustomer extends Controller{

    function index(){

        $this->viewsCustomer("form" , $data = [
            'from' => 'registerCustomer',
        ]);
        // var_dump($_GET['name']);
    }

    function addCustomer(){
        if($_SERVER['REQUEST_METHOD'] ==  "POST"){
            extract($_POST);

            // dd($_FILES);

            if(!empty($customer_name) || !empty($customer_gender) || !empty($customer_phone)|| !empty($customer_password) || !empty($customer_address) || !empty($customer_email)){

                // dd($_FILES['customer_img']);
                if(isset($_FILES['customer_img'])){
                    $file = $_FILES['customer_img'];
                    $file_name = $file['name'];
                    if(!empty($file_name) == true){
                        move_uploaded_file($file['tmp_name'] , './public/assets/imgCustomer/'.$file_name);
                    }else{
                        $_SESSION['error'] = " Bạn chưa chọn ảnh !!!";
                        header('Location: http://localhost/MVC/registerCustomer/');
                        die();
                    }
                }

                $customer_password_new =  password_hash($customer_password , PASSWORD_DEFAULT);

                $data = [
                    'customer_name' => $customer_name,
                    'customer_img' => $file_name,
                    'customer_gender' => $customer_gender,
                    'customer_phone' => $customer_phone,
                    'customer_password' => $customer_password_new,
                    'customer_email' => $customer_email,
                    'customer_address' => $customer_address
                ];

                $getModel = $this->modelCustomer("modelCustomer");
                $getModel->InsertCustomer($data);
                header('Location: http://localhost/MVC/loginCustomer/');
            }else{
                $_SESSION['error'] = "Bạn đang bỏ trống dữ liệu !!!";
                header('Location: http://localhost/MVC/registerCustomer/');
                die();
            }
        }
    }
}