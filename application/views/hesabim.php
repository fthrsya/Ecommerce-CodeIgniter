
				
      <?php $this->load->view('_header');
			$this->load->view('uye_paneli');
		?>
				<section class="header_text sub">
			
				<h4><span>Hesabım</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					
					<div class="span4">
						<form method="post" action="<?=base_url()?>uye/uye_guncelle/<?=$this->session->uye_session["id"]?>">
					<fieldset>
									   <div class="form-group">
										<label class="control-label">Adı </label>
										<input class="form-control" value="<?=$veriler1[0]->adsoy?>" name="adsoy"  type="text" >
										</div>
									   <div class="form-group">
										<label class="control-label">Email</label>
										<input class="form-control" value="<?=$veriler1[0]->email?>" name="email" type="text" >
									   </div>
									   <div class="form-group">
										<label class="control-label">Şifre</label>
										<input class="form-control" value="<?=$veriler1[0]->sifre?>" name="sifre" type="text" >
									   </div>
									   <div class="form-group">
										<label class="control-label">Adres</label>
										<input class="form-control" value="<?=$veriler1[0]->adres?>" name="adres"  type="text" >
									   </div>
										<div class="form-group">
										<label class="control-label">Telefon</label>
										<input class="form-control" value="<?=$veriler1[0]->tel?>"name="tel" type="text" >
									   </div>
									   <div class="form-group"> 
										<label class="control-label">Şehir</label>
										<input class="form-control" value="<?=$veriler1[0]->sehir?>"name="sehir" type="text" >
									   </div>							
									</fieldset>			
													<button type="submit" class="btn btn-primary "> Guncelle
												</button>
					</form>
					</div>				
				</div>
			</section>
</div>
			</section>				