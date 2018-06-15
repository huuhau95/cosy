
<div class="form-group">
	<h4>
		<label class="control-label strong">Đặt giá</label>
	</h4>
	<div class="row">
		<div class="col-sm-6" id="ht-cre-product-price">
			<label class="control-label font_weight">Giá </label>
			<div class="controls">
				<div class="input-group">
					<span class="input-group-addon">₫</span>
					<!-- <input class="form-control" id="Variant_Price" name="" type="text" value="0"> -->
					<input class="form-control price" id="price" placeholder="<?php echo lang('product_placeholder'); ?>" value="<?php if(isset($this->data['data']['price'])) echo $this->data['data']['price']; ?>" name="price" type="text" required/>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<label class="control-label font_weight">Chiết khấu</label>
			<div class="controls">
				<div class="input-group">
					<span class="input-group-addon">%</span>
					<input class="form-control price" id="Variant_CompareAtPrice" name="discount" placeholder="Chiết khấu" type="text" onkeypress="return keyPhone(event);"  value="<?php if(isset($this->data['data']['discount'])) echo  $this->data['data']['discount']; ?>" onkeyup="handleChange(this);" <?php echo isset($this->data['data']['discount']) && $this->data['data']['discount']!=""?"":"disabled" ?> />
				</div>
			</div>
		</div>
		<div class="col-sm-3" id="ht-cre-product-price">
			<label class="control-label font_weight">Giá SALE OFF</label>
			<div class="controls">
				<div class="input-group">
					<span class="input-group-addon">₫</span>
					<input class="form-control new_price" placeholder="Giá khuyến mãi" value="<?php if(isset($this->data['data']['discount_price'])) echo  $this->data['data']['discount_price']; ?>" name="discount_price" type="text" <?php echo isset($this->data['data']['discount_price']) && $this->data['data']['discount_price']!=""?"":"disabled" ?> />
				</div>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-sm-6">
			<label for="name" class="control-label required" style="font-weight: 500;padding-top: 5px;"><?php echo lang('timestart_sale_off');?></label>
			<div class="input-group date">
				<label for="from" class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</label>
				<input type="text" id="from" class="form-control pull-right" name="time_start" value="<?php if(isset($this->data['data']['time_start'])) echo $this->data['data']['time_start']; ?>" required <?php echo isset($this->data['data']['time_start']) && $this->data['data']['time_start']!=""?"":"disabled" ?>/>
			</div>
		</div>
		<div class="col-sm-6">
			<label for="name" class="control-label required" style="font-weight: 500;padding-top: 5px;"><?php echo lang('timeend_sale_off');?></label>
			<div class="input-group date">
				<label for="to" class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</label>
				<input type="text" id="to" class="form-control pull-right" name="time_end" value="<?php if(isset($this->data['data']['time_end'])) echo $this->data['data']['time_end']; ?>" required <?php echo isset($this->data['data']['time_end']) && $this->data['data']['time_end']!=""?"":"disabled" ?>/>
			</div>
		</div>
	</div>
	<div class="controls col-sm-12" style="padding-top: 20px">
		<div class="checkbox">
			<label>
				<input id="Variant_Taxable" name="" type="checkbox" value="true">
				<input name="" type="hidden" value="false"> Giá đã bao gồm VAT
			</label>
		</div>
	</div>
</div>

<div id="modelDelete" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo lang('notification'); ?></h4>
        </div>
        <div class="modal-body">
          <p><?php echo lang('delete_messager');?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo lang('cancel');?></button>
          <a href="" id="agree_del" class="btn btn-success"><?php echo lang('agree');?></a>
        </div>
      </div>
    </div>
</div>