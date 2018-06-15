<main id="main-content">
  <div id="main-content-inner" class="clearfix">
    <div class="inner">
      <div class="slider-area" data-auto="true" data-loop="true" data-dots="true">
        <div class="container">
          <div class="row">
            <div class="slider-active owl-carousel owl-theme">
              <?php 
                if (isset($_web['banner'])) {
                  foreach ($_web['banner'] as $key => $value) {
                    ?>
                    <div class="slider">
                      <img src="<?php echo getImage($value["images"],'1400','460','zc=1') ?>" alt="slider1">
                    </div>
                    <?php
                  }
                }
               ?>
            </div>
          </div>
        </div>
      </div>
      <!-- /.slider-area -->
    </div>
  </div>
</main>