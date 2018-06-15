<aside class="sidebar sidebar-default">
  <!-- header -->
  <div class="header-logo">
    <a class="navbar-logo" href="<?php echo base_url() . 'users/manager/view/' . Session::get('id'); ?>">
    <span class="logo-lg"><b>THẾ GIỚI</b> RÈM ĐẸP</span>
    </a>
  </div>
  <!-- end header -->
  <!-- slidebar menu-->
  <div class="next-nav">
  <div class="next-nav__panel next-nav__panel--primary next-nav__panel--has-scrollbars" id="sidebar--nav" style="height: 351px;">
  <nav>
  <ul class="nav nav-pills nav-stacked next-nav__list next-nav__list--primary sidebar-menu ">
  <li class="treeview">
    <a href="<?php echo base_url() . 'home/home/index'; ?>">
    <i class="text-muted-mod fa fa-lg fa-fw fa-home"></i>
    <span class="menu-name">Trang chủ</span>
    </a>
  </li>
  <li class=" active menu-is-selected">
    <a href="javascript:void(0);" class="menu-parent">
    <i class="text-muted-mod fa fa-lg fa-fw fa-credit-card"></i>
    <span class="menu-name">Danh mục</span>
    <i style="float: right" class="fa fa-sort-desc" aria-hidden="true"></i>
    </a>
    <ul class="treeview-menu" style="display: block;">
    <li style="display:none">
    <a href="<?php echo base_url() . 'contact/contact/index'; ?>">
      <div>Khách đăng ký</div>
    </a>
     </li>
     <?php if ($_SESSION['group_id'] == '20') {?>
  <li>
    <a href="<?php echo base_url() . 'pages/pages/index'; ?>">
      <div>Trang tĩnh</div>
    </a>
  </li>
  <?php if (($_SESSION['group_id'] == '20') || $_SESSION['group_id'] == '22') {?>
  <li>
    <a href="<?php echo base_url() . 'banners/banners/index'; ?>">
      <div>Baner trang chủ</div>
    </a>
  </li>
  <?php }?>
  <?php if ($_SESSION['group_id'] == '20') {?>
  <li>
    <a href="<?php echo base_url() . 'product/category/index'; ?>">
      <div>Danh mục sản phẩm</div>
    </a>
  </li>
  <?php }?> 
  <li>
    <a href="<?php echo base_url() . 'product/product/index'; ?>">
      <div>Sản phẩm</div>
    </a>
  </li>
   <li>
    <a href="<?php echo base_url() . 'posts/categories/index'; ?>">
      <div>Danh mục bài viết</div>
    </a>
  </li>
   <li>
    <a href="<?php echo base_url() . 'posts/posts/index'; ?>">
      <div>Bài viết</div>
    </a>
  </li>
  <li>
    <a href="<?php echo base_url() . 'media/media/index'; ?>">
      <div>Quản lý file</div>
    </a>
  </li>
  <?php if (($_SESSION['group_id'] == '20') || $_SESSION['group_id'] == '22') {?>
  <li>
    <a href="<?php echo base_url() . 'add/add/index'; ?>">
      <div>Ảnh quảng cáo</div>
    </a>
  </li>
  <?php }?>
  <?php }?>
  <?php if (($_SESSION['group_id'] == '20') || $_SESSION['group_id'] == '22') {?>
  <li>
    <a href="<?php echo base_url() . 'menu/position/index'; ?>">
      <div>Điều hướng menu</div>
    </a>
  </li>
  <?php }?>
  <?php if (($_SESSION['group_id'] == '20') || $_SESSION['group_id'] == '22') {?>
  <li>
    <a href="<?php echo base_url() . 'options/options/index'; ?>">
      <div>Tùy chỉnh phân trang</div>
    </a>
  </li>
  <?php }?>
  <?php if ($_SESSION['group_id'] == '20') {?>
  <li style="display:none">
    <a href="<?php echo base_url() . 'product/manager/index'; ?>">
      <div>Sản phẩm hiển thị trang chủ</div>
    </a>
  </li>
  <?php }?>
  <!--
    <li>
        <a href="<?php echo base_url() . 'order/order/index'; ?>">
            <div>Danh sách đơn hàng</div>
        </a>
      </li> -->
  <?php if ($_SESSION['group_id'] == '20') {?>
  <li>
    <a href="<?php echo base_url() . 'users/manager/index'; ?>">
      <div>Quản lý người dùng</div>
    </a>
  </li>
  <?php }?>
  <?php if ($_SESSION['group_id'] == '20') {?>
  <li>
    <a href="<?php echo base_url() . 'users/grouppermission/index'; ?>">
      <div>Nhóm người dùng</div>
    </a>
  </li>
  <?php }?>
  <?php if ($_SESSION['group_id'] == '20') {?>
  <li>
    <a href="<?php echo base_url() . 'users/permission/index'; ?>">
      <div>Vai trò và quyền hạn</div>
    </a>
  </li>
  <?php }?>
  <?php if (($_SESSION['group_id'] == '20') || $_SESSION['group_id'] == '22') {?>
  <li style="display:none">
    <a href="<?php echo base_url() . 'video/video/index'; ?>">
      <div>Video</div>
    </a>
  </li>
  <li>
    <a href="<?php echo base_url() . 'conment/conment/index'; ?>">
      <div>Comment</div>
    </a>
  </li>
  <?php }?>
  <?php if (($_SESSION['group_id'] == '20') || $_SESSION['group_id'] == '22') {?>
  <li>
    <a href="<?php echo base_url() . 'settings/settings/index'; ?>">
      <div>Cài đặt</div>
    </a>
  </li>
  <?php }?>
  <div class="nav-user">
    <div class="account-info">
      <a href="javascript:void(0)" id="user_click" title="Cấu hình" style="padding: 10px 10px 10px 20px;background: #209E91" data-toggle="collapse" data-target="#list-action-user" id="show-action-user" class="collapsed">
      <img class="profile-pic img-circle"  style="height: 28px;width: 28px;" src="<?php echo (Session::get('avatar') && Session::get('avatar') != '') ? base_url_cloud() . 'cdn/' . Session::get('avatar') : base_url_cloud() . 'tmp/public/images/logo.png'; ?>">
      <span style="margin-left:5px"><?php echo Session::get('username'); ?></span>
      <span id="caret-menu-user"><i class="fa fa-angle-up caret-menu-icon" aria-hidden="true"></i></span>
      </a>
      <div id="list-action-user" class="collapse" style="height: 0px;">
        <ul class="nav-user-sub">
          <li>
            <a onclick="your_account()" href="<?php echo base_url() . 'users/manager/view/' . Session::get('id'); ?>">
            <i class="fa fa-lg fa-fw fa-user" aria-hidden="true"></i>
            <span><?php echo lang('profile'); ?></span>
            </a>
          </li>
          <li>
            <a onclick="logout()" href="<?php echo base_url() . 'login/login/logout'; ?>">
            <i class="fa fa-lg fa-fw fa-sign-out" aria-hidden="true"></i>
            <span><?php echo lang('signout'); ?></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</aside>