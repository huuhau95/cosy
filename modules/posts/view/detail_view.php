  <style type="text/css" media="screen">
      .container a{
        text-decoration: none;
      }
      .tags{
        margin-right: 5px;
      }
  </style>
   <div class="container">
    <p style="padding: 10px 0 0 30px; font-size: 18px;"><b> <a href="<?php echo base_url() ?>">Trang Chủ ></a> <a href="<?php echo base_url() . $this->data['cate_name']['alias'] . "-c" . $this->data['cate_name']['id'] . ".htm"; ?>"><?php echo $this->data['cate_name']['title'] ?></a></b></p>
    <div class="col-sm-8">
        <div class="col-sm-12 thongtinchinh">
            <b><?php echo $this->data['data_posts']['title'] ?></b>
            <p> <?php echo date('d-m-Y', $this->data['data_posts']['create_time']) ?></p>
        </div>
        <div class="col-sm-12 vanban">
            <?php echo html_entity_decode($this->data['data_posts']['content']); ?>
        </div>
        <div class="col-sm-12 namsao">
            <div class="col-sm-12" style="margin-left: -15px;">
            <p style="font-weight: bold;">Tags <i class="fa fa-tag" aria-hidden="true" style="color:blue"></i>:
                <?php if (!empty($this->data['post_tags'])) {
	foreach ($this->data['post_tags'] as $key => $tags) {
		?>
                        <a href="<?php echo base_url() . "tags.htm?" . "tag=" . $tags; ?>" class="tags">
                           <span style="padding: 5px;background: gainsboro;border-radius: 5px;">
                            <?php echo $tags; ?>
                            </span>
                       </a>
                        <?php
}
}?>
            </p>
            </div>
           <!--  <div class="col-sm-7 danhgiastar">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div> -->
        </div>
        <div class="col-sm-12">
            <a href="<?php echo $_web['advertisement']['link'] ?>"><img src="<?php echo getImage($_web['advertisement']['images'], '630', '121', 'zc=1') ?>" alt="" style="max-width: 100%; margin-top: 10px;"></a>
        </div>
        <div class="col-sm-12">
            <h5 style="padding: 10px 0; border-bottom: 1px solid #ccc">Để lại bình luận</h5>
            <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Họ và tên" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-6">
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Số điện thoại" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" id="phone" placeholder="Email" required>
                    </div>
                </div>
                <textarea class="form-control" rows="3" name="content" id="noidung"></textarea>
                <button type="button" name="submit" class="btn btn-info" style=" margin: 10px 0;" id="conment">Đăng bình luận</button>
            </form>
        </div>
        <div class="col-sm-12">
            <div class="col-sm-6 tidb">
                <h6>Tin đặc biệt</h6>
                <?php
if (!empty($this->data['posts_hot'])) {
	foreach ($this->data['posts_hot'] as $key => $hot) {
		?>
                             <p><a href="<?php echo base_url() . $hot['alias'] . "-n" . $hot['id'] . ".htm"; ?>"><?php echo $hot['title'] ?></a></p>
                            <?php
}
}
?>
            </div>
            <div class="col-sm-6 tidb">
                <h6>Tin liên quan</h6>
                <?php
if (!empty($this->data['posts_lq'])) {
	foreach ($this->data['posts_lq'] as $key => $lienquan) {
		?>
                        <p><a href="<?php echo base_url() . $lienquan['alias'] . "-n" . $lienquan['id'] . ".htm"; ?>"><?php echo $lienquan['title'] ?></a></p>
                        <?php
}

}
?>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="col-sm-12">
            <h4>voucher phổ biến</h4>
            <ul class="voucher" id="add_voucher">
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
            <button type="button" class="btn btn-default btn-xs cuoitrang care">Xem thêm</button>
        </div>
    </div>
</div>