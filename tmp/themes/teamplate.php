<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="fb:app_id" content="1980113638901616" />
	<?php echo ($this->_title != '') ? $this->_title : '<title>' . $_web['settings']['seo_title'] . '</title>' . "\n"; ?>
	<?php echo ($this->_description != '') ? $this->_description : '<meta name="description" content="' . $_web['settings']['seo_description'] . '">' . "\n"; ?>
	<?php echo ($this->_keywords != '') ? $this->_keywords : '<meta name="keywords" content="' . $_web['settings']['seo_keywords'] . '">' . "\n"; ?>
	<?php echo ($this->_author != '') ? $this->_author : '' . "\n"; ?>
	<link rel="shortcut icon" href="<?php echo (isset($_web['settings']['icon']) && $_web['settings']['icon']) ? $_web['base_url_cdn'] . $_web['settings']['icon'] : ''; ?>" type="image/x-icon" />
	<!-- Fonts START -->
    <!-- main -->
    <link href="<?php echo base_url() . 'tmp/public/' ?>css/reset.css" rel="stylesheet">
    <link href="<?php echo base_url() . 'tmp/public/' ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() . 'tmp/public/' ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() . 'tmp/public/' ?>css/owl.carousel.min.css">
    <link href="<?php echo base_url() . 'tmp/public/' ?>css/style.css" rel="stylesheet">
    <!-- File style include here -->
    <!-- endmain -->

    <?php echo ($this->appendCss != '') ? $this->appendCss : ''; ?>
    <?php echo ($this->_appendPluginsModCss != '') ? $this->_appendPluginsModCss : ''; ?>
	  <?php echo ($this->_appendCss != '') ? $this->_appendCss : ''; ?>

  	<script type="text/javascript">
    	var baseUrl =  '<?php echo base_url(); ?>';
  	</script>
  	<!-- TRACKING GOOGLE -->
 	<?php
if (isset($_web['settings']['google_analytics']) && $_web['settings']['google_analytics'] != "") {
	echo "<script>
    			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    			  ga('create', '" . $_web['settings']['google_analytics'] . "', 'auto');
    			  ga('send', 'pageview');

    			</script>";
}
?>

</head>

<body>
    <?php require_once "header.php";?>
    <?php 
        if ($_web["uri"]["mod"]=="home") {
          require_once "slider.php";
        }
     ?>
    <section>
        <?php require_once DIR_MODULES . $_web['uri']['mod'] . "/view/" . $this->_fileView . ".php";?>
    </section>
  <?php require_once "product_new.php";?>

  <?php 
     if ($_web["uri"]["mod"]=="home") {
        require_once "reason.php";
    }
  ?>
	<?php require_once "customer.php";?>
    <!-- main-->
    
    <!-- main -->
    <?php require_once "footer.php";?>
    <!-- js -->
    <script src="<?php echo base_url() . 'tmp/public/' ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() . 'tmp/public/' ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() . 'tmp/public/' ?>js/owl.carousel.min.js"></script>

    <script src="<?php echo base_url() . 'tmp/public/' ?>js/main.js"></script>
    <!-- end -->
    <?php echo ($this->appendJs != '') ? $this->appendJs : ''; ?>
	 <?php echo ($this->_appendPluginsModJs != '') ? $this->_appendPluginsModJs : ''; ?>
	 <?php echo ($this->_appendJs != '') ? $this->_appendJs : ''; ?>
	<!-- Cấm Xóa -->
    <!-- chat -->
    <!-- end -->
</body>
</html>

