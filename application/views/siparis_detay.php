
				
      <?php 
			$this->load->view('uye_paneli');
		?>
				<section class="header_text sub">
			
				<h4><span>Sipariş Detay</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					
					<div class="span8">
						<table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
					 <th style="width: 10px">Nr</th>
				
                      <th>Adı</th>
                      <th>Fiyat</th>
                      <th>Miktar</th>
                      <th>Tutar</th>
					  <th>İptal</th>
					 
                    </tr>
                  </thead>
				  <?php
				  $rn=0;
				  $toplam=0;
				  foreach ($veriler as $rs)
				  {
				
					  $rn++;
					  $toplam+=$rs->tutar;
					  ?>
                  <tbody>
                    <tr>
					  <th style="width: 10px"><?=$rn?></th>
					
                      <td><?=$rs->adi?></td>
                      <td><?=$rs->fiyat?></td>
					  <td><?=$rs->adet?></td>  
                      <td><?=$rs->tutar?></td>
					
                      
					  <td><a href ="<?=base_url()?>uye/iptal/<?=$rs->Id?>"  ><button class="btn btn-danger"  type="button">İptal</button></td>
					  
                    </tr>
                    
              
                  </tbody>
				  <?php }?>
				  
                </table>
						Sipariş Toplam: <?=$toplam?> TL	
					</div>				
				</div>
			</section>	