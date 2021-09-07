<?php

class pageList extends Controller{

    function index(){
        $getModel = $this->modelAdmin("modelCatePage");
        $getModelPage = $this->modelAdmin("modelPage");

        $queryCatePage = $getModel->getCatePage();
        $queryPage = $getModelPage->getPage();
        
        $dataCateOld =  $this->getRowInData($queryCatePage);
        $dataPage = $this->getRowInData($queryPage);
        // dd($dataPage);
        // dd($dataCateOld);

        $this->viewsCustomer('base_face' , $data =[
            'from' => 'pageList',
            'dataPageList' => $dataCateOld,
            'dataPage' => $dataPage,
            'type' => 1,
        ]);
    }

    function checkCate($slug){
        $getModel = $this->modelAdmin("modelCatePage");
        $getModelPage = $this->modelAdmin("modelPage");

        $queryCatePage = $getModel->getCatePageWhere($slug);
        $queryPage = $getModel->getCatePage();

        $dataCate =  $this->getRowInData($queryCatePage);
        $dataCateOld =  $this->getRowInData($queryPage);

        $cate_id = $dataCate[0]['cate_id'];

        $queryPage = $getModelPage->getPageWhere($cate_id);
        $dataPage = $this->getRowInData($queryPage);
        
        $this->viewsCustomer('base_face_level2' , $data =[
            'from' => 'pageList',
            'dataPageList' => $dataCateOld,
            'dataPage' => $dataPage,
            'type' => 2,
        ]);
    }

    
    function pageDetail($id){
        $getModel = $this->modelAdmin("modelPage");
        $queryPage = $getModel->getPageId($id);

        $dataPageWhere = $this->getRowInData($queryPage);

        $this->viewsCustomer('base_face_level2' , $data=[
            'from' => 'pageDetail',
            'dataPageDetail' => $dataPageWhere,
        ]);
    }
}