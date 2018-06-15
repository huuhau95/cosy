<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | Log in</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	 <!-- Bootstrap 3.3.6 -->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>/tmp/public/css/bootstrap.min.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>modules/login/resource/css/style.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/tmp/public/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<?php 
	$rand = rand(1, 4);
 ?>
<body>
	<div class="cont" style="background-image: url(<?php echo base_url();?>tmp/public/images/breadcrumb_bg<?php echo $rand;?>.jpg);">
		<form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="">
        <div class="demo">
            <div class="login">
                <div class="login__check"><img src="<?php echo $_SESSION['base_url_cloud'].'timthumb.php?src='.$_SESSION['base_url_cloud'].'cdn/'.$this->data['settings']['logo'].'&amp;h=73&amp;w=200&amp;zc=1';?>" alt="<?php echo $this->data['settings']['seo_title']; ?>"></div>
                <div class="login__form">
                    <div class="login__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input class="login__input name" placeholder="Username" placeholder="Email" name="email" type="text" required=""/>
                        <!-- <input class="form-control form-control-solid placeholder-no-fix" > -->
                    </div>
                    <div class="login__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input class="login__input pass form-control" placeholder="Password" id="Passwod" name="password" type="password" value="" required=""/>
                        <!-- <input class="form-control form-control-solid placeholder-no-fix" placeholder="Mật khẩu" name="password" type="password" value=""> -->
                        <i class="view-pass fa fa-eye" style="  display: none;"></i>
                    </div>
                    <button type="submit" name="login" class="login__submit">Sign in</button>
                    <!-- <button type="submit" name="login" class="btn btn-warning pull-right">Đăng nhập</button> -->
                    <p class="login__signup">Don't have an account? &nbsp;<a>Sign up</a></p>
                </div>
            </div>
        </div>
		</form>
        <div class="info_admin">
            <!-- <h1>Bộ phận CSKH: </h1> -->
            <h1>Hỗ trợ khách hàng các ngày trong tuần từ thứ 2 đến Chủ nhật (từ 8h00 – 22h00 hàng ngày)</h1>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        var animating = false,
            submitPhase1 = 1100,
            submitPhase2 = 400,
            logoutPhase1 = 800,
            $login = $(".login"),
            $app = $(".app");

        function ripple(elem, e) {
            $(".ripple").remove();
            var elTop = elem.offset().top,
                elLeft = elem.offset().left,
                x = e.pageX - elLeft,
                y = e.pageY - elTop;
            var $ripple = $("<div class='ripple'></div>");
            $ripple.css({ top: y, left: x });
            elem.append($ripple);
        };

     
    });
    $(document).ready(function() {
        $('.form-control').keyup(function() {
            if ($('#Passwod').val().length > 0) {
                $('.view-pass').show();
            } else {
                $('.view-pass').hide();
            }
        });
        $('.view-pass').mousedown(function() {
            $('#Passwod').attr('type', 'text');
        });
        $('.view-pass').mouseup(function() {
            $('#Passwod').attr('type', 'password');
        });


    });
    </script>
</body>
</html>