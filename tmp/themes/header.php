 <header id="header">
  <div id="header-inner" class="container">
    <div class="inner">
      <div id="logo">
        <a href="<?php echo base_url() ?>">
          <img src="<?php echo base_url().'tmp/public/' ?>images/logo.jpg" alt="Logo" />
        </a>
      </div><!-- /#logo -->

      <div id="header-search">
        <a class="search-icon" href="#"></a>
        <form role="search" method="get" class="search-form" action="#">
          <input type="text" value="" name="s" class="search-field" placeholder="Nhập từ khóa cần tìm kiếm...">
          <button type="submit" class="submit" title="Search">Search</button>
        </form>
      </div><!-- /#header-search -->

      <nav id="header-menu">
          <?php
            $newArrayMenu = array();
            foreach ($_web['menu'] as $value) {
              $parent = $value['parent_id'];
              $newArrayMenu[$parent][] = $value;
            }
            // dd($newArrayMenu);
            recursiveMenu($newArrayMenu);
          ?>
       <!--  <ul>
          <li><a href="#">Ghế sofa</a></li>
          <li><a href="ke-ti-vi.html">Bàn trà</a></li>
          <li><a href="ke-ti-vi.html">Kệ TiVi</a></li>
          <li><a href="ke-ti-vi.html">Nội thất khác</a></li>
          <li><a href="tin-tuc.html">Tin tức</a></li>
        </ul> -->
      </nav><!-- /#header-menu -->
    </div><!-- /.inner -->
  </div><!-- /.header-inner -->
    </header><!-- /#header -->