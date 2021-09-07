<?php

class addPage extends Controller{

    function index(){
        // $getModel = $this->modelAdmin("modelPage");
        $getModelCate =  $this->modelAdmin(("modelCatePage"));

        // $queryPage = $getModel->getCatePage();
        $queryCatePage = $getModelCate->getCatePage();
         
        // $dataPage =  $this->getRowInData($queryPage);
        $dataCate =  $this->getRowInData($queryCatePage);
        // dd($dataCate);
        // dd($dataPage);
        $this->viewsAdmin('admin' , $data=[
            'from' => 'addPage',
            'dataCate' => $dataCate,
        ]);
    }

    function addPage(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);
            
            if(!empty($page_title) || !empty($page_content || !empty($page_description))){

                if(isset($_FILES['page_img'])){
                    $file = $_FILES['page_img'];
                    $file_name = $file['name'];
                    move_uploaded_file($file['tmp_name'] , './public/assets/imgPage/' .$file_name);
                }

                $data = [
                    'page_title' => $page_title,
                    'page_content' => $page_content,
                    'page_description' => $page_title,
                    'page_img' => $file_name,
                    'cate_name' => $cate_name,
                ];

                // dd($data);
                $getModel =  $this->modelAdmin(("modelPage"));
                $getModel->InsertPage($data);
                header('Location: http://localhost/MVC/admin/adminPage/');
            }
        }
    }

    function deletePage($id){
        $getModel =  $this->modelAdmin(("modelPage"));
        $getModel->deletePage($id);
        header('Location: http://localhost/MVC/admin/adminPage/');
    }
}