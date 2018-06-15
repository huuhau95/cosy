  <style type="text/css">
   .sua,.bv li a {
        text-decoration: none;
        color: #333;
   }
   .sua li a:hover {
    color: #3399ff;
   }
   .bv li a {
        text-decoration: none;
        color:white;
   }

 </style>
  <div class="container-fluid" id="abc">
        <div class="row">
            <div class="col-sm-8">
                <div class="mthn">
                    <h3 style="font-size: 20px;line-height: 2">Tìm được <span style="color: red"> <?php echo count($this->data['count_search']) ?></span> kết quả tìm kiếm</h3>
                </div>
                <?php
if (!empty($this->data['search'])) {
	foreach ($this->data['search'] as $key => $value) {
		?>
                                      <div class="hdhn">
                                          <h3> <a href="<?php echo base_url() . $value['alias'] . "-n" . $value['id'] . ".htm"; ?>"><?php echo $value['title'] ?></a></h3>
                                          <p><?php echo $value['description'] ?></p>
                                      </div>
                                      <?php
}
}
?>
<!-- tim kiem -->
<div class="pagination">
    <ul class="pagination justify-content-center">
      <?php
if ($this->data['pagination']) {
	echo $this->data['pagination'];
}
?>
    </ul>
</div>


            </div>
           <div class="col-sm-4 timkiem" style="">
            <div class="sua">
                <div class="td">
                    <h2>SỬA MÁY TÍNH – MÁY IN</h2>
                </div>
                <ul>
                    <?php
if (!empty($_web['menu_right'])) {
	foreach ($_web['menu_right'] as $menu_right) {
		?>
                               <li> <a href="<?php echo $menu_right['link']; ?>" title=""><?php echo $menu_right['title']; ?></a></li>
                              <?php

	}
}
?>
                </ul>


            </div>
            <div class="bvm">
                <h2>BÀI VIẾT MỚI NHẤT</h2>
                <div class="bv">
                    <ul>
                        <?php
if (!empty($this->data['posts_new'])) {
	foreach ($this->data['posts_new'] as $key => $postsnew) {
		?>
                                     <li><a href="<?php echo base_url() . $postsnew['alias'] . "-n" . $postsnew['id'] . ".htm"; ?>" title=""><?php echo $postsnew['title'] ?></a></li>
                                <?php
}
}
?>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>