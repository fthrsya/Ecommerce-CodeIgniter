 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> ürün resim ekleme</h1>
            <p>resim ekle</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Forms</li>
              <li><a href="<#">Sample Forms</a></li>
            </ul>
          </div>
        </div>
		<div class="row">
		<div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>resim yukle</li>
              
            </ul>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>" >
                      <fieldset>
						   <div class="form-group">
							<label class="control-label">Yüklenecek resim dosyası türleri (gif|jpg|png) max boyut : 1024x1024 </label>
							<?php if ($this->session->flashdata("mesaj")) { ?>
							<div class="bs-component">
								<div class="alert alert-dismissible alert-danger">
								<button class="close" type="button" data-dismiss="alert">×</button><strong>HATA </strong><a 
								class="alert-link" href="#"><?=$this->session->flashdata("mesaj")?></a>
								</div>
							</div>
							<?php } ?>
							<input class="form-control" name="resim" type="file" multiple="multiple" placeholder="ürün resmi yukle">
							</div>
						  <div class="card-footer">
						<button class="btn btn-primary icon-btn" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Resmi Yükle</button>
						&nbsp;&nbsp;&nbsp;
					</div>
                      </fieldset>
                    </form>
					<br><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" width="150" height="150">
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