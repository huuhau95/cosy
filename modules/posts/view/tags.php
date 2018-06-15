<style type="text/css" media="screen">
  .container  a {
      text-decoration: none;
    }
    .demochinh p{
        text-align: justify;
    }
</style>
<div class="container">
    <p style="padding: 10px 0 0 30px; font-size: 18px;"><a href="<?php echo base_url(); ?>">Trang Chủ ></a>Tags</p>
    <div class="col-sm-8">
        <div class="col-sm-12">
           <a href="<?php echo base_url() . $this->data['price_voucher']['alias'] . "-n" . $this->data['price_voucher']['id'] . ".htm"; ?>"><img src=" <?php echo getImage($this->data['price_voucher']['thumbnail'], '634', '409', 'zc=1') ?> " alt="" style="max-width: 100%; margin-top: 14px;"></a>
        </div>
        <div class="col-sm-12">
            <h4 class="h4tinmoi">Tags: <span style="color: red; text-transform: capitalize;"><?php echo $_GET['tag'] ?></span> </h4>
            <?php
if (!empty($this->data['tag'])) {
	foreach ($this->data['tag'] as $key => $posts) {
		?>
                            <div class="col-sm-12 demochinh">
                                <div class="col-sm-4" style="margin-left: -30px;">
                                   <a href="<?php echo base_url() . $posts['alias'] . "-n" . $posts['id'] . ".htm"; ?>" > <img src="<?php echo getImage($posts['thumbnail'], '140', '138', 'zc=1') ?>" alt="" style="max-width: 100%;"></a>
                                </div>
                                <div class="col-sm-8 demo">
                                    <h5><a href="<?php echo base_url() . $posts['alias'] . "-n" . $posts['id'] . ".htm"; ?>"><?php echo $posts['title'] ?></a></h5>
                                    <p><?php echo cutString(stripslashes($posts['description']), 200); ?></p>
                                    <b><i class=" glyphicon glyphicon-time"> <?php echo date('d-m-Y', $posts['create_time']) ?></i></b>
                                </div>
                            </div>
                        <?php
}
}
?>

            <div class="col-sm-7"></div>
            <div class="col-sm-12">
                 <div class="pagination pagination-sm">
                    <ul class="pagination justify-content-center">
                      <?php
if ($this->data['pagination']) {
	echo $this->data['pagination'];
}
?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-12 anlol">
            <h5>Các tin khác</h5>
            <ul >
                <?php if (!empty($this->data['posts_khac'])) {
	foreach ($this->data['posts_khac'] as $key => $other) {
		?>
                         <li><a href="<?php echo base_url() . $other['alias'] . "-n" . $other['id'] . ".htm"; ?>"><?php echo $other['title'] ?><i> <?php echo date('d-m-Y', $other['create_time']) ?></i></a></li>
                        <?php
}
}?>
            </ul>
        </div>
    </div>
    <div class="col-sm-4 demochinh">
        <div class="col-sm-12 ">
            <h4>voucher phổ biến</h4>
            <ul id="add_voucher">
                <?php
if (!empty($this->data['voucher'])) {
	foreach ($this->data['voucher'] as $key => $voucher) {
		?>
                                 <li>
                                    <a href="<?php echo base_url() . $voucher['alias'] . "-n" . $voucher['id'] . ".htm"; ?>"><?php echo $voucher['title'] ?></a>
                                    <p><i class="glyphicon glyphicon-time"> <?php echo date('d-m-Y', $voucher['create_time']) ?></i></p>
                                </li>
                            <?php
}
}
?>
            </ul>
            <button type="button" class="btn btn-default btn-xs v-add">Xem thêm</button>
        </div>
        <div class="col-sm-12">
            <h4 class="h42">ẢNH</h4>
            <?php
if (!empty($this->data['post_img'])) {
	?>
                        <a href="<?php echo base_url() . $this->data['post_img']['alias'] . "-n" . $this->data['post_img']['id'] . ".htm"; ?>" title=""><img src=" <?php echo getImage($this->data['post_img']['thumbnail'], '300', '190', 'zc=1') ?> " alt="" style="max-width: 100%;"></a>
                    <?php
}
?>

        </div>
        <div class="col-sm-12">
            <h4 class="h42">VIDEO</h4>
            <?php if (!empty($this->data['video_you'])) {
	?>
                <iframe width="100%" height="" src="https://www.youtube.com/embed/<?php echo $this->data['video_you']['link'] ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <?php
}?>

        </div>
        <div class="col-sm-12 dqt">
            <h4>ĐÁNG QUAN TÂM</h4>
            <div id="care_t">
            <?php
if (!empty($this->data['care'])) {
	foreach ($this->data['care'] as $key => $care) {
		?>
                             <div class="col-sm-12 dqht">
                                <div class="col-sm-5">
                                    <img src="<?php echo getImage($care['thumbnail'], '89', '84', 'zc=2') ?>" alt="" style="max-width: 100%; margin-left: -55px">
                                </div>
                                <div class="col-sm-7 chuat">
                                    <p><a href="<?php echo base_url() . $care['alias'] . "-n" . $care['id'] . ".htm"; ?>"><?php echo $care['title'] ?></a></p>
                                </div>
                            </div>
                        <?php
}
}
?>
         </div>
            <button type="button" class="btn btn-default btn-xs cuoitrang care hide">Xem thêm</button>
        </div>
    </div>
</div>