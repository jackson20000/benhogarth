<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeweb extends CI_Controller {
	function __construct() {
			parent::__construct();
			$this->load->helper('path');
			$this->load->model('home_model');
			$this->load->model('dashboard_model');
		}
	public function index(){
		$data['discography']=$this->home_model->discographydata();
		$data['artist']=$this->home_model->artist();
		$this->load->view('header');
		$this->load->view('index',$data);
		$this->load->view('footer');
	}
/*public function index_load(){
$data['discography']=$this->dashboard_model->discographydata();
		//$data['artist']=$this->home_model->artist();
		$this->load->view('header');
		$this->load->view('index',$data);
		$this->load->view('footer');
		echo '<div id="first_content">';
$sql = mysql_query("SELECT image  FROM discography LIMIT 0,6");
while($row = mysql_fetch_array($sql)){
	
  	echo "<h3 class='text-primary'>".$row['image']."</h3>";
	echo '<p>'.$row['image'].'</p>';
		
} mysql_free_result($sql);
echo '</div>';
echo '<input type="hidden" id="next_content" value="6">';
echo '<input type="button" id="load" value="Load More">';
	}*/


	public function artist(){
		$data['artist']=$this->home_model->artist();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('artist',$data);
		$this->load->view('footer');
	}	

	public function about(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function book_studio(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('book');
		$this->load->view('footer');
	}
	public function mix(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('mix');
		$this->load->view('footer');
	}

	public function master(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('master');
		$this->load->view('footer');
	}
	
	public function artist_detail(){
		$id=$this->input->get('id');
		$data['artistdetail']=$this->home_model->getartistdetails($id);
	    $data['discographylist']=$this->home_model->discographylist($id);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('artist_detail',$data);
		$this->load->view('footer');
	}

	public function discography(){
		$data['discography']=$this->dashboard_model->discographydata();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('discography',$data);
		$this->load->view('footer');
	}	
	public function disco_detail(){
		$id=$this->input->get('id');
		$data['discodetail']=$this->home_model->discodetail($id);
		$data['artistdetail']=$this->home_model->getartistdetails($data['discodetail']['artist']);
		$data['discographylist']=$this->home_model->discographylist($data['discodetail']['artist']);

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('disco_detail',$data);
		$this->load->view('footer');
	}

	public function booking(){
		$data=$this->dashboard_model->studio_list();
		$datas['mapdata']=json_encode($this->dashboard_model->get_mapdata());
		$this->load->view('header');
		
		$this->load->view('booking',$data);
		$this->load->view('footer',$datas);
	}	
	public function request_book(){
		$id=$this->input->get('sid');
		$data=$this->dashboard_model->view_studio($id);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('request_book',$data);
		$this->load->view('footer');
	}	

	public function book(){
		$this->session->set_userdata('sid', $this->input->post('id'));
		$this->session->set_userdata('date', $this->input->post('date'));
		$this->session->set_userdata('start_time', $this->input->post('start_time'));
		$this->session->set_userdata('end_time', $this->input->post('end_time'));
		redirect(base_url() . 'homeweb/checkout');
	}

	public function checkout(){
		$this->load->library('paypal');
		$data['token']=$this->paypal->load();

		if (!empty($this->session->userdata('sid'))) {
			$data['sid']=$this->session->userdata('sid');
			$data['date']=$this->session->userdata('date');
			$data['start_time']=$this->session->userdata('start_time');
			$data['end_time']=$this->session->userdata('end_time');
			$data['studio']=$this->home_model->getstudiodetail($this->session->userdata('sid'));
			$diff = (strtotime($data['end_time']) - strtotime($data['start_time']))/3600;
			$data['price']=(floatval($data['studio']['rate'])*$diff);
			$data['tax']=(12*$data['price'])/100;
			$data['total']=$data['price'] + $data['tax'];
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('checkout',$data);
			$this->load->view('footer');
		}
		else{
			redirect(base_url() . 'homeweb/booking');
		}
	}

	public function success(){
		$this->load->library('paypal');

		$amount = $this->input->post('amount');
		$nonce = $this->input->post('payment_method_nonce');

		$data['name'] = $this->input->post('name');
		$data['email'] = $this->input->post('email');
		$data['phone'] = $this->input->post('phone');
		$data['studio'] = $this->input->post('studio');
		$data['date'] = $this->input->post('date');
		$data['stime'] = $this->input->post('stime');
		$data['etime'] = $this->input->post('etime');
		$data['amount'] = $amount;

		$res=$this->paypal->check($amount,$nonce);
		if ($res['succ']=='true') {
			$this->home_model->book($data);
			$this->session->unset_userdata('sid');
			$this->session->unset_userdata('date');
			$this->session->unset_userdata('start_time');
			$this->session->unset_userdata('end_time');
			$to      = $data['email'];
			$subject = 'Studio Booking from Benhogarth';
			$message = 'Hi,/nYour booking for studio '.$data['studio'].' has succesfully made.<br>Booking date: '.$data['date'].'/nTime: '.$data['stime'].' - '.$data['etime'].'/n/n/nThank you' ;
			$headers = 'From: noreply@benhogarth.com';

			mail($to, $subject, $message, $headers);
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('success',$data);
			$this->load->view('footer');
		}else{
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('failed');
			$this->load->view('footer');
		}
	}

	public function upload(){
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('upload');
			$this->load->view('footer');
	}

	public function dataDiscoAjax(){
	    $offset = $this->input->post('startDate');
	   // $offset = 30;
		$output = '';
		$data= $this->home_model->discography_ajax($offset);//30
		$count= $this->home_model->discography_count();
		foreach ($data as $value) {
			$output.= '<a class=" animated zoomIn gallery-item" href="'.$value['url'].'" target="_blank">
        <img src="'.base_url().$value['image'].'" style="height:100%;">
        <span class="overlay">
        <h2>'.$value['heading'].'</h2>
        <h4>'.$value['name'].'</h4>
        </span>
      </a>';
		}
		if($offset+12 >= $count[0]['count']){
		    $return['count'] =  false;
		}
		else{
		    $return['count'] =  true;
		}
		$return['output']=$output;
		echo json_encode($return);
	}

	public function test(){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('failed');
		$this->load->view('footer');
	}
	
		
}