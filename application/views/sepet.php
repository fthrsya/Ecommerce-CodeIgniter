
				
    
				<section class="header_text sub">
			
				<h4><span> Sepet</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					
					<div class="span8">
						<table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
					 <th style="width: 10px">Nr</th>
					  <th></th>
                      <th>Adı</th>
                      <th>Fiyat</th>
                      <th>Miktar</th>
                      <th>Tutar</th>
					  <th>Sil</th>
					 
                    </tr>
                  </thead>
				  <?php
				  $rn=0;
				  $toplam=0;
				  foreach ($verii as $rs)
				  {
					  $rn++;
					  $tutar=$rs->satfiyat*$rs->adet;
					  $toplam+=$tutar;
					  
					  ?>
                  <tbody>
                    <tr>
					  <th style="width: 10px"><?=$rn?></th>
					 <td height="50" width="50"> 
					 <a href="<?=base_url()?>home/urundetay/<?=$rs->urun_id?>">
					  <img  src="<?=base_url()?>uploads/<?=$rs->urunresmi?>" />
					  </a>
					  </td>
                      <td><?=$rs->urunadi?></td>
                      <td><?=$rs->satfiyat?></td>
                      <td><?=$rs->adet?></td>
                      <td><?=($rs->satfiyat*$rs->adet)?></td>  
					  <td>
					  <a href ="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>"  onclick="return confirm('silmek istediginizden emin misiniz')" ><button class="btn btn-danger" type="button">Sil</button></a></td>
					  
                    </tr>
                    
              
                  </tbody>
				  <?php }?>
                </table>
							
						Toplam:<?=$toplam?>	TL
							
							<?php if($toplam!=0) { ?>
							<form method="post" action="<?=base_url()?>uye/satinal">
							<input type="hidden" name="toplam" value="<?=$toplam?>">
							<button href="<?=base_url()?>uye/satinal " type="submit" class="btn btn-success" > Satınal</button>
							
							
 							</form>
							<?php } else echo" <br>Hiç Bir ürün yok , Lütfen anasayfadan ürün ekleyiniz." ?>
					</div>				
				</div>
			</section>	
			</div>
			</section>	