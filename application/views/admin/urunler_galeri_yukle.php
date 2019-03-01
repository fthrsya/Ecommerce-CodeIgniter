 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> ürün galeri ekleme</h1>
            <p>galeri ekle</p>
          </div>
          <div>
           
          </div>
        </div>
		<div class="row">
		<div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>galeri yukle</li>
              
            </ul>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>" >
                      <fieldset>
						   <div class="form-group">
							<label class="control-label">Yüklenecek resim dosyası türleri (gif|jpg|png) max boyut : 1024x1024 </label>
							
							<?php if ($this->session->flashdata("mesaj")) { ?>
							<div class="bs-component">
								<div class="alert alert-dismissible alert-danger">
								<p><?=$this->session->flashdata("mesaj")?></p>
								</div>
							</div>
							<?php } ?>
							
							<input class="form-control" name="resim" type="file" placeholder="ürün resmi yukle" onchange="this.form.submit()">
							</div>
						  <div class="card-footer">
						<button class="btn btn-primary icon-btn" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Resmi Yükle</button>
						&nbsp;&nbsp;&nbsp;
					</div>
                      </fieldset>
                    </form>
					<br>
					<?php foreach($veriler as $rs)  { ?>
					<img src="<?=base_url()?>Uploads/<?=$rs->resim?>" width="150" height="150">
					<a href ="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>" onclick="return confirm('silmek istediginizden emin misiniz')" >sil</a>
					<!-- ürün ıd - resim id -->
					<?php } ?>
					
                  </div>
				  
                </div>
               
                    </div>
                  </form>
				  
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