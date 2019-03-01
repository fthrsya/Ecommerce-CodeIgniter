<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {
	
	
	// kütüphanleri çağırmak-tanımlamak için kullanılır.
	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				//eger otıurum açılmamaışsa kontrolu
				if (!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');
        }
	public function index()
	{		$query=$this->db->query("SELECT *FROM kategoriler");
		$data["veri"]= $query->result();
		
		//$query=$this->db->query("SELECT * FROM urunler ORDER BY adi");
		//$data["veriler"]=$query->result();
		$data["veriler"]=$this->Database_Model->get_urunler();
		//print_r($data);
		//exit();
		$this->load->view('admin/urunler_liste',$data);
	}
	//View/admin/urunler_ekle form sayfası oluşturduk ekle fonksiyonu çalıştığında controller kişiyi form sayfasına yönlendirecek
public function ekle()
	{	$query=$this->db->query("SELECT * FROM kategoriler");
		$data["kat"]=$query->result();
		$this->load->view('admin/urunler_ekle',$data); 
	}
	public function ekle_kaydet()
	{
		$data=array(
			'adi'=>$this->input->post('adi'),
			'afiyat'=>$this->input->post('afiyat'),
			'sfiyat'=>$this->input->post('sfiyat'),
			'keywords'=>$this->input->post('keywords'),
			'turu'=>$this->input->post('turu'),
			'kategori'=>$this->input->post('kategori')
		);
		
		$this->db->insert("urunler",$data);
		$this->session->set_flashdata("mesaj","Ürün kaydı gerçekleştirildi");
		redirect(base_url().'admin/urunler');
	}
	public function duzenle($id)
	{
		$query=$this->db->query("SELECT * FROM kategoriler");
		$data["veriler"]=$query->result();
		$data["veri"]=$this->Database_Model->get_urun($id);
		$this->load->view('admin/urunler_duzenle_formu',$data);
	}
	public function guncelle($id)
	{	
		//form verilerini aldık güncelleme için
		$data=array(
			'adi'=>$this->input->post('adi'),
			'aciklama'=>$this->input->post('aciklama'),
			'afiyat'=>$this->input->post('afiyat'),
			'sfiyat'=>$this->input->post('sfiyat'),
			'stok'=>$this->input->post('stok'),
			'kategori'=>$this->input->post('kategori')
			
		);
		
		$this->Database_Model->update_data("urunler",$data,$id);
		redirect(base_url().'admin/urunler');
	}
	public function sil($id)
	{
		$this->db->query("DELETE FROM urunler WHERE Id=$id");
		$this->session->set_flashdata("mesaj","Üye kaydı silindi");
		redirect(base_url().'admin/urunler');
	}
	
	public function resim_yukle($id)
	{
		$query=$this->db->query("SELECT * FROM urunler WHERE Id=$id");
		$data["veri"]=$query->result();
		$data["id"]=$id;
		$this->load->view('admin/urunler_resim_yukle',$data); 
	}
		public function resim_kaydet($id)
	{
		$data["id"]=$id;
		//upload edılecek dosyaya ait ayarlar ve limitler
				
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png|pdf';
               // $config['max_size']             = 1000;
               // $config['max_width']            = 1024;
               // $config['max_height']           = 1024;
				//ayarlar ile kutuphane çagır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim')) //yükle hata varsa
                {
                        $error = $this->upload->display_errors();
						$this->session->set_flashdata("mesaj","yüklemede hata oluştu".$error);

                        $this->load->view('admin/urunler_resim_yukle',$data); 
                }
                else // hata yoksa
                {
                        $upload_data = $this->upload->data();
						$dosyaadi=$upload_data["file_name"];
						
						$data=array(
			
							'resim'=>$upload_data["file_name"]
						);
                        $this->load->model('Database_Model');
						$this->Database_Model->update_data("urunler",$data,$id);
						redirect(base_url().'admin/urunler');
                }
        }
		
		public function galeri_yukle($id)
	{
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["veriler"]=$query->result();
		$data["id"]=$id;
		$this->load->view('admin/urunler_galeri_yukle',$data); 
	}
		public function galeri_kaydet($id)
	{
		$data["id"]=$id;
		//upload edılecek dosyaya ait ayarlar ve limitler
				
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;
				//ayarlr ile kutuphane çagır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim')) //yükle hata varsa
                {
                        $error = $this->upload->display_errors();
						$this->session->set_flashdata("mesaj","yüklemede hata oluştu".$error);

                        redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
                }
                else // hata yoksa
                {
						//VERİTABANI kayıt
                        $upload_data = $this->upload->data();
						$dosyaadi=$upload_data["file_name"];
						
						$data=array(
							'urun_id'=>$id,
							'resim'=>$upload_data["file_name"]
						);
						$this->db->insert("urunler_resim",$data);
						//kayıt bıtıyor
						$this->session->set_flashdata("mesaj","resim galeriye yuklendi");
						redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
                }
        }
		
		public function galeri_sil($urunid,$resimid)
	{
		$this->db->query("DELETE FROM urunler_resim WHERE Id=$resimid");
		$this->session->set_flashdata("mesaj","resim galeriden silindi");
		redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);
	}
		
	}
	
	


