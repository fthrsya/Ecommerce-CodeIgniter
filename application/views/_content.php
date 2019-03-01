<div class="span9">	
							
						<ul class="thumbnails listing-products">
							   
							
							 <?php  foreach($urun as $rs)
									{ ?> 
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" ></a><?=$rs->adi?>
								</div>
							</li>
							<?php } ?> 
							
									
							
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>