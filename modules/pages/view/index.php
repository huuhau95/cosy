<?php require_once DIR_ROOT ."tmp/themes/menu.php";?>
<!-- <div class="container cachduoi">
<div class="row" >
	<section class="single-content col-md-12 col-sm-12 col-xs-12" style="padding: 15px 0">
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url();?>">Trang chủ</a>
			</li>
			<li class="active"><?php echo $this->data['title'];?></li>
		</ol>
		<div class="clearfix"></div>
		<?php 
		if (isset($this->flash['flash_success'])) {
			echo '<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>'.lang('success').'</strong> '.$this->flash['flash_success'].'
		</div>';
	}
	?>
</section>
</div>
</div> -->

<section style="margin-top: 15px;">
<style>
	@media(min-width:320px ){
		.footer-menu ul li{
			width:100%;
		}
	}
</style>
	<div class="container cachduoi">
		<div class="row" >
			<!-- <div class="col-sm-6 bando"> -->
				<?php echo html_entity_decode($this->data['content']);?>
			<!-- </div> -->
			<!-- <div class="col-sm-6 formlienhe"> -->
				<?php if($this->data['contact_form']!="") echo $this->data['contact_form'];?> 
			<!-- </div> -->
			<hr>
		</div>
	</div>
</section>



