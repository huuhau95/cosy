<div class="form-group" id="ht-cre-product-content">
<label class="control-label strong required" for="content"><?php echo lang('content');?></label>
	<textarea id="content" name="content" class="form-control" style="height:250px;">
		<?php if(isset($this->data['data_detail']['full_info'])) echo $this->data['data_detail']['full_info']; ?>
	</textarea>
	<script type="text/javascript">CKEDITOR.replace('content');</script>
</div>