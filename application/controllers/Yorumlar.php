<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yorumlar extends CI_Controller {
	
	
	// kütüphanleri çağırmak-tanımlamak için kullanılır.
	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->database();
				
				$this->load->library('session');
				$this->load->model('Database_Model');
				
				//eger otıurum açılmamaışsa kontrolu
				if (!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');
        }
	public function index()
	{
		$query=$this->db->query("SELECT * FROM mesajlar WHERE durum='Yeni' ");
		$data["veriler"]=$query->result();
		$this->load->view('admin/mesaj_liste',$data);
		
	}
	public function mesaj_okundu()
	{
		$query=$this->db->query("SELECT * FROM mesajlar WHERE durum='Okundu' ");
		$data["veriler"]=$query->result();
		$this->load->view('admin/mesaj_okundu_liste',$data);
		
	}
	public function mesaj_cevap()
	{
		$query=$this->db->query("SELECT * FROM mesajlar WHERE adminnotu IS NOT NULL ");
		$data["veriler"]=$query->result();
		$this->load->view('admin/mesaj_cevap_liste',$data);
		
	}
	//View/admin/mesaj_ekle form sayfası oluşturduk ekle fonksiyonu çalıştığında controller kişiyi form sayfasına yönlendirecek
public function ekle()
	{
		$this->load->view('admin/mesaj_ekle'); 
	}
	
	public function detay($Id)
	{
		$this->db->query("UPDATE Mesajlar  SET durum='Okundu' WHERE id=$Id");
		$query=$this->db->query("SELECT * FROM Mesajlar WHERE id=$Id");
		$data['veriler']= $query->result();
		
		
		$this->load->view('admin/mesaj_detay',$data);
	
	}
	public function ekle_kaydet()
	{
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'sehir'=>$this->input->post('sehir'),
			'tel'=>$this->input->post('tel'),
			'durum'=>$this->input->post('durum'),
			'yetki'=>$this->input->post('yetki'),
			'sifre'=>$this->input->post('sifre')
		);
		
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM mesajlar WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/mesaj_duzenle_formu',$data);
	}
public function guncelle($Id)
	{
		$data=array(
		
		'adminnotu'=> $this->input->post('adminnotu'),
		);
		$this->Database_Model->update_data("Mesajlar",$data,$Id);
		$this->session->set_flashdata('mesaj','"Notunuz guncellenmistir.."');
		redirect(base_url()."admin/mesajlar/detay/$Id");
	}
public function sil($Id)
	{
		$this->db->query("DELETE  FROM Mesajlar WHERE id=$Id");
		$this->session->set_flashdata('mesaj','"Mesaj basariyla silinmistir.."');
		redirect(base_url()."admin/Mesajlar");
	}
	public function okundusil($Id)
	{
		$this->db->query("DELETE  FROM Mesajlar WHERE id=$Id");
		$this->session->set_flashdata('mesaj','"Mesaj basariyla silinmistir.."');
		redirect(base_url()."admin/Mesajlar/mesaj_okundu");
	}
	public function adminnotusil($Id)
	{
		$this->db->query("DELETE  FROM Mesajlar WHERE id=$Id");
		$this->session->set_flashdata('mesaj','"Mesaj basariyla silinmistir.."');
		redirect(base_url()."admin/Mesajlar/mesaj_cevap");
	}
	
	

}
