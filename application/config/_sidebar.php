<section class="main-content">
				
				<div class="row">						
					<div class="span3 col">
						<div class="block">	
						
							<?php foreach ($kategori as $rs) { $pid=$rs->Id;  ?><ul class="nav nav-header">
								
                <?php  ; if($rs->parent_id==0){?><a href="<?=base_url()?>home"><?=$rs->adi?>  </a>
				
				
				<?php foreach ($kategori as $rs1) { $pid=$rs->Id;  ?>
				<?php if($rs1->parent_id==$pid){?><li><a href="<?=base_url()?>home"> <?=$rs1->adi?></a></li><?php } } ?>
                   
                  <?php }?>
				</ul>
				
				
				
				
               


			   <?php  }	?>	
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Ürünlerimiz</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="<?=base_url()?>home/urundetay/10"><img src="<?=base_url()?>uploads/Aktor-Dedigin-Nedir-ki_1507281707_1000x1000.jpg" ></a><br/>
													
												</div>
											</li>
										</ul>
									</div> <?php  foreach($urun as $rs)
									{ ?> 
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													
							
																					
									<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" ></a><?=$rs->adi?>
								
							
												</div>
											</li>
										</ul>
									</div><?php } ?> 
								</div>
							</div>
						</div>
						
					</div>