<div class="form-group">
	<a href="javascript:;" for="description" class="link_description_short">Thêm mô tả ngắn</a>
</div>

<div class="form-group hide_description_short required" id="div-summary" style="display: none">
	<label class="control-label strong" for="Summary">Mô tả ngắn</label>
	<textarea class="form-control" rows="4" id="description" placeholder="Mô tả ngắn" data-counter="300" name="description" cols="50"><?php if(isset($this->data['data']['short_info'])) echo stripcslashes($this->data['data']['short_info']); ?></textarea>
</div>