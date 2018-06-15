<?php require_once DIR_ROOT ."tmp/themes/menu.php";?>
<!-- BEGIN SIDEBAR & CONTENT -->
<div class="container" style="margin-top: 20px;">
<div class="row margin-bottom-40">
  <!-- BEGIN CONTENT -->
  <div class="col-md-12 col-sm-12">
    <div class="notistatus"><i class="fa fa-check" aria-hidden="true"></i>Đặt hàng thành công</div>
    <h1 style="font-size: 20pt;
    background: #dad3d3;
    padding: 7px;">Thông tin đặt hàng:</h1>
 	Mã đơn hàng: <p ><?php echo $this->data['invoice'];?></p>
    <p>&nbsp;	&#9679;	&nbsp;Thông tin chi tiết về đơn hàng sẽ được gửi đến địa chỉ email của bạn 
    Nếu không nhận được email, vui lòng kiểm tra thêm Spam/Junk hoặc Bulk mail.</p>
    <p>&nbsp;	&#9679;	&nbsp;Sau 2 ngày kể từ khi đặt mua, nếu vẫn chưa nhận được email thông báo hàng đã được vận chuyển, bạn nên chủ động liên lạc với cửa hàng theo thông tin được gửi về email. </p>
  </div>
  <!-- END CONTENT -->
</div>
</div>
<!-- END SIDEBAR & CONTENT -->
<style>
	.notistatus{
		color: green;
		    border: 1px solid #ccc;
    width: 30%;
    border-radius: 15px;
    font-size: 20pt;
    font-weight: bold;
    /* text-align: justify; */
    text-indent: 2%;
        margin-bottom: 20px;
	}
	.notistatus i{
		color: green;
	}
</style>