
<div class="h1">
  <h1>Địa Điểm Nổi Bật</h1>
    </div>
    <hr style="width: 15rem;border-top: 1px solid black;padding-bottom:1rem;">
    <div class="section1">
      <div class="row">
      	<?php 
      		foreach ($posts as $post) {
      	?>
        <div class="col-lg-4 col-md-6 pt-3 pb-3">
          <div class="diadiem">
            <img src='./assets/uploads/<?php echo $post->image?>' alt="thaptruyenhinh" class="img-fluid">
            <div class="tendiadiem">
              <div class="tendiadiem1">
                <p class="tendiadiem1-1"><?php echo $post->title?></p>
              </div>
            </div>
          </div>
          <div class="xemthem">
            <a href="#" class="text-xemthem">Xem Thêm<img src="./assets/images/arrow.png"
                style="padding-left: 5px;padding-bottom: 5px;"></a>
          </div>
        </div>
        <?php
        	}
        ?>
    </div>
</div>

       



   
