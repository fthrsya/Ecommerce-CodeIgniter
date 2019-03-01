 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Ürün Ekleme</h1>
            <p>Yeni ürün ekleme</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              
              
            </ul>
          </div>
        </div>
		<div class="row">
		<div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Ürün Bilgilerini Giriniz</li>
              
            </ul>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet" >
                      <fieldset>
						   <div class="form-group">
							<label class="control-label">Ürün Adı</label>
							<input class="form-control" name="adi" type="text" placeholder="Ürün adını giriniz">
							</div>
						   <div class="form-group">
							<label class="control-label">Ürün alış fiyatı</label>
							<input class="form-control" name="afiyat" type="text" placeholder="Ürün alış fiyatını giriniz">
						   </div>
						   <div class="form-group">
							<label class="control-label">Ürün satış fiyatı</label>
							<input class="form-control" name="sfiyat" type="text" placeholder="Ürün satış fiyatını giriniz">
						   </div>
						   <div class="form-group">
							<label class="control-label">Keyword</label>
							<input class="form-control" name="keywords" type="text" placeholder="Keywords giriniz">
						   </div>
						   
						  <div class="form-group">
							  <label class="col-lg-2 control-label" for="select">Kategori</label>
							  <div class="col-lg-10">
							    
								<select class="form-control" name="kategori" id="select"  >
								  
								  <option> </option>
								  <?php foreach ($kat as $rs) { ?>
								  
								
								  <option value="<?=$rs->Id?>"> <?=$rs->adi?> </option>
								 <?php }	?>	
								   					  
								</select><br>     
																
                              </div>
						   </div>
						  
						
						 
                      
                        <div class="card-footer">
						
						<button class="btn btn-primary icon-btn" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>kaydet</button>
						
						
						&nbsp;&nbsp;&nbsp;
						<a class="btn btn-default icon-btn" href="#">
						<i class="fa fa-fw fa-lg fa-times-circle"></i>Vazgeç</a>
						</div>
                      </fieldset>
                    </form>
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