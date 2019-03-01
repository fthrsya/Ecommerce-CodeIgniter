 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
		
		 <!-- Ckeditor Javascripts-->
		<script src="<?=base_url()?>assets/admin/ckeditor/ckeditor.js"></script>
 
 
  <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Genel Ayarlar</h1>
            <p>Admin paneli genel ayarları</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Blank Page</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
  
                         <ul class="nav nav-tabs">
                        <li class="active"><a href="#genel" data-toggle="tab" aria-expanded="true">Genel</a></li>
                    
						<li ><a href="#email" data-toggle="tab" aria-expanded="false">Email</a></li>
						<li ><a href="#hakkimizda" data-toggle="tab" aria-expanded="false">Hakkımızda</a></li>
						<li ><a href="#iletisim" data-toggle="tab" aria-expanded="false">İletişim</a></li>
       
                      </ul>
			<form class="form-horizontal" method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>">
				<div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active in" id="genel">
                         
							  <div class="well bs-component">
								
								  <fieldset>
									   <div class="form-group">
										<label class="control-label">Adı </label>
										<input class="form-control" value="<?=$veri[0]->adi?>" name="adi"  type="text" >
										</div>
									   <div class="form-group">
										<label class="control-label">Description</label>
										<input class="form-control" value="<?=$veri[0]->description?>" name="description" type="text" >
									   </div>
									   <div class="form-group">
										<label class="control-label">Keywords</label>
										<input class="form-control" value="<?=$veri[0]->keywords?>" name="keywords" type="text" >
									   </div>
									   <div class="form-group">
										<label class="control-label">Adres</label>
										<input class="form-control" value="<?=$veri[0]->adres?>" name="adres"  type="text" >
									   </div>
										<div class="form-group">
										<label class="control-label">Telefon</label>
										<input class="form-control" value="<?=$veri[0]->tel?>"name="tel" type="text" >
									   </div>
									   <div class="form-group"> 
										<label class="control-label">Şehir</label>
										<input class="form-control" value="<?=$veri[0]->sehir?>"name="sehir" type="text" >
									   </div>							
									</fieldset>					
							  </div> 
                        </div>
								 <div class="tab-pane fade " id="email">
								  <div class="well bs-component">
										
										  <fieldset>
											   <div class="form-group">
												<label class="control-label">Smpt Server </label>
												<input class="form-control" value="<?=$veri[0]->smtpserver?>" name="smtpserver"  type="text" >
												</div>
											   <div class="form-group">
												<label class="control-label">Smtp Email</label>
												<input class="form-control" value="<?=$veri[0]->smtpemail?>" name="smtpemail" type="text" >
											   </div>
											   <div class="form-group">
												<label class="control-label">Port</label>
												<input class="form-control" value="<?=$veri[0]->smtpport?>" name="smtpport" type="text" >
											   </div>
											   <div class="form-group">
												<label class="control-label">Şifre</label>
												<input class="form-control" value="<?=$veri[0]->password?>" name="password"  type="password" >
											   </div>
												
									
											</fieldset>
				 
										
									  </div>
								</div>
                        <div class="tab-pane fade" id="hakkimizda">
						 <textarea name ="editor1" id="editor1"> 
						 <?=$veri[0]->hakkimizda?>
						   </textarea>
						   <script>
							CKEDITOR.replace( 'editor1' );
					    	</script>
                        </div>
						
                        <div class="tab-pane fade" id="iletisim">
                          <textarea name ="editor2" id="editor2"> 
						  <?=$veri[0]->iletisim?>
						  </textarea>
						  <script>
							CKEDITOR.replace( 'editor2' );
						  </script>
                        </div>
                      </div>
					  
						  <div class="card-footer">			
							<button class="btn btn-primary icon-btn" type="submit"> <i class="fa fa-fw fa-lg fa-check-circle"></i>Güncelle</button>
						  </div>
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