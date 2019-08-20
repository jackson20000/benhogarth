<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
			parent::__construct();
			$this->load->helper('path');
			$this->load->model('home_model');
			$this->load->model('dashboard_model');
			$this->load->library('authenticate');
        	$this->authenticate->is_admin_login();
		}
	public function index()
	{	
		$data=$this->dashboard_model->homedata();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/index',$data);
		$this->load->view('dashboard/footer');
	}

	public function add_artist(){
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/add_artist');
		$this->load->view('dashboard/footer');
	}
	public function add_studio(){
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/add_studio');
		$this->load->view('dashboard/footer');
	}
	public function artist(){
		$id=$this->input->get('id');
		$data['artist']=$this->dashboard_model->artistOne($id);
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/artist',$data);
		$this->load->view('dashboard/footer');

	}
	public function edit_artist(){
		$data['heading']=$this->input->post('heading');
		$data['name']=$this->input->post('name');
		$id=$this->input->post('id');

		$config['upload_path'] = 'assets/images/artist';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1000000';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;

            if (isset($_FILES['img_file'])) {
            $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['img_file']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('img_file')) {
        			// echo "profile upload failed";
                } else {
                        $dat = array('upload_data' => $this->upload->data());
                        $data['image'] = 'assets/images/artist/'.$dat['upload_data']['file_name'];
                        }
                }
                $result= $this->dashboard_model->edit_artist($id,$data);
                if ($result) {
                	redirect(base_url() . 'home/artist?succ=1&id='.$id);
                }
                else{
                	redirect(base_url() . 'home/artist?succ=2&id='.$id);
                }
	}
		public function view_artist(){
		$data['artistlist']=$this->dashboard_model->artistdata();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/view_artist',$data);
		$this->load->view('dashboard/footer');
	}
		public function add_discography(){
		$data['artistname']=$this->dashboard_model->getartistname();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/add_discography',$data);
		$this->load->view('dashboard/footer');
	}
	public function discography(){
		$id=$this->input->get('id');
		$data['discography']=$this->dashboard_model->discographyOne($id);
		$data['artistname']=$this->dashboard_model->getartistname();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/discography',$data);
		$this->load->view('dashboard/footer');
	}
	public function edit_discography(){
		$data['heading']=$this->input->post('head');
		$data['name']=$this->input->post('name');
		$data['artist']=$this->input->post('artist');
		$data['songs']=json_encode($this->input->post('songs'));
		$id=$this->input->post('id');

		$config['upload_path'] = 'assets/images/discography';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = '1000000';
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;

            if (isset($_FILES['imgg_file'])) {
            $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['imgg_file']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
                if (!$this->upload->do_upload('imgg_file')) {
        			// echo "profile upload failed";
                } else {
                        $dat = array('upload_data' => $this->upload->data());
                        $data['image'] = 'assets/images/discography/'.$dat['upload_data']['file_name'];
                        }
                }
                $result= $this->dashboard_model->edit_discography($id,$data);
                if ($result) {
					redirect(base_url() . 'home/discography?succ=1&id='.$id);	
                }
                else{
                	redirect(base_url() . 'home/discography?succ=2&id='.$id);	
                }
	}
	public function view_discography(){
		$data['discographylist']=$this->dashboard_model->discographydata();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/view_discography',$data);
		$this->load->view('dashboard/footer');
	}
	public function list_studio(){
		$data=$this->dashboard_model->studio_list();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
		$this->load->view('dashboard/view_studios',$data);
		$this->load->view('dashboard/footer');
	}
	public function edit_studio(){
		$id=$this->input->get('sid');
		$data=$this->dashboard_model->view_studio($id);
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
	    $this->load->view('dashboard/studio_edit',$data);
	    $this->load->view('dashboard/footer');
	}
	public function changepwd(){
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
	    $this->load->view('dashboard/change_pwd');
	    $this->load->view('dashboard/footer');
	}

	public function bookings(){
		$data['list']=$this->dashboard_model->bookingsdata();
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/menu');
	    $this->load->view('dashboard/bookings',$data);
	    $this->load->view('dashboard/footer');
	}
}
