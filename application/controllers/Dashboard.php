<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	var $time;
	function __construct() {
		parent::__construct();
		$this->load->helper('path');
		$this->load->model('home_model');
		$this->load->model('dashboard_model');
        $this->load->library('authenticate');
        $this->authenticate->is_admin_login();
	}

    public function change_pwd(){
        $username =  $this->session->userdata('usernme');
        $old = $_POST['currentpwd'];
        $new = $_POST['newpwd'];
        $res=$this->dashboard_model->chgpwd($username,$old,$new);
        if ($res) {
            redirect(base_url('home/changepwd?suc=1'), 'refresh');
        }
        else{
            redirect(base_url('home/changepwd?suc=2'), 'refresh');
        }
    }
    public function discography_save()
	{
		$data['heading']=$this->input->post('head');
		$data['name']=$this->input->post('name');
        $data['year']=$this->input->post('year');
        $data['artist']=$this->input->post('artist');
        $data['url']=$this->input->post('url');

		$data['songs']=json_encode($this->input->post('songs'));

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
        			echo "profile upload failed";
                } else {
                        $dat = array('upload_data' => $this->upload->data());
                        $data['image'] = 'assets/images/discography/'.$dat['upload_data']['file_name'];
                        }
                }
                $result= $this->dashboard_model->discography_save($data);
                if ($result) {
                  redirect(base_url('home/add_discography?suc=1'), 'refresh');
                }
                else{
                  redirect(base_url('home/add_discography?suc=2'), 'refresh');
                }
	}
	
    public function artist_save()
	{
		$data['heading']=$this->input->post('heading');
		$data['name']=$this->input->post('name');

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
                $result= $this->dashboard_model->artist_save($data);
                if ($result) {
                  redirect(base_url('home/add_artist?suc=1'), 'refresh');
                }
                else{
                  redirect(base_url('home/add_artist?suc=2'), 'refresh');
                }

	}
    public function mapdata(){
        $data=$this->dashboard_model->get_mapdata();
        echo json_encode($data);
    }
	public function artistdelete(){
		$id=$this->input->get('id');
		$result=$this->dashboard_model->deleteartist($id);
		if ($result) {
            redirect(base_url('home/view_artist?suc=1'), 'refresh');
         }
        else{
              redirect(base_url('home/view_artist?suc=2'), 'refresh');
        }
	}

	public function discodelete(){
		$id=$this->input->get('id');
		$result=$this->dashboard_model->deletedisco($id);
		if ($result) {
            redirect(base_url('home/view_discography?suc=1'), 'refresh');
         }
        else{
              redirect(base_url('home/view_discography?suc=2'), 'refresh');
        }
	}

    public function studio_save(){

        $data['name']=$this->input->post('name');
        $data['description']=$this->input->post('description');
        $data['mini_booking']=$this->input->post('mini_booking');
        $data['max_booking']=$this->input->post('max_booking');
        $data['rate']=$this->input->post('rate');
        $data['amenities']=$this->input->post('amenities');
        $data['url']=$this->input->post('url');

        $data['lat']=$this->input->post('lat');
        $data['lng']=$this->input->post('lng');
        
            $config['upload_path'] = 'assets/images/studio';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;

                     if (isset($_FILES['img_bk'])) {
                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['img_bk']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('img_bk')) {
                                //no file uploaded or failed upload
                                 echo($this->upload->display_errors());

                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['img_bk'] = 'assets/images/studio/'.$dat['upload_data']['file_name'];
                            }
                      }
                $result=$this->dashboard_model->save_studio($data);
                if ($result) {
                    redirect(base_url('home/add_studio?suc=1'), 'refresh');
                }
                else{
                    redirect(base_url('home/add_studio?suc=2'), 'refresh');
                }
    }
    public function update_studio(){
        $id=$this->input->post('id');
        $data['name']=$this->input->post('name');
        $data['description']=$this->input->post('description');
        $data['mini_booking']=$this->input->post('mini_booking');
        $data['max_booking']=$this->input->post('max_booking');
        $data['rate']=$this->input->post('rate');
        $data['amenities']=$this->input->post('amenities');
        $data['url']=$this->input->post('url');
        
        $data['lat']=$this->input->post('lat');
        $data['lng']=$this->input->post('lng');
        //print_r($data);
        
        //$img=$this->input->post('base');
            $config['upload_path'] = 'assets/images/studio/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '1000000';
            $config['overwrite'] = TRUE;
            $config['remove_spaces'] = TRUE;

                if (isset($_FILES['img_bk']['name'])) {
                        $config['file_name'] = substr(md5(time()), 0, 28) . $_FILES['img_bk']['name'];
                         $this->load->library('upload', $config);
                         $this->upload->initialize($config);
                          if (!$this->upload->do_upload('img_bk')) {
                                //no file uploaded or failed upload
                                // echo($this->upload->display_errors());
                               
                            } else {
                                $dat = array('upload_data' => $this->upload->data());
                                $data['img_bk'] = 'assets/images/studio/'.$dat['upload_data']['file_name'];
                            }
                      }

            $result=$this->dashboard_model->update_studio($data,$id);
            if ($result) {
                    redirect(base_url('home/edit_studio?suc=1&sid='.$id), 'refresh');
                }
                else{
                    redirect(base_url('home/edit_studio?suc=2&sid='.$id), 'refresh');
                }
    }
    public function del_studio(){
        $id=$this->input->get('id');
        $data=$this->dashboard_model->studio_delete($id);
        if ($data) 
        {
            redirect(base_url('home/list_studio?suc=1'), 'refresh');
        }
        else{
            redirect(base_url('home/list_studio?suc=2'), 'refresh');
        }
    }
	

}
