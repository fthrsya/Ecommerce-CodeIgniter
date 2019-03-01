
			
      <?php $this->load->view('_header');
			$this->load->view('_sidebar');
		?>
		
				<section class="header_text sub">
			
				<h4><span>Bize Yazın</span></h4>
				<?=$this->session->flashdata("mesaj")?>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span4">
						<div>
							<h5>İleitişm bilgileri </h5>
							<p>		<?=$veri[0]->iletisim?>	
							</p>
						</div>
					</div>
					<div class="span4">
						<p>Site Hakkındaki Görüşlerinizi ve iletmek istediginiz diger bilgileri bizimle paylaşabilirsiniz.</p>
						<form method="post" name="bize_yazin" action="<?=base_url()?>home/mesaj_kaydet" >
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Ad Soyad:</span></label>
									<div class="input">
										<input tabindex="1" size="18"  name="adsoy" required="required" type="text" value="" class="input-xlarge" placeholder="Ad soyad">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" name="email" required="required" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Mesaj:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" required="required" name="mesaj" rows="7" placeholder="Mesaj"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Gonder</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>	
			</div>
			</section>	