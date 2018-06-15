<div class="form-group" id="ht-cre-product-name">
	<label class="control-label strong" for="name">Tên sản phẩm</label> <span class="asterisk">*</span>
	<div class="controls">
		<input class="form-control" placeholder="Nhập tên sản phẩm" id="title" value="<?php if(isset($this->data['data']['name'])) echo stripcslashes($this->data['data']['name']); ?>" name="title" type="text" required>
		<span class="help-block"><span class="field-validation-valid help-block" ></span></span>
	</div>
</div>
