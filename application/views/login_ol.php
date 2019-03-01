
      <?php $this->load->view('_header');
			
		?>

<section class="header_text sub">
			
				<h4><span>Giriş Yap  yada  Kayıt Ol <h4></span>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>GİRİŞ</strong> FORMU</span></h4>
						
						<form method="post" action="<?=base_url()?>Home/login">
							
							
							<fieldset>
								<div class="control-group">
									<label class="control-label">Emailiniz : </label>
									<div class="controls">
										<input name="email" type="email" placeholder="Email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifreniz : </label>
									<div class="controls">
										<input name="sifre" type="password" placeholder="Şifreniz" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Giriş Yap">
									<hr>
						
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>KAYIT</strong> FORMU</span></h4>
						<form  method="post" action="<?=base_url()?>home/kayit" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Adınız Soyadınız : </label>
									<div class="controls">
										<input  name="adsoy" type="text" placeholder="Adınızı soyadınızı yazınız" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Email Adresiniz :</label>
									<div class="controls">
										<input name="email" type="email" placeholder="Email yazınız" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Şifreniz :</label>
									<div class="controls">
										<input name="durum" type="hidden" value="Aktif">
										<input  name="sifre" type="password" placeholder="Şifre yazınız" class="input-xlarge">
									</div>
								</div>							                            
								<div class="control-group">
									<p>Kayıt olduktan sonra giriş yapmayı unutmayınız !!</p>
								</div>
								<hr>
								<div ><input tabindex="9" class="btn btn-inverse large" type="submit" value="Kayıt Ol"><?=$this->session->flashdata("mesaj")?></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>