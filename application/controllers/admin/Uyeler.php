<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
	
	
	// kütüphanleri çağırmak-tanımlamak için kullanılır.
	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				//eger otıurum açılmamaışsa kontrolu
				if (!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');
        }
	public function index()
	{
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
		$query=$this->db->query("SELECT *FROM kategoriler");
		$data["veri"]= $query->result();
		$this->load->view('admin/uyeler_liste',$data);
	}
	//View/admin/uyeler_ekle form sayfası oluşturduk ekle fonksiyonu çalıştığında controller kişiyi form sayfasına yönlendirecek
public function ekle()
	{
		$this->load->view('admin/uyeler_ekle'); 
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
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["veri"]=$query->result();
		$this->load->view('admin/uyeler_duzenle_formu',$data);
	}
	public function guncelle($id)
	{	
		//form verilerini aldık güncelleme için
		$data=array(
			'adsoy'=>$this->input->post('adsoy'),
			'email'=>$this->input->post('email'),
			'sehir'=>$this->input->post('sehir'),
			'tel'=>$this->input->post('tel'),
			'durum'=>$this->input->post('durum'),
			'yetki'=>$this->input->post('yetki'),
			'sifre'=>$this->input->post('sifre')
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		redirect(base_url().'admin/uyeler');
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM uyeler WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Üye kaydı silindi");
		redirect(base_url().'admin/uyeler');
	}
	
	
	

}
