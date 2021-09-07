<?php

class loginCustomer extends Controller{

    function index(){

        $this->viewsCustomer("form" , $data = [
            'from' => 'loginCustomer',
        ]);
        // var_dump($_GET['name']);
    }

    function checkCustomer(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);

            // dd($_POST);

            if(!empty($customer_email) || !empty($customer_password)){

                $getModel = $this->modelCustomer("modelCustomer");
                $getCustomer = $getModel->getCustomerWhereEmail($customer_email);

                $dataCustomer = $this->getRowInData($getCustomer);
                // dd($dataCustomer);
                if(password_verify($customer_password , $dataCustomer[0]['customer_password'])){

                    // Lưu thông tin khách hàng
                    $_SESSION['customer'] = $dataCustomer;

                    $_SESSION['notifi'] = [
                        'message' => "Tài khoản của bạn đã được đăng nhập thành công !!!",
                        'number' => 1,
                    ];

                    header('Location: http://localhost/MVC/loginCustomer/');
                    die();
                }else{
                    $_SESSION['notifi'] = [
                        'message' => "Kiểm tra lại email hoặc mật khẩu của bạn !!!",
                        'number' => 2,
                    ];
                    header('Location: http://localhost/MVC/loginCustomer/');
                    die();
                }
            }else{
                $_SESSION['notifi'] = [
                    'message' => "Không được bỏ trống dữ liệu !!!",
                    'number' => 2,
                ];

                header('Location: http://localhost/MVC/loginCustomer/');
                die();
            }
        }
    }
    
}