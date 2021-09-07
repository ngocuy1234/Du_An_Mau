<?php

class adminCatePage extends Controller{
    
    function index(){
        $getModel = $this->modelAdmin("modelCatePage");
        $queryCatePage = $getModel->getCatePage();
        
        $dataCateOld =  $this->getRowInData($queryCatePage);

        function Hierarchical($data , $majors_id= 0 , $level = 0){
        $result = [];
        // dd($dataCateOld);
        foreach($data as $item){
            if($item['parent_id'] ==  $majors_id){
                if($item['parent_id']  == $majors_id){
                    $item['level'] = $level;
                    $result[] = $item; 
                    $child = Hierarchical($data , $item['cate_id'] , $level+ 1);
                    $result = array_merge($result , $child);
                }
            }
        }
           return $result;
        }

        $dataCatePage = Hierarchical($dataCateOld ,0);

        $this->viewsAdmin("admin" , $data= [
            'from' => 'adminCatePage',
            'dataCatePage' => $dataCatePage,
        ]);
    }

    function addCatePage(){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            extract($_POST);

            // echo $cate_slug;

            if(!empty($cate_name)){             
                $data=[
                    'cate_name' => $cate_name,
                    'cate_slug' => $cate_slug,
                    'parent_id' => $parent_id,
                ];
            }
            $getModel = $this->modelAdmin("modelCatePage");
            $getModel->InsertCatePage($data);
            header('Location: http://localhost/MVC/admin/adminCatePage/');
        }
    }

    function deleteCatePage($id){
        $getModel = $this->modelAdmin("modelCatePage");
        $getModel->deleteCatePage($id);
        header('Location: http://localhost/MVC/admin/adminCatePage/');
    }
}