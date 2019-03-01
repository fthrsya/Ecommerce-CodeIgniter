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
              <li>Üye Bilgilerini Düzenleme</li>
              <?=$this->session->flashdata("mesaj")?>
            </ul>
          </div>
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                  <div class="well bs-component">
                   
					  
					   <table class="table">
               
                       <tr>
                      
                      <th>Adı Soyadı</th><td><?=$veriler[0]->adsoy?></td>
					   </tr> 
                      
                   
					 <tr>
					<th>Email</th><td><?=$veriler[0]->email?></td>
				
					</tr>
					<tr>
					<th>Telefon</th><td><?=$veriler[0]->tel?></td>
				    </tr>
					
					<tr>
                      <th>Mesaj</th> <td><?=$veriler[0]->mesaj?></td>
					   </tr>
					  
					  <tr>
					  <th>Durum</th> <td><?=$veriler[0]->durum?></td>
					   </tr>
					 <tr>
					  <th>Tarih</th> <td><?=$veriler[0]->tarih?></td>
					  </tr>
					  <tr>
					   <th>IP</th><td><?=$veriler[0]->IP?></td>
					  </tr>
					   <tr>
					   <th>Notunuz</th><td>
					   <form action="<?=base_url()?>admin/mesajlar/guncelle/<?=$veriler[0]->Id?>" method="post">
					   
					   <textarea name="adminnotu"  rows="10" cols="80" ><?=$veriler[0]->adminnotu?></textarea>
					    <button type="submit" class="btn btn-warning">GUNCELLE</button>
					   
					   </td>
					  </tr>
					  

					
                </table>
					  
					  
					  
					  
					  
                    </form>
                  </div>
                </div>
               
                      
						
						
						
						
						
                
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