<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	
	// kütüphanleri çağırmak-tanımlamak için kullanılır.
	  public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				//eger oturum açılmamaışsa kontrolu
				if (!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');
        }
	public function index()
	{	
	
	    $query=$this->db->query("SELECT *FROM kategoriler ");
		$data["veri"]= $query->result();
		
		$this->load->view('admin/_header',$data);
		$this->load->view('admin/_sidebar');
		$this->load->view('admin/_content');
		
		

	}
	public function admin_listele()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		$query=$this->db->query("SELECT * FROM admin ORDER BY adsoy");
		$data["admin"]=$query->result();
		
		$this->load->view('admin/admin_liste',$data);
		
	}
	public function ayarlar()
	{
		$query=$this->db->query("SELECT *FROM ayarlar");
		$data["veri"]= $query->result();
		
	$this->load->view('admin/ayarlar',$data);
	
		
	}
	public function ayarlar_guncelle($id)
	{	
		$data=array(
		'adi'=> $this->input->post('adi'),
		'keywords'=> $this->input->post('keywords'),
		'name'=> $this->input->post('name'),
		'description'=> $this->input->post('description'),
		'smtpserver'=> $this->input->post('smtpserver'),
		'smtpemail'=> $this->input->post('smtpemail'),
		'smtpport'=> $this->input->post('smtpport'),
		'password'=> $this->input->post('password'),
		'adres'=> $this->input->post('adres'),
		'sehir'=> $this->input->post('sehir'),
		'tel'=> $this->input->post('tel'),
		'fax'=> $this->input->post('fax'),
		'hakkimizda'=> $this->input->post('editor1'),  
		'iletisim'=> $this->input->post('editor2')
		
		
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("ayarlar",$data,$id);
		redirect(base_url().'admin/home/ayarlar');
		
	}

	

}
