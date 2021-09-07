<?php
$dataPageList = $data['dataPageList'];
// dd($data['type']);
if($data['type'] == 2){
?>
      <div class="banner">
            <img class="banner_img" src="./../../public/assets/img/Banner DM-min(1).jpg" alt="">
        </div>
        <!-- CONTENT -->
        <div class="content">
            <div class="content__heading">
                <h3 class="content__heading-title">Tin Tức</h3>
            </div>
            <div class="cate__page">
                <ul class="cate__page-list">
                    <?php 
                    // dd($data['dataPageList']);
                    foreach($dataPageList as $key){ ?>
                    <li class="cate__page-list-item">
                        <a href="./../../pageList/checkCate/<?=$key['cate_slug']?>" class="cate__page-list-item-link"><?=$key['cate_name']?></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <main>
                <section class="section__page">
                    <div class="section__page-bg" style="margin-bottom: 50px;">
                        <?php
                        // dd($data['dataPage']);
                         foreach($data['dataPage'] as $key){ ?>
                        <div class="section__page-infor-bg">
                            <a href="./../../pageList/pageDetail/<?=$key['page_id']?>"><img src="./../../public/assets/imgPage/<?=$key['page_img'] ?>"
                                    class="section__page-infor-img" alt=""></a>
                            <div class="section__page-infor-content">
                                <h6 class="section__page-infor-title">
                                    <a href="./../../pageList/pageDetail/<?=$key['page_id']?>"><?=$key['page_title']?></a>
                                </h6>
                                <p class="section__page-infor-text">
                                <?=$key['page_description']?>
                                </p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </section>
            </main>
        </div>
        <?php }else{ ?>
             <div class="banner">
             <img class="banner_img" src="./../public/assets/img/Banner DM-min(1).jpg" alt="">
         </div>
         <!-- CONTENT -->
         <div class="content">
             <div class="content__heading">
                 <h3 class="content__heading-title">Tin Tức</h3>
             </div>
             <div class="cate__page">
                 <ul class="cate__page-list">
                     <?php foreach($dataPageList as $key){ ?>
                     <li class="cate__page-list-item">
                         <a href="./../pageList/checkCate/<?=$key['cate_slug']?>" class="cate__page-list-item-link"><?=$key['cate_name']?></a>
                     </li>
                     <?php } ?>
                 </ul>
             </div>
             <main>
                 <section class="section__page">
                     <div class="section__page-bg" style="margin-bottom: 50px;">
                         <?php foreach($data['dataPage'] as $key){ ?>
                         <div class="section__page-infor-bg">
                             <a href="./../pageList/pageDetail/<?=$key['page_id']?>"><img src="./../public/assets/imgPage/<?=$key['page_img'] ?>"
                                     class="section__page-infor-img" alt=""></a>
                             <div class="section__page-infor-content">
                                 <h6 class="section__page-infor-title">
                                     <a href="./../pageList/pageDetail/<?=$key['page_id']?>"><?=$key['page_title']?></a>
                                 </h6>
                                 <p class="section__page-infor-text">
                                 <?=$key['page_description']?>
                                 </p>
                             </div>
                         </div>
                         <?php } ?>
                     </div>
                 </section>
             </main>
         </div>
       <?php } ?>