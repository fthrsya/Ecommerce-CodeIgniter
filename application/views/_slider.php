<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						
						 <?php  foreach($urun as $rs)
									{ ?> 
						<li>
							<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->bannerresim?>" >
								<div class="intro">
								<h1><?=$rs->adi?></h1>
								<p><span><?=$rs->sfiyat?> TL</span></p>
								
								<p><span>İlgili ürünün ayrıntıları için tıklayın</span></p>
							</div>
							</a>
							
						</li>
						<?php } ?> 
					</ul>
					
					
				</div>
			
				
			</section><br>
			<section class="header_text">
				<marquee >Sitemize Hoşgeldiniz İyi Alışverişler ...</marquee >
			</section>