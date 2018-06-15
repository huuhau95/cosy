<?php require_once DIR_ROOT ."tmp/themes/menu.php";?>               
<!-- content_main -->
    <div class="container">
        <div class="row">
            <!-- col-left -->
            <div class="maininfo">
                <div class="blockcol1">
                    <div class="main-img">
                        <img src="<?php echo $_web['base_url_cdn'].$this->data['data_product']['image'];?>" alt="<?php echo stripcslashes($this->data['data_product']['title']); ?>" style="display: block;">
                    </div>
                    <div class="tiny-img">
                        <div class="tiny-img-wrapper clearfix">
                            <ul>
                                <?php
            $image_list = json_decode($this->data['data_product']['image_list'], true);
            if (!empty($image_list)) {
                // dd($image_list);
              foreach ($image_list as $key => $icon) {?>
              
            <li class="citem <?php if ($key==0) {echo "active";} ?>">
            <?php echo "<img src='".$_web['base_url_cdn'].$icon['name']."'>"; ?>
            </li>
            <?php }
            } 
            ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- end col-left -->
            <!-- col-right -->
            <div class="blockcol2">
                <h1><?php echo ($this->data['data_product']['name']!="") ? stripcslashes($this->data['data_product']['name']) : "";?></h1>
                <div class="price">
                    <?php if($this->data['data_product']['price']!="" && !empty($this->data['data_product']['price'])){ ?>
                    <p><?php echo number_format($this->data['data_product']['price'],0,'','.');?> VNĐ</p>
                    <?php }else{echo "<p>Giá: Liên hệ "."<a href='tel:".$_web['settings']['hotline']."'><span style='color:blue;font-weight:bold;font-size:15px;'>".$_web['settings']['hotline']."</span></a>"."</p>";} ?><br>
                    <div class="fb-like" data-href="<?php echo base_url().$this->data['data_product']['alias']."-".$this->data['data_product']['id'].".htm"; ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                </div>
                <div class="thongtinsanpham clearfix">
                    <div class="desc-info">
                        <p>Mã sản phẩm: <?php echo isset($this->data['data_product']['code']) ? $this->data['data_product']['code'] : ''; ?></p>
                        <!-- descrition box html content -->
                    </div>

                    <p class="desc-title">
                        <span>
                            <strong>Thông tin sản phẩm</strong>
                        </span>
                    </p>
                    <div class="desc-info">
                        <!-- descrition box html content -->

                        <p>
                            <?php if ($this->data['data_product']['other_info']!="") {
                            $other_info = json_decode($this->data['data_product']['other_info'], true);
                            foreach ($other_info as $k1 => $thongtinkhac) {?>
                            <div class="bodytooltip"><?php echo stripcslashes($thongtinkhac['title']); ?> <?php echo stripcslashes($thongtinkhac['content'])?></div>
                            <?php }} ?>
                        </p>
                        <!-- descrition box html content -->
                    </div>
                    <p class="desc-title">
                        <span>
                            <strong>Mô tả sản phẩm</strong>
                        </span><br>
                            <?php echo $this->data['data_product']['short_info']!="" ? $this->data['data_product']['short_info'] : "";?>
                    </p>
                    <div class="desc-fulltext textcontent">
                    </div>
                </div>
                <div class="product-page-cart quickcart-area clearfix product-page-cart">
            <a href="javascript:void(0)"> <button class="dathang-btn btn btn-success buy_now" data-id="<?php  echo $this->data['data_product']['id'];?>"><?php echo lang('buy_now');?></button> </a>
            <input type="hidden" id="update_cart" value="" />
            <input type="hidden" class="hidden_product" id="hidden_product" value="<?php echo ($this->data['data_product']['name']!="") ? $this->data['data_product']['name'] : "";?>" />
                            <input type="hidden" class="hidden_code" value="<?php echo $this->data['data_product']['code'];?>" />
                                    <div class="product-quantity" style="display:none">
                                        <input id="product-quantity" disabled="disabled" type="text" value="1" min="1"  class="form-control input-sm">
                                    </div>
                                    <input type="hidden" class="hidden_price" id="hidden_price" value="<?php if ($this->data['sale']==true) { 
                                        echo $this->data['data_product']['saleoff'];
                                    }else{
                                        echo $this->data['data_product']['price'];
                                    }?>">
                 </div>
            </div>
            <!-- end col-right -->
        </div>
        <!-- tab info -->
        <div class="row">
            <ul class="nav nav-tabs tabs_info">
                <li class="active"><a data-toggle="tab" href="#home" style="color: #777171;font-size: 15px;font-weight: bold;">TÍNH NĂNG</a></li>
                <?php if ($_web['options']['comment']==1){
                    echo '<li><a data-toggle="tab" href="#menu1" style="color: #777171;font-size: 15px;font-weight: bold;">BÌNH LUẬN</a></li>';} ?>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <?php echo ($this->data['data_product']['full_info']!="") ? html_entity_decode($this->data['data_product']['full_info']) : "";?>
                </div>
                <?php if ($_web['options']['comment']==1){
                echo '<div id="menu1" class="tab-pane fade">
                    <h3><div class="fb-comments" data-href="'.base_url().$this->data['data_product']['alias'].'-'.$this->data['data_product']['id'].'.htm'.'" data-width="1200" data-numposts="5"></div></h3>
                </div>'; } ?>
            </div>
        </div>
        <!-- end tab info -->
    </div>
    <!-- end content main -->
    <!-- sản phẩm liên quan -->
    <div class="container product_home">
         <!-- san phẩm mới -->
            <div class="row">
                <div class="title_block_ctsp">
                    <h3 class="saleb-icon">Sản phẩm liên quan</h3>
                </div>
            </div>
             <!-- product_list -->
            <div class="row">
            <?php if (!empty($this->data['product_lienquan'])) {
                    foreach ($this->data['product_lienquan'] as $key => $truongminh) {?>
                <!-- pruduct_item -->
                <div class="pro-item">
                <div class="pro-label-hot" <?php
                                                        if($truongminh['state']!="" && isset($truongminh['state'])){
                                                          $state = explode("|",$truongminh['state']);
                                                          // dd($state);
                                                          foreach ($state as $k1 => $v1) {
                                                              if ($v1!=null) {
                                                                if ($v1==6) {
                                                                  echo "style='background: url(../../../images/icon-qua-tang.png) no-repeat;
    width: 89px;
    height: 28px;
    position: absolute;
    bottom: 120px;
    right: 0px;
    z-index: 10;'";
                                                                }elseif ($v1==1) {
                                                                    echo "style='background: url(../../../images/icon-hot.png) no-repeat;
    width: 42px;
    height: 42px;
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 10;'";
                                                                }elseif ($v1==2) {
                                                                    echo "style='background: url(../../../images/icon-sale.png) no-repeat;
    width: 42px;
    height: 42px;
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 10;'";
                                                                }elseif ($v1==3) {
                                                                    echo "style='background: url(../../../images/newProperty.png) no-repeat;
    width: 42px;
    height: 42px;
    position: absolute;
    top: 0px;
    left: 0px;
    z-index: 10;'";
                                                                }
                                                            }
                                                        }
                                                        }?>
                    ></div>
                    <div class="pro-img">
                        <a href="<?php echo base_url().$truongminh['alias'].'-'.$truongminh['id'].'.htm' ?>">
                            <img src="<?php echo getImage($truongminh['image'],'230','180','zc=2') ?>" alt="<?php echo stripcslashes($truongminh['name']);?>">
                        </a>
                    </div>
                    <div class="light-bottom"></div>
                    <h2>
                        <a href="<?php echo base_url().$truongminh['alias'].'-'.$truongminh['id'].'.htm' ?>" title="<?php echo stripcslashes($truongminh['name']);?>" rel="bookmark"><?php echo stripcslashes($truongminh['name']);?></a>
                    </h2>
                    <?php if($truongminh['price']!="" && !empty($truongminh['price'])){ ?>
                    <p class="pro-price"><?php echo ($sale==true) ? number_format($truongminh['saleoff'],0,'','.') : number_format($truongminh['price'],0,'','.');?> VNĐ</p>
                    <?php }else{echo "<p class='pro-price'>Liên hệ</p>";} ?>

                    <a href="javascript:void(0);" class="quick-buy add2cart" data-id="<?php echo $truongminh['id'];?>">
                        <div class="act-pro">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <a href="javascript:void(0)" class="quick-buy add2cart" data-id="<?php echo $truongminh['id'];?>">Thêm vào giỏ hàng</a>

                            <input type="hidden" class="hidden_product" value="<?php echo $truongminh['name'];?>" />
                            <input type="hidden" class="hidden_code" value="<?php echo $truongminh['code'];?>" />
                            <input type="hidden" class="hidden_price" value="<?php if ($sale==true) { 
                                                                                        echo $truongminh['saleoff'];
                                                                                    }else{
                                                                                        echo $truongminh['price'];
                                                                                    }?>">

                                      <?php echo ($sale==true) ? '<div class="sticker sticker-sale"></div>' : '';?>
                                      <?php 
                                      if ($truongminh['state']!="") {
                                          $pos = strpos($truongminh['state'], "|3|");
                                          if ($pos !== false) {
                                            echo '<div class="sticker sticker-new"></div>';
                                          }
                                      }
                                      ?>
                        </div>
                    </a>
                    <!-- tooltip -->
                    <div class="info-tooltippro tooltip" >
                        <div class="headertooltip">
                            <p class="titles"><?php echo stripcslashes($truongminh['name']);?></p>
                            <?php if($truongminh['price']!="" && !empty($truongminh['price'])){ ?>
                    <p class="prices"><?php echo ($sale==true) ? number_format($truongminh['saleoff'],0,'','.') : number_format($truongminh['price'],0,'','.');?> VNĐ</p>
                    <?php }else{echo "<p class='prices'>Liên hệ</p>";} ?>
                        </div>
                         <?php if ($truongminh['other_info']!="") {
                            $other_info = json_decode($truongminh['other_info'], true);
                            foreach ($other_info as $k1 => $thongtinkhac) {
                            // dd($thongtinkhac); ?>
                            <div class="bodytooltip"><?php echo stripcslashes($thongtinkhac['title']); ?> <?php echo stripcslashes($thongtinkhac['content'])?></div>
                        <?php }} ?>
                    </div>
                    <!-- tooltip -->
                </div>
                <!-- end product item -->
                <?php }
            }else{echo "<p style='color:red;font-weight: bold;font-size: 15px;'>Không có sản phẩm nào liên quan</p>";} ?>
            </div>
            <!-- end list product -->
            <!-- kt san pham mới -->
    </div>
    <!-- kt sản phẩm liên quan -->
   
                       