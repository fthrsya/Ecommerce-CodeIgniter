
				
      <?php $this->load->view('_header');
			$this->load->view('uye_paneli');
		?>
				<section class="header_text sub">
			
				<h4><span>Mesajlarım</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					
					<div class="span8">
						<?php  foreach($yorum as $rs) { ?>
									<ul>
										<li><a href=""><i class="fa fa-user"></i> <?=$rs->adsoy?></a></li>
										<li><a href=""><i class="fa fa-clock-o"></i> <?=$rs->tarih?></a></li>
										
									</ul>
									<p>
									
									<li><b> </b> <?=$rs->yorum?> </p>   </li>
									
									<?php } ?>
					</div>				
				</div>
			</section>	</div>
			</section>	