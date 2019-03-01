 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        
         <div class="page-title">
          <div>
            <h1>Üye Listesi
			</h1>
			
            <ul class="breadcrumb side">
             <!-- Buton linkini ekle fonkisyonuna gidecek şekilde oluşturduk</a>--> 
             <a class="btn btn-primary btn-xs " href="<?=base_url()?>admin/admin/ekle"><i class="fa fa-plus" aria-hidden="true"></i> Üye Ekle</a>
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
                      <th>Ad Soyad</th>
                      <th>Email</th>
                      <th>Şifre</th>
                      <th>Yetki</th>
                      <th>Durum</th>
					  
					  
					  
					
					  <th>Düzenle</th>
					  <th>Sil</th>
					 
                    </tr>
                  </thead>
				  <?php
				  foreach ($admin as $rs)
				  {
					  ?>
                  <tbody>
                    <tr>
                      <td><?=$rs->adsoy?></td>
                      <td><?=$rs->email?></td>
                      <td><?=$rs->sifre?></td>
                      <td><?=$rs->yetki?></td>
					  
                       <td><?=$rs->durum?></td>
                      
					  
					 
					  <td><a href ="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?> "class="btn btn-primary btn-xs"><i class="fa fa-refresh" aria-hidden="true"></i></td>
					  <td><a href ="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" class="btn btn-info" onclick="return confirm('silmek istediginizden emin misiniz')" ><i class="fa fa-trash-o" aria-hidden="true"></i></td>
					  
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