<!-- col_right -->
<form action="" method="post">
  <div class="col_right">

    <!-- banner_top -->
    <div class="banner_top">
      <div class="page-heading page-heading-md dashboard-header">
        <h2 class="header__main">
          <span class="breadcrumb hidden-xs">
            <i class="fa fa-cog fa-spin"></i>
          </span>
          <span>Cài đặt</span>
          <!-- <span class="title">Thêm mới danh mục</span> -->
        </h2>
        <div class="header-right">
          <button class="btn btn-default" name="ok" type="submit" value="Submit" style="background: #47a314;color: white"><?php echo lang('save'); ?></button>
        </div>
      </div>
    </div>
    <!-- end banner_top -->
    <!-- col_main -->

    <div class="content_col_right">
      <div class="container-fluid-md" style="margin-bottom:20px;margin-top: 50px;">
        <!-- info_website -->
        <div class="row">
          <div class="col-md-4 col-lg-3 margin-md-bottom">
            <h4>Thông tin website</h4>
            <p class="text-muted">Thông tin được sử dụng để Dũng và khác hàng liên hệ đến bạn.</p>
          </div>
          <div class="col-md-8 col-lg-9">
            <div class="panel panel-default panel-light table-users">
              <div class="panel-body">

                <div class="form-group">
                  <label class="control-label strong" for="seo_title">Tên website</label>
                  <div class="controls">
                    <input class="form-control" placeholder="Nhập tên website" id="seo_title" data-counter="120" name="seo_title" type="text" value="<?php echo (isset($this->data['info']['seo_title'])) ? $this->data['info']['seo_title'] : ''; ?>">
                    <div class="has-error">
                      <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="settings-title">
                  <label class="control-label strong" for="slogan">Tiêu đề trang chủ</label>
                  <div class="controls">
                    <input class="form-control" placeholder="Nhập tiêu đề trang chủ" id="slogan" data-counter="120" name="slogan" type="text" value="<?php echo (isset($this->data['info']['slogan'])) ? $this->data['info']['slogan'] : ''; ?>">
                    <div class="has-error">
                      <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="settings-description">
                  <label class="control-label strong" for="seo_description">Mô tả trang chủ</label>
                  <div class="controls">
                    <input class="form-control" placeholder="Nhập một mô tả để nâng cao xếp hạng trên công cụ tìm kiếm như Google" id="seo_description" data-counter="120" name="seo_description" type="text" value="<?php echo (isset($this->data['info']['seo_description'])) ? $this->data['info']['seo_description'] : ''; ?>"></input>
                    <div class="has-error">
                      <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                    </div>
                  </div>
                </div>

                <div class="form-group" id="settings-title">
                  <label class="control-label strong" for="seo_keywords">Từ khóa SEO</label>
                  <div class="controls">
                   <input class="form-control" id="seo_title" placeholder="SEO Keywords (maximum 60 characters, separate by &quot;,&quot; character)" data-counter="60" name="seo_keywords" type="text" value="<?php echo (isset($this->data['info']['seo_keywords'])) ? $this->data['info']['seo_keywords'] : ''; ?>">
                   <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-6">

                  <div class="form-group hide">
                    <label class="control-label strong" for="contact_email">Email quản trị</label>
                    <div class="controls">
                      <input class="form-control" placeholder="Nhập email quản trị" id="contact_email" name="contact_email" type="text" value="<?php echo (isset($this->data['info']['email'])) ? $this->data['info']['email'] : ''; ?>">
                      <div class="has-error">
                        <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                      </div>
                      <p class="text-muted">Email được sử dụng cho Dũng liên lạc với bạn</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 hide">
                  <div class="form-group">
                    <label class="control-label strong" for="email_support">Email gửi thông báo</label>
                    <div class="controls">
                      <input class="form-control" placeholder="Nhập email gửi thông báo" id="email_support" name="email_support" type="text" value="<?php echo (isset($this->data['info']['email_support'])) ? $this->data['info']['email_support'] : ''; ?>">
                      <div class="has-error">
                        <span class="help-block"><span class="field-validation-valid help-block"></span></span>
                      </div>
                      <p class="text-muted">Email này được sử dụng để gửi thông báo và nhận liên hệ từ các khách hàng của bạn</p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end info_website -->
      <!-- info_contact -->
      <div class="row">
        <div class="col-md-4 col-lg-3 margin-md-bottom">
          <h4>Thông tin liên hệ</h4>
          <p class="text-muted">Thông tin được sử dụng trong các thông báo về đơn hàng và địa chỉ để liên hệ đến cửa hàng.</p>
        </div>
        <div class="col-md-8 col-lg-9">
          <div class="panel panel-default panel-light table-users">
            <div class="panel-body">

              <div class="form-group">
                <label class="control-label strong" for="name">Tiêu đè baner</label>
                <div class="controls">
                  <input class="form-control" placeholder="Nhập tên kinh doanh" id="name" name="name" type="text" value="<?php echo (isset($this->data['info']['name'])) ? $this->data['info']['name'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label strong" for="name">Mô tả ngắn</label>
                <div class="controls">
                  <input class="form-control" placeholder=" giới thiệu công ty" id="name" name="content" type="text" value="<?php echo (isset($this->data['info']['conten'])) ? $this->data['info']['conten'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
               <div class="form-group">
                <label class="control-label strong" for="contact_hotline">Hotline 1</label>
                <div class="controls">
                  <input class="form-control" placeholder="Nhập số hotline" id="seo_title" name="contact_hotline" type="text" value="<?php echo (isset($this->data['info']['hotline'])) ? $this->data['info']['hotline'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label strong" for="contact_phone">Hotline 2</label>
                <div class="controls">
                  <input class="form-control" placeholder="Nhập điện thoại liên hệ" id="contact_phone" name="contact_phone" type="text" value="<?php echo (isset($this->data['info']['phone'])) ? $this->data['info']['phone'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
               <div class="form-group">
                <label class="control-label strong" for="contact_phone">Email</label>
                <div class="controls">
                  <input class="form-control" placeholder="Nhập điện thoại liên hệ" id="contact_phone" name="email_footer" type="text" value="<?php echo (isset($this->data['info']['email'])) ? $this->data['info']['email'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label strong" for="contact_phone">Website</label>
                <div class="controls">
                  <input class="form-control" placeholder="Nhập tên website" id="contact_phone" name="domain" type="text" value="<?php echo (isset($this->data['info']['domain'])) ? $this->data['info']['domain'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>

              <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="contact_address">Địa chỉ 1</label>
                <div class="controls">
                  <input class="form-control" id="contact_address" placeholder="Nhập địa chỉ trụ sở chính" name="contact_address" type="text" value="<?php echo (isset($this->data['info']['address'])) ? $this->data['info']['address'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>

              <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Địa chỉ 2</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Địa chỉ văn phòng đại diện" name="address2" type="text" value="<?php echo (isset($this->data['info']['address2'])) ? $this->data['info']['address2'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Địa chỉ 3</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Địa chỉ văn phòng đại diện" name="address3" type="text" value="<?php echo (isset($this->data['info']['address3'])) ? $this->data['info']['address3'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
                <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Link youtube</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Link youtube" name="youtube" type="text" value="<?php echo (isset($this->data['info']['link_youtube'])) ? $this->data['info']['link_youtube'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
                <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Link facebook</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="link facebook" name="facebook" type="text" value="<?php echo (isset($this->data['info']['link_facebook'])) ? $this->data['info']['link_facebook'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
                <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Google</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Link google +" name="google" type="text" value="<?php echo (isset($this->data['info']['link_google'])) ? $this->data['info']['link_google'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
               <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Tên ngân hàng 1</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Tên ngân hàng" name="namebank1" type="text" value="<?php echo (isset($this->data['info']['namebank'])) ? $this->data['info']['namebank'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Số tài khoản</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Số tài khoản" name="id_bank1" type="text" value="<?php echo (isset($this->data['info']['id_bank1'])) ? $this->data['info']['id_bank1'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Chủ tài khoản</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Chủ tài khoản tài khoản" name="adminbank1" type="text" value="<?php echo (isset($this->data['info']['adminbank'])) ? $this->data['info']['adminbank'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
                <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Tên ngân hàng 2</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Tên ngân hàng" name="nam_bank2" type="text" value="<?php echo (isset($this->data['info']['nam_bank2'])) ? $this->data['info']['nam_bank2'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Số tài khoản</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Số tài khoản" name="id_bank2" type="text" value="<?php echo (isset($this->data['info']['id_bank2'])) ? $this->data['info']['id_bank2'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
              <div class="form-group" id="settings-contact">
                <label class="control-label strong" for="address2">Chủ tài khoản</label>
                <div class="controls">
                  <input class="form-control" id="address2" placeholder="Chủ tài khoản tài khoản" name="adminbank2" type="text" value="<?php echo (isset($this->data['info']['adminbank2'])) ? $this->data['info']['adminbank2'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="row hide">
        <div class="col-md-4 col-lg-3 margin-md-bottom">
          <h4>Google Analytics</h4>
          <p class="text-muted">Nhập mã Google Analytics để bạn có thể theo dõi các thống kê về truy cập của website.</p>
        </div>

        <div class="col-md-8 col-lg-9">
          <div class="panel panel-default panel-light table-users">
            <div class="panel-body">

              <div class="form-group" id="settings-ga">
                <label class="control-label strong" for="google_analytics">Mã Google Analytics</label>
                <div class="controls">
                  <input class="form-control valid" id="google_analytics" placeholder="Nhập mã Google Analytics tại đây" name="google_analytics" type="text" value="<?php echo (isset($this->data['info']['google_analytics'])) ? $this->data['info']['google_analytics'] : ''; ?>">
                  <p><a href="https://analytics.google.com" target="_blank"><?php echo lang('path_analytics'); ?></a></p>
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>

              <div class="form-group" id="settings-ga">
                <label class="control-label strong" for="google_site_verification"><?php echo lang('google_verify'); ?></label>
                <div class="controls">
                  <input class="form-control" id="google_site_verification" placeholder="Google Site Verification" name="google_site_verification" type="text" value="<?php echo (isset($this->data['info']['google_site_verification'])) ? $this->data['info']['google_site_verification'] : ''; ?>">
                  <p><a target="_blank" href="https://ga-dev-tools.appspot.com/account-explorer/"><?php echo lang('view_id_analytics'); ?></a></p>
                  <div class="has-error">
                    <span class="help-block"><span class="field-validation-valid help-block" ></span></span>
                  </div>
                </div>
              </div>

              <label for="file_google" class="control-label"><?php echo lang('json_analytics'); ?></label> <a href="https://console.developers.google.com/?pli=1" target="_blank"><?php echo lang('link'); ?></a>
              <br>
              <div style="position:relative;">
                <a class='btn btn-default' href='javascript:;'>
                  Choose File...
                  <input type="file" name="file_source" id="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                </a>
                &nbsp;
                <span class='label label-info' id="upload-file-info" style="max-width: 350px; position: absolute; top: 41px; left: 0px;overflow: hidden;"><?php echo (isset($this->data['info']['google_file_json'])) ? $this->data['info']['google_file_json'] : ''; ?></span>
              </div><br>

            </div>
          </div>
        </div>
      </div>
      <!-- end Google Analytics -->
        <!-- Facebook Pixel -->
      <div class="row hide">
        <div class="col-md-4 col-lg-3 margin-md-bottom">
          <h4>Facebook Pixel</h4>
          <p class="text-muted">Facebook Pixel giúp bạn tạo chiến dịch quảng cáo để tìm khách hàng mới.</p>
        </div>
        <div class="col-md-8 col-lg-9">
          <div class="panel panel-default panel-light table-users">
            <div class="panel-body">

              <div class="form-group">
                <label class="control-label strong" for="id_app_fb">Facebook Pixel ID</label>
                <div class="controls">
                  <input class="form-control" id="id_app_fb" placeholder="Nhập Facebook Pixcel ID tại đây" name="id_app_fb" type="text" value="<?php echo (isset($this->data['info']['id_app_fb'])) ? $this->data['info']['id_app_fb'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="help-block field-validation-valid" ></span></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label strong" for="link_fb">FanPage</label>
                <div class="controls">
                  <input class="form-control" id="link_fb" placeholder="Nhập đường dẫn Fanpage của bạn tại đây" name="link_fb" type="text" value="<?php echo (isset($this->data['info']['link_facebook'])) ? $this->data['info']['link_facebook'] : ''; ?>">
                  <div class="has-error">
                    <span class="help-block"><span class="help-block field-validation-valid" ></span></span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- end Facebook Pixel -->
      <!-- choose logo -->
      <div class="row">
        <div class="col-lg-3">
          <h4>Chọn logo và icon tab cho website</h4>
          <p class="text-muted">- Logo giúp khách hàng ấn tượng và nhận ra bạn dễ nhất.</p>
          <p class="text-muted">- Bạn chọn logo được đăng tải trước đó từ kho ảnh của mình. Nếu bạn chưa tải logo lên kho ảnh thì </p>
        </div>
        <div class="col-lg-9">
          <section >

          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient bg-header-left box-left">
             <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <div class="tab-content no-padding">
                  <div>
                      <br>


                        <div class="modal-image-choose" style="width: 50%;float: left;">
                          <p style="font-weight: bold;text-align: center;">Chọn Logo Header</p>
                            <div class="text-center">
                                  <a class="text-center" data-toggle="modal" data-target="#myModalLogo">
                                  <img src="<?php echo (isset($this->data['info']['logo']) && $this->data['info']['logo'] != '') ? base_url_cloud() . 'timthumb.php?src=' . base_url_cloud() . 'cdn/' . $this->data['info']['logo'] . '&h=150&w=210&zc=2' : base_url() . 'tmp/public/images/img.png'; ?>" class="logo-website load-img" alt="" style="width: 210px;height: 150px;">
                                  </a>
                                  <h5 class="text-center"><a href="" class="del-image-choose-logo" style="color: #FF5722;font-weight:bold;"><i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo lang('delete'); ?> </a></h5>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="myModalLogo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="label-model-folder-img">
                                       <?php echo lang('choose_logo'); ?>
                                    </h4>
                                  </div>
                                  <div id="loadMediaModel" class="modal-body" data-mess-one="<?php echo lang('warning_choose_img'); ?>" data-mess-two="<?php echo lang('warning_choose_img_one'); ?>" data-title="logo" >
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('close'); ?></button>
                                    <button type="button" class="btn btn-primary choose_img"><?php echo lang('choose'); ?></button>
                                  </div>
                                </div>
                              </div>
                            </div><!--END MODAL-->
                        </div>


                        <div class="modal-image-choose" style="width: 50%;float: left;">
                          <p style="font-weight: bold;text-align: center;">Chọn Logo Footer</p>
                            <div class="text-center">
                                  <a class="text-center" data-toggle="modal" data-target="#myModalFavicon">
                                  <!-- <img src="<?php echo (isset($this->data['info']['icon']) && $this->data['info']['icon'] != '') ? base_url_cloud() . 'cdn/' . $this->data['info']['icon'] : base_url() . 'tmp/public/images/img.png'; ?>" class="logo-favicon load-img" alt="" style="width: 210px;height: 150px;"> -->

                                  <img src="<?php echo (isset($this->data['info']['icon']) && $this->data['info']['icon'] != '') ? base_url_cloud() . 'timthumb.php?src=' . base_url_cloud() . 'cdn/' . $this->data['info']['icon'] . '&h=150&w=210&zc=2' : base_url() . 'tmp/public/images/img.png'; ?>" class="logo-favicon load-img" alt="" style="width: 210px;height: 150px;">
                                  </a>
                                  <h5 class="text-center"><a href="" class="del-image-choose-favicon" style="color: #FF5722;font-weight:bold;"><i class="fa fa-trash-o" aria-hidden="true"></i> <?php echo lang('delete'); ?> </a></h5>
                            </div>
                            <!-- Modal -->
                              <div class="modal fade" id="myModalFavicon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title" id="label-model-folder-img">
                                         <?php echo lang('choose_favicon'); ?>
                                      </h4>
                                    </div>
                                    <div id="loadMediaModelfavicon" class="modal-body" data-mess-one="<?php echo lang('warning_choose_img'); ?>" data-mess-two="<?php echo lang('warning_choose_img_one'); ?>" data-title="favicon" >
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo lang('close'); ?></button>
                                      <button type="button" class="btn btn-primary choose_img"><?php echo lang('choose'); ?></button>
                                    </div>
                                  </div>
                                </div>
                              </div><!--END MODAL-->
                        </div>
                  </div>
                </div>
              </div>
              <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.box -->

        </section>
        <!-- left col -->
        </div>
      </div>
      <!-- end choose logo -->
      <hr class="bottom-section-hr">
  <div class="container-fluid-md">
    <div class="clear-fix" style="float:right">
      <button class="btn btn-default btn-submit pull-right" name="ok" type="submit" value="Submit"><span><?php echo lang('save'); ?></span></button>
    </div>
  </div>
      </div>
      <!-- end info_contact -->




    </div>
  </div>

<!-- end col_right -->
</form>