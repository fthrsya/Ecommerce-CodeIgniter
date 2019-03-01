
				
      <?php $this->load->view('_header');
			$this->load->view('uye_paneli');
		?>
				<section class="header_text sub">
			
				<h4><span>Siparişlerim</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					
					<div class="span8">
						 <table class="table table-hover table-bordered" id="sampleTable">
							  <thead>
								<tr>
								 <th style="width: 10px">Nr</th>
							
								  <th>Tarih</th>
								  <th>Adı</th>
								  <th>Tutar</th>
								  <th>Şehir</th>
								  <th>Durumu</th>
								  <th>Detay</th>
								</tr>
							  </thead>
							  <?php
							  $rn=0;
							  $toplam=0;
							  foreach ($veriler as $rs)
							  {
									$rn++;
								
								  
								  ?>
							  <tbody>
								<tr>
								  <th style="width: 10px"><?=$rn?></th>
								
								  <td><?=$rs->tarih?></td>
								  <td><?=$rs->adsoy?></td>
								  <td><?=$rs->tutar?></td>  
								  <td><?=$rs->sehir?></td>
								  <td><?=$rs->siparisdurumu?></td>
								  
								  <td><a href ="<?=base_url()?>uye/siparisdetay/<?=$rs->Id?>" ><button class="btn btn-warning"  type="button">Detay</button></a></td>
								  
								</tr>
                    
              
                  </tbody>
				  <?php }?>
                </table>
					</div>				
				</div>
			</section>	
			</div>
			</section>	