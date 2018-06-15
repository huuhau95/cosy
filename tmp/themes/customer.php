 <div id="testimonials">
  <div id="testimonials-inner" class="container">
    <div class="row row-3">
      <div class="col-md-12">
        <div class="spacer" data-desktop="30" data-mobi="30" data-smobi="30"></div>
        <h2 class="title">khách hàng nói gì về cosy</h2>

        <div class="carousel-box has-nav nav-center" data-auto="true" data-loop="true" data-column="3" data-column="2" data-column="1" data-gap="30">
          <div class="owl-carousel">
            <?php 
            if (isset($_web['comment'])){
              foreach ($_web['comment'] as $key => $value) {
                ?>
                <div class="testimonials">
                  <div class="inner">
                    <div class="person">
                      <div class="image">
                        <img src="<?php echo getImage($value["image"], 120, 120, 'zc=1') ?>" alt="Avatar 1">
                      </div><!-- /.image -->
                      <h6 class="name">Hoàng thị nga khùng</h6>
                      <span class="position">SEO manager</span>
                    </div><!-- /.person -->

                    <blockquote class="text">
                      <p>"Khi mua ghế sofa tôi đã xem ở rất nhiều đơn vị và tôi đã chọn Cosy bởi ghế sofa ở đây có chất lượng đúng như quảng cáo, và tôi thấy có nhiều mẫu mã để lựa chọn"</p>
                    </blockquote>
                  </div>
                </div><!-- /.testimonials -->
                <?php
              }
            }
            ?>
            

          </div><!-- /.owl-carousel -->
        </div><!-- /.carousel-box -->

        <div class="spacer" data-desktop="100" data-mobi="60" data-smobi="50">
        </div><!-- /.com-md-12 -->
      </div><!-- /.row-3 -->
    </div>
  </div><!-- /#testimonials-inner -->
          </div><!-- /#testimonials -->
  <div id="second-menu" class="clearfix">
            <div id="second-menu-inner" class="container">
              <nav class="s-menu">
                <ul>
                  <li> <a href="#">GHẾ SOFA DA</a> </li>
                  <li> <a href="#">GHẾ SOFA ĐẸP</a> </li>
                  <li> <a href="#">GHẾ SOFA PHÒNG KHÁCH</a> </li>
                  <li> <a href="#">GHẾ SOFA DA THẬT</a> </li>
                  <li> <a href="#">GHẾ SOFA</a> </li>
                </ul>
              </nav>
              <div class="hotline">
                <a href="tel:01699140399">0169.914.0399</a>
              </div>
            </div><!-- /#second-menu-inner -->
          </div><!-- /#second-menu -->