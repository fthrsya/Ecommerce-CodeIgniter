<section class="header_text sub">

	 <?php  foreach($urun as $rs)
									{ ?> 
							
																					
									
								
							<?php } ?> 
			
				<h4><span>Ürün Detay</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="" class="thumbnail" data-fancybox-group="group1" title="<?=$rs->aciklama?>"><img alt="" src="<?=base_url()?>uploads/<?=$veri[0]->resim?>"></a>												
							
							</div>
							<div class="span5">
							<form action="<?=base_url()?>uye/sepete_ekle" method="post" class="form-inline">
								<address>
									<strong>Adı :</strong> <span><?=$veri[0]->adi?></span><br>
									
									<strong>Grubu :</strong> <span><?=$veri[0]->grubu?></span><br>
									<strong>Marka:</strong> <span><?=$veri[0]->marka?></span><br>
									<strong>Stok : <?=$veri[0]->stok?></strong> <br>								
								</address>									
								<h4><strong>Fiyat : <?=$veri[0]->sfiyat?></strong></h4>
							</div>
							<div class="span5">
								
									
									<input type="hidden" name="urunid" value="<?=$veri[0]->Id?>" >
									<label>Adet:</label>
									<input type="number" name="miktar" value="1" placeholder="Qty." min="1" max="<?=$veri[0]->stok?>" >
									<button class="btn btn-inverse" type="submit">Sepete Ekle</button>
								</form>
								<br> <?=$this->session->flashdata("mesaj")?> <br> 
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<?php  foreach($yorum as $rs) { ?>
									<ul>
										<li><a href=""><i class="fa fa-user"></i> <?=$rs->adsoy?></a></li>
										<li><a href=""><i class="fa fa-clock-o"></i> <?=$rs->tarih?></a></li>
										
									</ul>
									<p>
									
									<li><b> </b> <?=$rs->yorum?> </p>   </li>
									
									<?php } ?>	
					<div class="contact-form">
					<?=$this->session->flashdata("mesaj")?>
					<?=$this->session->flashdata("email_sent")?>
	    				<h2 class="title text-center">Yorumunuzu yazın</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form  class="contact-form row" name="bize_yazin" method="post" action="<?=base_url()?>home/yorum_kaydet" >  
				            <div class="form-group col-md-6">
							
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="Ad soyad">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
								<input type="hidden" name="uid" class="form-control"  value="<?=$veri[0]->Id?>">
								
				            <div class="form-group col-md-12">
				                <textarea name="yorum"  required="required" class="form-control" rows="8" placeholder="mesajınızı yazınızı"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gonder">
				            </div>
				        </form>
						<?=$this->session->flashdata("mesaj")?>
	    			</div>									
							</div>						
							
					</div>
					
				</div>
			</section>	