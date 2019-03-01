 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        
         <div class="page-title">
          <div>
            <h1>Siparişler Listesi
			</h1>
            <ul class="breadcrumb side">
             <!-- Buton linkini ekle fonkisyonuna gidecek şekilde oluşturduk</a>--> 
             <a class="btn btn-primary btn-xs " href="<?=base_url()?>admin/urunler/ekle"><i class="fa fa-plus" aria-hidden="true"></i> Sipariş Ekle</a>
			 <?=$this->session->flashdata("mesaj")?>
            </ul>
          </div>
         
        </div>
		<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
          
		  
		  
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
					
                      
					  <td><a href ="<?=base_url()?>uye/iptal/<?=$rs->Id?>" class="btn btn-info"  ><i class="fa fa-edit-o" aria-hidden="true"></i></td>
					  
                    </tr>
                    
              
                  </tbody>
				  <?php }?>
                </table>
		  
						Sipariş Toplam: <?=$toplam?> TL
							   <form method="post" action="<?=base_url()?>admin/Siparisler/guncelle/<?=$siparisid?>">
							   <br>
								Kargo Bilgileri:
								<input type="text" name="kargo" value="<?=$siparis[0]->kargo?>"class="form-control" />
								İşlem:
								<select name="siparisdurumu" class="form-control">
								<option><?=$siparis[0]->siparisdurumu?></option>
								<option>Onayli</option>
								<option>Kargoda</option>
								<option>Tamamlandi</option>
								<option>Iptal</option>
								</select>
								Açıklama:
								<textarea name="aciklama" rows=5 cols=100 class="form-control" ><?=$siparis[0]->aciklama?></textarea>
								<button   type="submit" > Güncelle</button>
							
 							</form>
		  
              </div>
            </div>
          </div>
        </div>
      </div>
    
    <!-- Javascripts-->
    <script src="<?=base_url()?>assets/admin/js/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/plugins/pace.min.js"></script>
    <script src="<?=base_url()?>assets/admin/js/main.js"></script>
	 <!-- Javascripts-->
   
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
	 
  </body>
</html>