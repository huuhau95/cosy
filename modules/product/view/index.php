<?php require_once DIR_ROOT ."tmp/themes/menu.php";?>

<!-- content_main -->
<div class="container">
    <div class="row">
        <h1 class="tittle_bolocsp" style="margin: 10px 0px;font-size: 16px;font-weight: bold;color: #00415D;"><?php echo stripcslashes($this->data['cate']['title']); ?></h1>
    </div>
    <div class="row">
        <!-- product_list -->
        <div class="row product_home">
            <?php
            if (isset($this->data['data'])) {
              foreach ($this->data['data'] as $key => $product) {?>  
                <!-- pruduct_item -->
                <div class="pro-item">
                    <div class="pro-label-gift" <?php
                    if($product['state']!="" && isset($product['state'])){
                      $state = explode("|",$product['state']);
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
            <div class="pro-img" >
                <a href="<?php echo base_url().$product['alias'].'-'.$product['id'].'.htm' ?>">
                    <img src="<?php echo getImage($product['image'],'230','180','zc=2') ?>" alt="<?php echo stripcslashes($product['name']);?>">
                </a>
            </div>
            <div class="light-bottom"></div>
            <h2>
                <a href="<?php echo base_url().$product['alias'].'-'.$product['id'].'.htm' ?>" title="<?php echo stripcslashes($product['name']);?>" rel="bookmark"><?php echo stripcslashes($product['name']);?></a>
            </h2>
            <?php if($product['price']!="" && !empty($product['price'])){ ?>
                <p class="pro-price"><?php echo ($sale==true) ? number_format($product['saleoff'],0,'','.') : number_format($product['price'],0,'','.');?> VNĐ</p>
            <?php }else{echo "<p class='pro-price'>Liên hệ</p>";} ?>
            <a href="javascript:void(0);" class="quick-buy add2cart" data-id="<?php echo $product['id'];?>">
                <div class="act-pro">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    <a href="javascript:void(0);" class="quick-buy add2cart" data-id="<?php echo $product['id'];?>">Thêm vào giỏ hàng</a>

                    <input type="hidden" class="hidden_product" id="hidden_product" value="<?php echo ($product['name']!="") ? $product['name'] : "";?>" />
                    <input type="hidden" class="hidden_code" value="<?php echo $product['code'];?>" />
                    <div class="product-quantity" style="display:none">
                      <input id="product-quantity" disabled="disabled" type="text" value="1" min="1"  class="form-control input-sm">
                  </div>
                  <input type="hidden" class="hidden_price" id="hidden_price" value="<?php if ($this->data['sale']==true) { 
                      echo $product['saleoff'];
                      }else{
                          echo $product['price'];
                      }?>">
                  </div>
              </a>
              <!-- tooltip -->
              <div class="info-tooltippro tooltip">
                <div class="headertooltip">
                    <p class="titles"><?php echo stripcslashes($product['name']);?></p>
                    <?php if($product['price']!="" && !empty($product['price'])){ ?>
                        <p class="prices"><?php echo ($sale==true) ? number_format($product['saleoff'],0,'','.') : number_format($product['price'],0,'','.');?> VNĐ</p>
                    <?php }else{echo "<p class='prices'>Liên hệ</p>";} ?>
                </div>
                <?php if ($product['other_info']!="") {
                    $other_info = json_decode($product['other_info'], true);
                    foreach ($other_info as $k1 => $thongtinkhac) {?>
                        <div class="bodytooltip"><?php echo stripcslashes($thongtinkhac['title']); ?> <?php echo stripcslashes($thongtinkhac['content'])?></div>
                    <?php }} ?>
                </div>
                <!-- tooltip -->
            </div>
            <!-- end product item -->
        <?php }} ?>
        <?php if ($this->data['pagination']) { echo $this->data['pagination']; }?>
    </div>

    
    
    <!-- end list product -->
</div>
</div>
    <!-- end content main -->