<?php

class adminStaff extends Controller{

    function index(){
        $getModel = $this->modelAdmin("modelStaff");
        $getModelStaff =  $getModel->getStaff();

        $dataStaff =  $this->getRowInData($getModelStaff);
        $dataStaffEnd = end($dataStaff);
        // dd($dataStaffEnd);
        // dd($dataStaff);
        $this->viewsAdmin('admin' , $data=[
            'from' => 'adminStaff',
            'dataStaff' => $dataStaff,
        ]);
    }

    function addStaff(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);

            if(!empty($staff_name) || !empty($staff_email) || !empty($staff_password)){
                if(isset($_FILES['staff_img'])){
                    $file = $_FILES['staff_img'];
                    $file_name = $file['name'];

                    move_uploaded_file($file['tmp_name'] ,'./public/assets/imgStaff/'. $file_name);
                }

                $passwordEncode = password_hash($staff_password , PASSWORD_DEFAULT);

                $data = [
                    'staff_name' =>  $staff_name,
                    'staff_img' => $file_name,
                    'staff_email' => $staff_email,
                    'staff_password' => $passwordEncode,
                    'staff_gender' => $staff_gender,
                    'staff_quyen' => $staff_quyen,
                ];

                $getModel = $this->modelAdmin("modelStaff");
                $getModel->InsertStaff($data);
                header('Location: http://localhost/MVC/admin/adminStaff/');
            }
        }
    }

    function deleteStaff($id){
        // echo $id;
        // die();
        $getModel = $this->modelAdmin("modelStaff");
        $getModel->deleteStaff($id);
        header('Location: http://localhost/MVC/admin/adminStaff/');
    }
}