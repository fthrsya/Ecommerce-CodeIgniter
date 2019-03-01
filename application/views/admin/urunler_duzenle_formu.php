 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Düzenleme menusu</h1>
            <p>düzenleme menusu</p>
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
              <li>ürün Bilgilerini Düzenleme</li>
              
            </ul>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>" >
                      <fieldset>
						   <div class="form-group">
							<label class="control-label">Adı</label>
							<input class="form-control" value="<?=$veri[0]->adi?>" name="adi" type="text" placeholder="Ad Soyad giriniz">
							</div>
						   <div class="form-group">
							<label class="control-label">acıklama</label><br>
								<textarea name ="aciklama"> <?=$veri[0]->aciklama?></textarea>
						   </div>
						    <div class="form-group">
							<label class="control-label">Satış Fiyatı</label><br>
								<input class="form-control" value="<?=$veri[0]->sfiyat?>" name="sfiyat" type="text" >
						   </div>
						    <div class="form-group">
							<label class="control-label">Alış Fiyatı</label><br>
								<input class="form-control" value="<?=$veri[0]->afiyat?>" name="afiyat" type="text" >
						   </div>
						    <div class="form-group">
							<label class="control-label">Stok Miktarı</label><br>
								<input class="form-control" value="<?=$veri[0]->stok?>" name="stok" type="text" >
						   </div>
						  
						   <div class="form-group">
							  <label class="col-lg-2 control-label" for="select">Kategori</label>
							  <div class="col-lg-10">
								<select class="form-control" name="kategori" id="select"  >
								  
								  <option value="<?=$veri[0]->kategori?>"> <?=$veri[0]->katadi?></option>
								  <?php foreach($veriler as $rs)  { ?>
								   <option value="<?=$rs->Id?>"> <?=$rs->adi?></option>
								  <?php } ?>            
								</select><br>           
                              </div>
						   </div>
						  
						 
                      
                        <div class="card-footer">
						
						<button class="btn btn-primary icon-btn" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Güncelle</button>
						
						
						&nbsp;&nbsp;&nbsp;
						
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
	<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
	 <!-- Javascripts-->
   
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/admin/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
	 <script>
			CKEDITOR.replace( 'aciklama' );
		</script>
  </body>
</html>