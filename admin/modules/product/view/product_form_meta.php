<div class="col-md-4 col-lg-3">
    <h4>Tags</h4>
    <p class="text-muted">Tag có thể được dùng để phân loại các sản phẩm.</p>
</div>
<div class="col-md-8 col-lg-9">
    <div class="panel panel-default panel-light" id="ht-cre-product-tags">
        <div class="panel-body">
            <div class="form-group">
                <label class="control-label strong" for="Tags">Tags</label>
                <div class="controls">
                    <input placeholder="Nhập từ khóa" class="form-control" id="meta_keyword" name="meta_keyword" value="<?php if(isset($this->data['data_detail']['meta_keyword'])) echo $this->data['data_detail']['meta_keyword']; ?>" />
                </div>
            </div>


            <label for="description" class="control-label required"><?php echo lang('meta_description');?></label>
            <textarea class="form-control" rows="4" id="meta_description" placeholder="<?php echo lang('meta_description_required');?>" data-counter="300" name="meta_description" cols="50"><?php if(isset($this->data['data_detail']['meta_description'])) echo $this->data['data_detail']['meta_description']; ?></textarea>

            <div class="clearfix"></div>
            <div class="form-group">
                <label class="control-label font_weight">Bạn có thể chọn những tag đã được sử dụng</label>
                <div class="controls">
                </div>
            </div>
        </div>
    </div>
</div>




<div class="col-md-4 col-lg-3">
    <h4>Tối ưu SEO</h4>
    <p class="text-muted">Thiết lập tiêu đề trang, thẻ mô tả, đường dẫn. Những thông tin này xác định cách bài viết xuất hiện trên công cụ tìm kiếm.</p>
</div>
<div class="col-md-8 col-lg-9">
    <div class="panel panel-default panel-light">
        <div class="panel-body">
            <div class="form-group" id="editSeo">
                <div class="row">
                    <div class="col-sm-9 col-lg-10">
                        <h4 style="margin-bottom:0px;">
                            <label class="control-label strong">Xem trước kết quả tìm kiếm</label>
                        </h4>
                    </div>
                    <div class="col-sm-3 col-lg-2 seo-config">
                        <a href="javascript:void(0)" style="font-size: 0.99em;" id="ht-cre-product-seo">Tùy chỉnh SEO</a>
                    </div>
                </div>
                <div class="search-engine-preview">
                    <div class="google-preview hide">
                        <span class="google-title"></span>
                        <div class="google-url">
                            <?php echo base_url_fontend(); ?><span></span>
                        </div>
                        <div class="google-description"></div>
                    </div>
                    <p>Xin hãy nhập Tiêu đề và Mô tả để xem trước kết quả tìm kiếm của sản phẩm này.</p>
                </div>
            </div>
            <div class="seo-section" style="display: none;">
                <div class="form-group">
                    <div>
                        <label class="control-label strong" for="MetaTitle">Thẻ tiêu đề</label>
                        <span class="pull-right">Số ký tự đã dùng: <b>0</b>/70</span>
                    </div>
                    <div class="controls">
                        <input class="form-control seo-placeholder" id="MetaTitle" name="MetaTitle" type="text" value="" placeholder="" maxlength="70">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <label class="control-label strong" for="MetaDescription">Thẻ mô tả</label>
                        <span class="pull-right">Số ký tự đã dùng: <b >0</b>/160</span>
                    </div>
                    <div class="controls">
                        <textarea class="form-control seo-placeholder" cols="20" id="MetaDescription" name="" placeholder="" rows="2" maxlength="160"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label strong" for="Alias">Đường dẫn / Alias</label> <span class="asterisk">*</span>
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo base_url_fontend(); ?></span>
                            <input class="form-control seo-placeholder" id="Alias" name="" placeholder="" type="text" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-4 col-lg-3">
    <h4>Trạng thái</h4>
    <p class="text-muted">Cho phép thiết lập thời gian sản phẩm được hiển thị.</p>
</div>
<div class="col-md-8 col-lg-9">
    <div class="panel panel-default panel-light">
        <div class="panel-body">
            <div class="form-group">
                <div class="controls">
                   <!--  <div class="radio">
                        <label>
                            <input onclick="setPublishDateNow()" name="active" type="radio" value="true" checked="checked"> Hiển thị
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input onclick="hidePublishDate()" name="active" type="radio" value="false"> Ẩn
                        </label>
                    </div> -->
                    <label onclick="setPublishDate()" class="show-publish-time control-label font_weight" href="javascript:void(0)" style="text-decoration:underline;cursor:pointer;" id="ht-cre-product-calender">Đặt lịch hiển thị</label>
                </div>
                <label style="display:none;" class="control-label strong publish-date">Thời gian hiển thị</label>
                <div style="display:none;" class="controls publish-date">
                    <div class="input-group date pull-left col-sm-2">
                        <input class="form-control" data-rel="datepicker" id="Date" name="Date" placeholder="Chọn ngày" style="padding-right:2px;" type="text" value="">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                    <label style="margin-top:7px;" class="control-label pull-left">
                        &nbsp;thời gian&nbsp;
                    </label>
                    <div class="input-group date pull-left col-sm-2">
                        <div class="input-group">
                            <input class="form-control" data-minute-step="10" data-rel="timepicker" data-show-meridian="true" data-template="dropdown" id="Time" name="Time" placeholder="Chọn giờ" style="padding-right:2px" type="text" value="">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                    </div>
                    <label onclick="hidePublishDate()" class="hide-publish-time control-label" href="javascript:void(0)" style="text-decoration:underline;cursor:pointer;margin-left:10px;margin-top:7px;">Hủy</label>
                </div>
            </div>
        </div>
    </div>
</div>

