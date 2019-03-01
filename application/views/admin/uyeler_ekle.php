 <?php
		$this->load->view('admin/_header');
		$this->load->view('admin/_sidebar');
		?>
 
 
 <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Üye Ekleme</h1>
            <p>Yeni üye ekleme</p>
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
              <li>Üye Bilgilerini Giriniz</li>
              
            </ul>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="post" action="<?=base_url()?>admin/uyeler/ekle_kaydet" >
                      <fieldset>
						   <div class="form-group">
							<label class="control-label">Ad Soyad</label>
							<input class="form-control" name="adsoy" type="text" placeholder="Ad Soyad giriniz">
							</div>
						   <div class="form-group">
							<label class="control-label">Email</label>
							<input class="form-control" name="email" type="email" placeholder="Email adresinizi giriniz">
						   </div>
						   <div class="form-group">
							<label class="control-label">Şifre</label>
							<input class="form-control" name="sifre" type="password" placeholder="Şifrenizi giriniz">
						   </div>
						   <div class="form-group">
							<label class="control-label">Şehir</label>
							<input class="form-control" name="sehir" type="text" placeholder="Enter email address">
						   </div>
						    <div class="form-group">
							<label class="control-label">Telefon</label>
							<input class="form-control" name="tel" type="text" placeholder="Telefon Giriniz">
						   </div>
						   <div class="form-group">
							  <label class="col-lg-2 control-label" for="select">Durum</label>
							  <div class="col-lg-10">
								<select class="form-control" name="durum" id="select"  >
								  <option> </option>
								  <option>Aktif</option>
								  <option>Pasif</option>             
								</select><br>           
                              </div>
						   </div>
						  <div class="form-group">
							  <label class="col-lg-2 control-label" for="select">Yetki</label>
							  <div class="col-lg-10">
								<select class="form-control" name="yetki" id="select" >
								  <option> </option>
								  <option>Üye</option>
								  <option>Satıcı</option> 
									<option>Yorumcu</option>
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