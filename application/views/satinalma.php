
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<h5><p align="center" >Teslimat bilgileri</p></h5>
							<form align="center" method="post" action="<?=base_url()?>uye/siparis_tamamla">
								Adı Soyad: <br><input type="text" name="adsoy" value="<?=$uye[0]->adsoy ?>"><br>
								Adres :<br><input type="text" name="adres"value="<?=$uye[0]->adres ?>"><br>
								Şehir:<br><input type="text" name="sehir"value="<?=$uye[0]->sehir ?>"><br>
						    	
								
								Sipariş Toplamı:<br><input type= "text" name="toplam"value="<?=$toplam ?>"><br>
								
								<button class="btn btn-primary" type="submit" value="siparisitamamla">Siparişi Tamamla</button>
							</form>
							
						</div>
					</div>
					
								
				</div>
			</div>
			