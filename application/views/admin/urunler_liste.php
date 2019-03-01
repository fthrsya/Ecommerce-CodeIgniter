	<?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        
         <div class="page-title">
          <div>
            <h1>Ürün Listesi
			</h1>
            <ul class="breadcrumb side">
             <!-- Buton linkini ekle fonkisyonuna gidecek şekilde oluşturduk</a>--> 
             <a class="btn btn-primary btn-xs " href="<?=base_url()?>admin/urunler/ekle"><i class="fa fa-plus" aria-hidden="true"></i> Ürün Ekle</a>
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
                      <th>Adı</th>
                      <th>Kategori</th>
                      <th>A.Fiyat</th>
                      <th>S.Fiyat</th>
					  <th>Stok</th>
                      <th>Resim</th>
					  <th>Galeri</th>
					 
					  <th>Düzenle</th>
					  <th>Sil</th>
					 
                    </tr>
                  </thead>
				  <?php
				  foreach ($veriler as $rs)
				  {
					  ?>
                  <tbody>
                    <tr>
                      <td><?=$rs->adi?></td>
                      <td><?=$rs->katadi?></td>
                      <td><?=$rs->afiyat?></td>
                      <td><?=$rs->sfiyat?></td>
					  <td><?=$rs->stok?></td>
					  <td><?php if ($rs->resim){ ?>  
							<a href ="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>"  > <img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="40" height="40"</a>
						 
					  <?php } else { ?>
                      <a href ="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" >Resim yükle</a>
					  <?php  }	 ?></td>
                      
					  <td>
					  <a href ="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->Id?>" >galeri yukle</a>
					  </td>
					  
					  
					  <!--düzenle-->
					  <td><a href ="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?> "class="btn btn-primary btn-xs"><i class="fa fa-refresh" aria-hidden="true"></i></td>
					  <!--sil-->
					  <td><a href ="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>" onclick="return confirm('silmek istediginizden emin misiniz')" class="btn btn-danger" ><i class="fa fa-trash-o" aria-hidden="true"></i></td>
					  
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