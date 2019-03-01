<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
	
	
	// kütüphanleri çağırmak-tanımlamak için kullanılır.
	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->database();
				$this->load->model('Database_Model');
				
				//eger otıurum açılmamaışsa kontrolu
				if (!$this->session->userdata("uye_session"))
					redirect(base_url().'home/login_ol');
        }
		

		public function index()
	{
		$query=$this->db->query("SELECT *FROM ayarlar ");
		$data["veri"]= $query->result();
		$query=$this->db->query("SELECT *FROM uyeler WHERE Id=".$this->session->uye_session("id"));
		$data["uye"]= $query->result();

		$query=$this->db->query("SELECT *FROM uyeler");
		$data["veriler"]= $query->result();
		$data["sayfa"]= "uye paneli";
		$data["menu"]= "uye";
		$this->load->view('_header',$data);
		$this->load->view('hesabim',$data);
		
		
	}
	
	

	public function hesabim()
	{   
	    $query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		$query=$this->db->query("SELECT * FROM uyeler  WHERE Id=".$this->session->uye_session["id"]);
		$data["veriler1"]= $query->result();
		$query=$this->db->query("SELECT *FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
			$data["veriler"]= $query->result();
	
		$data["menu"]= "hesabim";
		$data["sayfa"]= "Hesabım";
		
		$this->load->view('hesabim',$data );
		
		$this->load->view('_footer');
		//print_r($this->session->uye_session);
		//exit();
	}

		public function uye()
	{
		$query=$this->db->query("SELECT *FROM uyeler");
		$data["veri"]= $query->result();
		
	$this->load->view('uyeler',$data);
	
		
	}
	
	public function sepete_ekle()
		{
			$data=array(
		'urun_id' => $this->input->post('urunid'),
		'adet' => $this->input->post('miktar'),
		'musteri_id'=> $this->session->uye_session["id"]
		);
		
		//print_r($data);
		//exit();

		$this->db->insert("sepet",$data);
		$this->session->set_flashdata("mesaj","Urun Sepete Eklendi");
		redirect(base_url().'home/urundetay/'.$this->input->post('urunid'));

		}
		
		public function sepetim()
		{
			
			$query=$this->db->query("SELECT *FROM ayarlar");
		    $data['veri']= $query->result();
			$query=$this->db->query("SELECT *FROM urunler limit 10");
		$data["urun"]= $query->result();
			$query=$this->db->query("SELECT *FROM kategoriler ");
		$data["kategori"]= $query->result();
			$query=$this->db->query("SELECT * FROM uyeler");
	    	$data['veriler']= $query->result();
			 $data['sayfa']="Sepetim";
			 $data['menu']="sepetim";
			 $id=$this->session->uye_session["id"];
			 $data['verii']=$this->Database_Model->sepet_urunler($id);
			 $this->load->view('_header',$data);
			 $this->load->view('_sidebar');
			 $this->load->view('sepet',$data);
			 $this->load->view('_footer');
			
		}
		
			public function satinal()
		{
			$query=$this->db->query("SELECT *FROM ayarlar");
		    $data['veri']= $query->result();
			$query=$this->db->query("SELECT * FROM uyeler");
	    	$data['veriler']= $query->result();
			 $data['sayfa']="Satıl Alma";
			 $data['menu']="uye";
			 $data['toplam']=$this->input->post('toplam');
			 $id=$this->session->uye_session["id"];
			 $query=$this->db->query("SELECT *FROM uyeler WHERE Id=$id");
			$data["uye"]= $query->result();
			$this->load->view('_header',$data);
			$this->load->view('satinalma',$data);
			$this->load->view('_footer');
			
		}
		
		public function siparis_tamamla()
		{
			
	
			//onay geldikten sonra Form verilerini alıyoruz
			$data=array(
		'adsoy'=> $this->input->post('adsoy'),
		'adres'=> $this->input->post('adres'),
		'sehir'=> $this->input->post('sehir'),
		'tutar'=> $this->input->post('toplam'),
		'musteri_id'=> $this->session->uye_session["id"],
		'IP'=> $_SERVER['REMOTE_ADDR']
		 );
		  //verileri sipariş tablosuna ekle
		 $this->db->insert("siparis",$data);
		 $siparis_id=$this->db->insert_id(); // (en son eklenene verinin id) ekleme fonk dataları gönder
		//insert komutu girilen kaydın Id'sini alır
		//sepetteeki ürünleri sipariş ürünlerine ekle
		 $id=$this->session->uye_session["id"];

		 
		//sepeteki ürünleri sipariş ürünler tablosuna aktarma	 
		$veriler=$this->Database_Model->sepet_urunler($id);
		
		 foreach ($veriler as $rs) // sepette kaç tane ürün varsa döngü sayısı ona göre belirleniyor
		 {
			 
		 $data=array(
		 'adi'=>$rs->urunadi,
		 'fiyat'=>$rs->satfiyat,
		 'musteri_id'=>$id,
		 'urun_id'=>$rs->urun_id,
		 'siparis_id'=>$siparis_id,
		 'adet'=>$rs->adet,
		 'tutar'=>$rs->adet*$rs->satfiyat
		           );
				   
			$this->db->insert("siparis_urunler",$data); 
			//Eklenen ürün adedi ürünler tablosundaki stoktan düşürülmeli
			
			
		 } 
		  //if $siparis_id
		 
		 $this->db->query("DELETE FROM sepet WHERE musteri_id=$id"); //sepeti boşalt sadece online olan müşterinin
     redirect(base_url()."uye/islemson");

		
		 $this->session->set_flashdata("mesaj",'Siparişiniz tamamlanmıştır<br>Bizi tercih ettiğiniz için teşekkür ederiz.');
		
			
		}
		
		public function islemson()
		{
			$query=$this->db->query("SELECT *FROM ayarlar");
		    $data['veri']= $query->result();
			
			 $data['sayfa']="İşlem tamamlandı";
			 $data['menu']="satinalma";
			 $this->load->view('_header',$data);
			$this->load->view('islemson',$data);
			$this->load->view('_footer');
			
			
		}
		
		
		public function siparisler()
		{	
			$query=$this->db->query("SELECT *FROM ayarlar");
		    $data['veri']= $query->result();
			$data['sayfa']="Siparişlerim";
			$data['menu']="uye";
			$query=$this->db->query("SELECT *FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
			$data["veriler"]= $query->result();
			
			$this->load->view('siparislerim',$data);
			$this->load->view('_footer');
			
		}
		
		public function mesajlar()
		{	
			$query=$this->db->query("SELECT *FROM ayarlar");
		    $data['veri']= $query->result();
			$data['sayfa']="Mesajlar";
			$data['menu']="uye";
			$query=$this->db->query("SELECT *FROM yorumlar ");
			$data["yorum"]= $query->result();
			
			$this->load->view('mesajlarim',$data);
			$this->load->view('_footer');
			
		} 
		public function siparisdetay($siparis_id)
		{
			$query=$this->db->query("SELECT *FROM ayarlar");
		    $data['veri']= $query->result();
			$data['sayfa']="Sipariş Detayı";
			$data['menu']="uye";
			$id=$this->session->uye_session["id"];
			$query=$this->db->query("SELECT *FROM siparis_urunler WHERE siparis_id=$siparis_id");
			$data["veriler"]= $query->result();
			$this->load->view('_header',$data);
			$this->load->view('siparis_detay',$data);
			$this->load->view('_footer');
			
		}
		
			public function sepetsil($id)
		{
			$this->db->query("DELETE FROM sepet WHERE Id=$id");
			$this->session->set_flashdata("mesaj","Urun Sepetten Silindi");
			redirect(base_url().'uye/sepetim');
			
		}
	
	public function uye_guncelle($id)
	{	
		$data=array(
		'adsoy'=> $this->input->post('adsoy'),
		'sifre'=> $this->input->post('sifre'),
		'adres'=> $this->input->post('adres'),
		'email'=> $this->input->post('email'),
		'sehir'=> $this->input->post('sehir'),
		'tel'=> $this->input->post('tel')	
		);
		$id=$this->session->uye_session["id"];
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		//print_r($this->session->uye_session);
		//exit();
		$this->session->set_flashdata("mesaj","Üye bilgileriniz güncellendi.");
		redirect(base_url().'uye/hesabim');
		
	}
	public function login_cik()
	{
	
	 $this->session->unset_userdata("uye_session");
	 redirect(base_url());
	
	}


}
