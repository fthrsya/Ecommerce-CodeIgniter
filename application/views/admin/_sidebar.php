    <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle" src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"] ?>" alt="User Image"></div>
            <div class="pull-left info">
              <p><?=$this->session->admin_session["adsoy"] ?></p>
              <p class="designation"><?=$this->session->admin_session["yetki"] ?></p>
            </div>
          </div>
		  
   <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
            <li class="active"><a href="<?=base_url()?>admin"><i class="fa fa-home"></i><span>Anasayfa</span></a></li>
			<li><a href="<?=base_url()?>admin/uyeler"><i class="fa fa-users"></i><span>Üyeler</span></a></li>
			<li><a href="<?=base_url()?>admin/urunler"><i class="fa fa-book"></i><span>Ürünler</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-shopping-basket"></i><span>Siparişler</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>admin/Siparisler/liste/onayli"><i class="fa fa-check"></i> Onaylananlar</a></li>
                <li><a href="<?=base_url()?>admin/Siparisler/liste/kargoda" ><i class="fa fa-truck"></i>Kargodakiler</a></li>
                <li><a href="<?=base_url()?>admin/Siparisler/liste/yeni"><i class="fa fa-angle-double-down"></i> Yeni</a></li>
                <li><a href="<?=base_url()?>admin/Siparisler/liste/tamamlandi"><i class="fa fa-check-square"></i> Tamamlananlar</a></li>
				<li><a href="<?=base_url()?>admin/Siparisler/liste/iptal"><i class="fa fa-check-square"></i> İptal Edilenler</a></li>
              </ul>
            </li>
			 <li class="treeview"><a href="#"><i class="fa fa-envelope"></i><span>Mesajlar</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>admin/mesajlar"><i class="fa fa-envelope-o"></i> Yeni</a></li>
                <li><a href="<?=base_url()?>admin/mesajlar/mesaj_okundu"><i class="fa fa-envelope-open"></i>okunanlar</a></li>
                <li><a href="<?=base_url()?>admin/mesajlar/mesaj_cevap"><i class="fa fa-envelope-square"></i> cevap verilenler</a></li>
                
              </ul>
            </li>
			 <li class="treeview"><a href=""><i class="fa fa-cloud"></i><span>Kategoriler</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
			  
			
			   <?php foreach ($veri as $rs) { $pid=$rs->Id;  ?>
			   
                <?php if($rs->parent_id==0){?><li><a href="<?=base_url()?>admin/home"><i class="fa fa-check"></i><?=$rs->adi?>  </a>
				
				<ul class="treeview-menu">
				<?php foreach ($veri as $rs1) { $pid=$rs->Id;  ?>
				<?php if($rs1->parent_id==$pid){?><li><a href="blank-page.html"><i class="fa fa-circle-o"></i> <?=$rs1->adi?></a></li><?php } } ?>
                   
                  </ul>
				
				
				
				
				</li><?php }?>
               


			   <?php }	?>	
                
              </ul>
            </li>
			 <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Genel</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>admin/home/ayarlar"><i class="fa fa-cog"></i> Ayarlar</a></li>
                <li><a href="<?=base_url()?>admin/home/admin_listele"><i class="fa fa-user-o"></i>Adminler</a></li>
                
                
              </ul>
            </li>
         
          </ul>
        </section>
      </aside>