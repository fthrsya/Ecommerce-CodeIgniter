<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Giriş Sayfası</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Hoşgeldiniz</h1>
		
      </div>
	   
      <div class="login-box">
	
        <form class="login-form" action="<?=base_url()?>admin/login/login_ol" method="post">
			<h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Giriş</h3>
          <div class="form-group">
            <label class="control-label">Kullanıcı Adı</label>
            <input name="email" required class="form-control"  type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Şifre</label>
            <input name="sifre" required class="form-control"  type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Oturumu Açık Bırak</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">Parolayı Unuttum</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Giriş Yap</button>
			
          </div>
		  
		  <?php if ($this->session->flashdata("mesaj")){?>
			
			<?=$this->session->flashdata("mesaj")?>
		  <?php } ?>
		  
		  
		  
        </form>
		            
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Parolayı unuttum ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i>Giriş Sayfasına Dön</a></p>
          </div>
        </form>
		
    </section>
	
  </body>
  <script src="<?=base_url()?>assets/admin/js/jquery-2.1.4.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/plugins/pace.min.js"></script>
  <script src="<?=base_url()?>assets/admin/js/main.js"></script>
</html>