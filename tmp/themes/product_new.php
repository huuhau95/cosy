<div class="news">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading-title">
          <h2 class="title"><span>Tin tức mới nhất của Cosy</span></h2>
          <div class="sep"></div>
        </div>
      </div><!-- /.col-md-12 -->
      <div class="col-md-6">
        <div class="news-box big-item">
          <?php 
          if (isset($_web['new_product'])) {
            foreach ($_web['new_product'] as $key => $value) {
              if ($key==0) {
                ?>
                <div class="image">
                  <img src="<?php echo getImage($value["image"], 555,370,'zc=1') ?>" alt="<?php echo $value["image"] ?>">
                </div>

                <div class="text">
                  <div class="icon">
                    <img src="<?php echo getImage($value["image"], 77,72,'zc=1') ?>" alt="icon">
                  </div>
                  <h3><a href="#"><?php echo $value["name"] ?></a></h3>
                  <p><?php echo $value["description"] ?></p>
                </div>
                <?php
              }
            }
          }
          ?>
        </div><!-- /.news-box -->
      </div><!-- /.col-md-6 -->

      

      <div class="col-md-6">
        <div class="row">
           <?php 
          if (isset($_web['new_product'])) {
            foreach ($_web['new_product'] as $key => $value) {
              if ($key>0) {
                ?>
          <div class="news-box small-item clearfix">
            <div class="image">
              <img src="<?php echo getImage($value["image"], 210,145,'zc=1') ?>" alt="News1">
            </div>
            <div class="text">
              <h3><a href="#"><?php echo $value["name"] ?></a></h3>
              <p><?php echo $value["description"] ?></p>
            </div>
          </div><!-- /.news-box -->
          <?php
              }
            }
          }
          ?>
        </div>
      </div><!-- /.col-md-6 -->
    </div>
  </div>
</div>