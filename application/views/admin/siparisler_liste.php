 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        
         <div class="page-title">
          <div>
            <h1>Siparişler Listesi
			</h1>
          
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
								  
								  <td><a href ="<?=base_url()?>admin/siparisler/siparisdetay/<?=$rs->Id?>" class="btn btn-info"  ><i class="fa fa-edit-o" aria-hidden="true"></i></td>
								  
								</tr>
                    
              
                  </tbody>
				  <?php }?>
                </table>
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