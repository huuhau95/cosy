<div class="col-md-3 colection">
	<h4>Danh mục</h4>
	<p class="text-muted">Danh mục được sử dụng để nhóm các sản phẩm lại với nhau.</p>
</div>

<div class="col-md-9">
	<div class="panel panel-default panel-light">
		<div class="panel-body list-collection">

			<div class="no-colection-found form-group">
				<fieldset>
					<legend>Chọn danh mục</legend>
				<ul >
					<?php 
					if ($this->data['data']['id']) {
						if (!empty($this->data['data_category'])) {
							listCategoriesController($this->data['data_category'],$this->data['data']['category'],'123131',0,'-',0);
						}
					}else{
						if (!empty($this->data['data_category'])) {
							listCategoriesController($this->data['data_category'],null,'product',0,'-',0);
						}
					}
					?>
				</ul>
				</fieldset>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.list-categories{
		padding: 0;
	}
	ul li{
		list-style: none;
	}
</style>
