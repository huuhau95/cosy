<?php require_once DIR_ROOT ."tmp/themes/menu.php";?>
<!-- content_main -->
<div class="container" style="margin-top: 20px;">
<?php if (!empty($this->data['cart'])) { ?>
        <div class="row cart_gh">
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <td style="width: 41px;">STT</td>
                        <td style="width: 131px;">ẢNH</td>
                        <td style="width: 639px;">TÊN SẢN PHẨM</td>
                        <td style="width: 119px;">ĐƠN GIÁ</td>
                        <td style="width: 93px;">SỐ LƯỢNG</td>
                        <td style="width: 119px;">TỔNG</td>
                        <td style="width: 57px;">XÓA</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($this->data['cart'] as $key => $cart) { ?>
                   <tr data-identifier="<?php echo $cart->identifier;?>" data-id="<?php echo $cart->id;?>">
                        <td>1</td>
                        <td><a href="<?php echo base_url().alias($cart->name).'-'.$cart->id.'.htm';?>"><img src="<?php echo $_web['base_url_cdn'].$cart->options['image']; ?>"></a></td>
                        <td>
                            <p class="cart_ten"><a href="<?php echo base_url().alias($cart->name).'-'.$cart->id.'.htm';?>"><?php echo stripcslashes($cart->name); ?></a></p>
                            <p class="cart_masanpham">Mã sản phẩm : <span><?php echo stripcslashes($cart->code); ?></span></p>
                            <!-- <p class="cart_baohanh">Bảo hành : 36 Tháng</p> -->
                        </td>
                       <?php if($cart->price!=""){ 
                            echo "<td>".number_format($cart->price,0,'','.')."</td>";?> VNĐ
                            <?php }else{echo "<td>Lien He</td>";} ?>
                        <td>
                        <!-- <div class="product-quantity"> -->
                            <input class="form-control input-sm product_quantity" id="product-quantity" type="number" min="1" value="<?php echo $cart->quantity;?>">
                        <!-- </div> -->
                        </td>
                        <td style="font-weight: bold;text-align: center;" class="goods-page-total"><?php echo number_format($cart->total,0,'','.'); ?> VNĐ</td>
                        <td style="text-align: center;"><span class="glyphicon glyphicon-trash del-cart-checkout" data-id="<?php echo $cart->id;?>" data-identifier="<?php echo $cart->identifier;?>" style="color: white;padding: 10px;border:1px solid gray;background: gray;border-radius: 50%"></span></td>
                        <!-- class="del-cart-checkout" data-id="$cart->id" data-identifier="$cart->identifier" Dùng để xóa sản phẩm-->
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="3">&nbsp;
                            <!-- <span class="download_excel"><a href="">Tải file excel</a></span> -->
                            <span class="next_payment"><a class="paymentbtn" href="<?php echo base_url().'checkout';?>">Thanh toán</a></span>
                            <span class="next_payment"><a class="paymentbtn" href="<?php echo base_url()?>">Mua thêm sản phẩm khác</a></span>
                        </td>
                        <td colspan="4" style="text-align: center;">
                            Tổng giá trị đơn hàng :<span style="font-size: 18px;" class="red_color "> <?php echo number_format($_web['total_cart'],0,'','.'); ?></span> VNĐ
                        </td>
                    </tr>
                
                </tbody>
            </table>
        </div>
    
    <?php }else{
        echo "<p style='color: red;
    border: 1px solid #ccc;
    width: 37%;
    border-radius: 15px;
    font-size: 20pt;
    font-weight: bold;
    /* text-align: justify; */
    text-indent: 2%;
    margin-bottom: 20px;
    padding: 10px;'>Giỏ hàng của bạn đang trống</p>";
        } ?>
        </div>
    <!-- end content main -->
    