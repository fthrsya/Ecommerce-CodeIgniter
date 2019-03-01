<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
	// kütüphanleri çağırmak-tanımlamak için kullanılır.
	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				//eger otıurum açılmamaışsa kontrolu
				//if (!$this->session->userdata("uye_session"))
				//	redirect(base_url().'home/login');
        }
	public function index()
	{
		$query=$this->db->query("SELECT *FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler WHERE grubu='kampanya'");
		$data["kampanya"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler ORDER BY Id DESC LIMIT 4");
		$data["yeni"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler ORDER BY  RAND() LIMIT 4");
		$data["random"]= $query->result();
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler limit 10");
		$data["urun"]= $query->result();
		$query=$this->db->query("SELECT *FROM uyeler");
		$data["veriler"]= $query->result();
		$query=$this->db->query("SELECT *FROM kategoriler ");
		$data["kategori"]= $query->result();
		
		$data["sayfa"]= "";
		$data["menu"]= "anasayfa";
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_content');
		
		$this->load->view('_footer');
		
	}
	public function hakkimizda()
	{
		$query=$this->db->query("SELECT *FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler limit 10");
		$data["urun"]= $query->result();
		$query=$this->db->query("SELECT *FROM kategoriler ");
		$data["kategori"]= $query->result();
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		$query=$this->db->query("SELECT *FROM uyeler"); // kullanıcı adı duzgun gozuksun dıye
		$data["veriler"]= $query->result();
		$data["menu"]= "hakkimizda";
		$data["sayfa"]= "Hakkimizda || ";
		$this->load->view('_header',$data);
	//	$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function olustur(){
		//touch('merhaba1.txt');
		//$i=0;
		$dir = opendir("kitaplar"); //Burada Hangi Klasörün içersini listelemek istiyorsak onu seçtik

		while (($dosya = readdir($dir)) !== false) // While Döngüsüne girerek dosyamızı okuyoruz.
		{

		if(! is_dir($dosya)){ 
		
		$this->db->query("INSERT INTO `kitaplar` (`Id`, `adi`) VALUES (NULL, '$dosya') " );
		
		
		//print_r($data);
		//exit();
		
		
		//$i++;
		//echo $i . $dosya . "<br >"; // Ekrana Yazdırıyoruz..
		}}
		closedir($dir); //İşimiz Bitti
		
		redirect(base_url());
	}
	public function iletisim()
	{	$query=$this->db->query("SELECT *FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler limit 10");
		$data["urun"]= $query->result();
		$query=$this->db->query("SELECT *FROM kategoriler ");
		$data["kategori"]= $query->result();
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		$query=$this->db->query("SELECT *FROM uyeler");
		$data["veriler"]= $query->result();
		$data["menu"]= "iletisim";
		$data["sayfa"]= "iletisim || ";
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('iletisim' );
		$this->load->view('_footer');
	}
	
	public function kayit()
	{
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'durum'=>$this->input->post('durum'),
			'sifre'=>$this->input->post('sifre')
		);
		
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj",">>>>>>>>>>Kaydınız Başarı ile Gerçekleştriildi<<<<<<<<<<");
		redirect(base_url().'home/login_ol');
	}
public function bize_yazin()
	{
		
		$query=$this->db->query("SELECT *FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler limit 10");
		$data["urun"]= $query->result();
		$query=$this->db->query("SELECT *FROM kategoriler ");
		$data["kategori"]= $query->result();
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		$query=$this->db->query("SELECT *FROM uyeler");
		$data["veriler"]= $query->result();
		$data["menu"]= "bize_yazin";
		$data["sayfa"]= "Bize Yazın || ";
		$this->load->view('bize_yazin',$data );
		$this->load->view('_footer');
	}
		public function login_ol()
	{
		
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		$data["menu"]= "Uye";
		$data["sayfa"]= "Giriş-Kayıt || ";
		$this->load->view('login_ol',$data );
		$this->load->view('_footer');
		
	}
	public function login()
	{
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");
		// zararlı kodlardan temizle
		$email = $this->security->xss_clean($email);
		$sifre = $this->security->xss_clean($sifre);
		//exit();
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login('uyeler',$email,$sifre);
		
		if ($result)
		{
			 //Kullanıcı var ıse kontrolu diziye aktar
			 $sess_array=array(
				 'id'=>$result[0]->Id,
				 'yetki'=>$result[0]->yetki,
				 'email'=>$result[0]->email,
				 'sifre'=>$result[0]->sifre,
				 'adres'=>$result[0]->adres,
				 'tel'=>$result[0]->tel,
				 'sehir'=>$result[0]->sehir,
				 'adsoy'=>$result[0]->adsoy,
				 'resim'=>$result[0]->resim
				 
			 );
			 //session degişeken atama
			 $this->session->set_userdata("uye_session",$sess_array);
			 redirect(base_url());
			
		}
		else
		{
			$this->session->set_flashdata("mesaj","Hatalı Kullanıcı Adı Yada Şifre Hatalı");
			redirect(base_url().'home/login_ol');
		}
	}
		
	public function mesaj_kaydet()
	{
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'konu'=>$this->input->post('konu'),
			'mesaj'=>$this->input->post('mesaj'),
			'IP'=>$_SERVER['REMOTE_ADDR'],
			
		);
		$this->db->insert("mesajlar",$data);
		$adsoy=$this->input->post('adsoy');
		$email=$this->input->post('email');
		
		// Email ayaralarını databaseden okuma
		$query=$this->db->get("ayarlar");
		$data["veri"]=$query->result();
		
		//email server ayarları
		$config=Array(
		'protocol' =>'smtp',
		'smtp_host' =>$data["veri"][0]->smtpserver,
		'smtp_port' =>$data["veri"][0]->smtpport,
		'smtp_user' =>$data["veri"][0]->smtpemail,
		'smtp_pass' =>$data["veri"][0]->password,
		//'smtp_crypto' =>"ssl",
		'mailtype' =>'html',
		'charset' =>'utf-8',
		'wordwrap' =>TRUE
		);
		
		$mesaj="Değerli :" .$adsoy."<br> Göndermiş olduğunuz mesaj alınmıştır.<br>En kısa sürede sizinle iletişime geçilecektir.<br>Teşekkür ederiz<br>";
		$mesaj.="=================================<br>";
		$mesaj.=$data["veri"][0]->adi."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="Gönderdiğiniz mesaj aşağıdaki gibidir. =================================<br>";
		$mesaj.=$this->input->post('mesaj');
		
		//email gönderme
		
		$this->load->library("email",$config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail);
		$this->email->to($email);
		$this->email->subject($data["veri"][0]->adi."Form  alındı mesajı");
		$this->email->message($mesaj);
		
		//send email
		
		if($this->email->send())
			$this->session->set_flashdata("email_sent","email başarıyla gönderildi");
		else{
			$this->session->set_flashdata("email_sent","Email gönderilmede hata oluştu !");
			show_error($this->email->print_debugger());
		}
		
		
		$this->session->set_flashdata("mesaj","İlgili e postaya email gonderildi");
		redirect(base_url().'home/bize_yazin');

	}
	
	public function yorum_kaydet()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data2["veri"]= $query->result();
		$query=$this->db->query("SELECT *FROM uyeler");
		$data2["veriler"]= $query->result();
		
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'yorum'=>$this->input->post('yorum'),
			'urunid'=>$this->input->post('uid'),
			
			'IP'=>$_SERVER['REMOTE_ADDR']
			
		);
		//$data["sayfa"]= "yorum";
		//$data["menu"]= "yorum";
		$this->db->insert('yorumlar',$data);
		$this->session->set_flashdata("mesaj","yorum gonderıldı başarılı");
		redirect(base_url().'home/urundetay/'.$data[3]);
		}
	
	
	
	public function urundetay($id)
	{
		$query=$this->db->query("SELECT *FROM kategoriler ORDER BY adi");
		$data["kategoriler"]= $query->result();
		$query=$this->db->query("SELECT *FROM kategoriler ");
		$data["kategori"]= $query->result();
		$query=$this->db->query("SELECT *FROM uyeler");
		$data["veriler"]= $query->result();
		$query=$this->db->query("SELECT * FROM yorumlar WHERE urunid='$id'");
		$data["yorum"]= $query->result();
		$query=$this->db->query("SELECT *FROM urunler limit 10");
		$data["urun"]= $query->result();
		$data["menu"]= "urun";
		$data["sayfa"]=null;
		
		$this->load->model('Database_Model');
		$data["veri"]=$this->Database_Model->get_urun($id);
		$query=$this->db->query("SELECT *FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]= $query->result();
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('urun_detay',$data);
		$this->load->view('_footer');
	}
		
	public function sipariler($durum)
	{
		$query=$this->db->query("SELECT *FROM siparis WHERE siparisdurumu='$durum' ");
		$data["veriler"]= $query->result();
		$this->load->view('siparisler_liste',$data);
	}
	

	
	
	
	


}
