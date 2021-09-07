<?php

class adminPage extends Controller{

    function index(){
        $getModel = $this->modelAdmin("modelPage");
        $getModelCate =  $this->modelAdmin(("modelCatePage"));

        $queryPage = $getModel->getPage();
        $queryCatePage = $getModelCate->getCatePage();
         
        $dataPage =  $this->getRowInData($queryPage);
        $dataCate =  $this->getRowInData($queryCatePage);
        // dd($dataCate);
        // dd($dataPage);
        $this->viewsAdmin('admin' , $data=[
            'from' => 'adminPage',
            'dataPage' => $dataPage,
            'dataCate' => $dataCate,
        ]);
    }
}