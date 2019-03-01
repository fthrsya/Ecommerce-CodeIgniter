<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?=$veri[0]->description?>">
		<meta name="keywords" content="<?=$veri[0]->keywords?>">
		<title><?=$sayfa?> <?=$veri[0]->adi?></title>
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?=base_url()?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url('/favicon.ico')?>" />
		<link href="<?=base_url()?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?=base_url()?>assets/themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?=base_url()?>assets/themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?=base_url()?>assets/themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?=base_url()?>assets/themes/js/superfish.js"></script>	
		<script src="<?=base_url()?>assets/themes/js/jquery.scrolltotop.js"></script>
		
		
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							
							<li><a href="<?=base_url()?>uye/hesabim">Hesabım</a></li>
							<li><a href="<?=base_url()?>uye/sepetim">Sepetim</a></li>					
							<li><a href="<?=base_url()?><?php  if ($this->session->uye_session==NULL ) {
								 echo "home/login_ol";
								}
								 else {
									  echo "uye/hesabim";
									  
									} ?> "><i class="fa fa-lock"></i>
								<?php if ($this->session->uye_session==NULL ) {
								 echo "Giriş Yap";
								}
								 else {
									 
									  echo $this->session->uye_session["adsoy"];
									  
									}
								
								?></a></li>	
<li><a <?php  if ($this->session->uye_session==NULL ) { ?>style="visibility:hidden" <?php } ?> href="<?=base_url()?>uye/login_cik"><i  class="fa fa-shopping-cart"></i> Çıkış</a></li>								
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?=base_url()?>" class="logo pull-left"><img src="<?=base_url()?>assets/themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
						<?php
							$anasayfa=null;
							$hakkimizda=null;
							$iletisim=null;
							$bize_yazin=null;
							$blog=null;
							
							
							if($menu=="anasayfa")
								$anasayfa="active";
							if($menu=="Hakkimizda")
								$hakkimizda="active";
							if($menu=="iletisim")
								$iletisim="active";
							if($menu=="bize_yazin")
								$bize_yazin="active";
							if($menu=="blog")
								$blog="active";
							
							
							
							?>
							<li><a href="<?=base_url()?>" class="<?=$anasayfa?>">Anasayfa</a></li>				
								
																						
							<li><a href="<?=base_url()?>home/hakkimizda " class="<?=$hakkimizda?> ">Hakkımızda</a></li>			
							<li><a href="<?=base_url()?>home/bize_yazin" class="<?=$bize_yazin?>">Bize yazın</a></li>
							<li><a href="<?=base_url()?>home/iletisim" class="<?=$iletisim?>">İletişim</a></li>
							
							
						</ul>
					</nav>
				</div>
			</section>	