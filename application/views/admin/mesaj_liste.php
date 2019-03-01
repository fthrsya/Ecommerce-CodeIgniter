 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        
         <div class="page-title">
          <div>
            <h1>Mesaj Listesi
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
                      <th>Ad Soyad</th>
                      <th>Email</th>
                      <th>Telefon</th>					  
                      <th>Mesaj</th>
                      <th>Durum</th>
					  <th>Tarih</th>
					  <th>IP</th>
					  <th>Detay</th>
					  <th>Sil</th>
					 
                    </tr>
                  </thead>
				  <?php
				  foreach ($veriler as $rs)
				  {
					  ?>
                  <tbody>
                    <tr>
                      <td><?=$rs->adsoy?></td>
                      <td><?=$rs->email?></td>
                      <td><?=$rs->tel?></td>
					  <td><?=$rs->mesaj?></td>
                     
					  <td><?=$rs->durum?></td>
                      <td><?=$rs->tarih?></td>
					  <td><?=$rs->IP?></td>
					
					  <td><a href ="<?=base_url()?>admin/mesajlar/detay/<?=$rs->Id?> "class="btn btn-primary btn-xs"><i class="fa fa-refresh" aria-hidden="true"></i></td>
					  <td><a href ="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>" class="btn btn-info" onclick="return confirm('silmek istediginizden emin misiniz')" ><i class="fa fa-trash-o" aria-hidden="true"></i></td>
					  
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
	<script src="<?=base_url()?>assets/admin/js/sweetalert.min.js"></script>
	 <!-- Javascripts-->
   
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
	 
  </body>
</html>