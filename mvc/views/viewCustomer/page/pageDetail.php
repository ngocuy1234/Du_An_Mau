
        <!-- CONTENT -->
        <div class="content container">
            <section class="content__detail">
                <span>Tin tức</span>
                <?php foreach($data['dataPageDetail'] as $key){ ?>
                <h4 class="content__detail-title">
                  <?=$key['page_title']?>
                </h4>
                <p class="content__detail-description">
                <?=$key['page_description']?>
                </p>
                <img src="./../../public/assets/imgPage/<?=$key['page_img']?>" class="content__detail-img" alt="">
                <p class="content__detail-content">
                <?=$key['page_content']?>
                </p>
               <?php }  ?>
            </section>
        </div>
        <!-- FOOTER -->
