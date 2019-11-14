<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('My_model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function login(){
		$data=$this->input->post();
		//print_r($data);
		$res=$this->My_model->select_model('admin','*','',$data);
		//print_r($res);
		//die();
		if($res){
			$this->session->set_userdata('un','1');
			echo "1";
		}else{
			echo "0";
		}
	}

	public function dashbord(){
		$session=$this->session->userdata('un');
		if(!$session){
			redirect('/');
		}
		$this->load->view('dash');
	}
	
	public function book_studio_manage(){
		$this->load->view('book_studio_manage');

	}

	public function add_autor(){
		$res=$this->My_model->select_model('author_list','*');

		$this->load->view('add_autor',['res'=>$res]);
	}

	public function autor_add(){
		
		$this->form_validation->set_rules('name', 'Author Name', 'required');
		if ($this->form_validation->run())
		{
			$data=$this->input->post();
			unset($data['sub']);
			$res= $this->My_model->databaseop('author_list','insert',$data);
			if($res){
				
				$this->session->set_flashdata('msg','1');
				redirect('Home/add_autor');
				
			}else{
				$this->session->set_flashdata('msg','0');
				redirect('Home/add_autor');

				
			}
		}else{
			$this->load->view('add_autor');
		}
	}

	public function delete_author($id){
			
			$del=$this->My_model->databaseop('author_list','delete','',array('id'=>$id));
			
			 
			if ($del ==false){
				
				
				$this->session->set_flashdata('msg','delete');
				redirect('Home/add_autor');
				
			}else{
				
				redirect('Home/add_autor');
			}

	}
	public function update_author($id){
		$res1=$this->My_model->select_model('author_list','*','',array('id'=>$id));
		$res=$this->My_model->select_model('author_list','*');
		$data['res1']=$res1;
		$data['res']=$res;
		$this->load->view('add_autor',$data);

	}
	public function autor_update1(){
		$data=$this->input->post();
		$id=$this->input->post('id');
		unset($data['id']);
		unset($data['sub']);
		 $res=$this->My_model->databaseop('author_list','update',$data,array('id'=>$id)); 
		if ($res==false) {
			
			$this->session->set_flashdata('msg','update');
			redirect('home/add_autor');
		}else{
			redirect('home/add_autor');
		}
	}

	public function add_publisher(){
		$res=$this->My_model->select_model('pub_list','*');
		$this->load->view('add_publishe',['res'=>$res]);
	}

	public function pub_add(){
		$this->form_validation->set_rules('name', 'Publisher Name', 'required');
		if ($this->form_validation->run())
		{
			$data=$this->input->post();
			unset($data['sub']);
			$res= $this->My_model->databaseop('pub_list','insert',$data);
			if($res){
				
				$this->session->set_flashdata('msg','1');
				redirect('Home/add_publisher');
				
			}else{
				$this->session->set_flashdata('msg','0');
				redirect('Home/add_publisher');

				
			}
		}else{
			$this->load->view('add_publishe');
		}
	}


	public function delete_publisher($id){
			
			$del=$this->My_model->databaseop('pub_list','delete','',array('id'=>$id));
			
			 
			if ($del ==false){
				
				
				$this->session->set_flashdata('msg','delete');
				redirect('Home/add_publisher');
				
			}else{
				
				redirect('Home/add_publisher');
			}

	}
		public function update_publisher($id){
			$res1=$this->My_model->select_model('pub_list','*','',array('id'=>$id));
			$res=$this->My_model->select_model('pub_list','*');
			$data['res1']=$res1;
			$data['res']=$res;
			$this->load->view('add_publishe',$data);


	}
	public function publisher_update1(){
		$data=$this->input->post();
		$id=$this->input->post('id');
		unset($data['id']);
		unset($data['sub']);
		 $res=$this->My_model->databaseop('pub_list','update',$data,array('id'=>$id)); 
		if ($res==false) {
			
			$this->session->set_flashdata('msg','update');
			redirect('home/add_publisher');
		}else{
			redirect('home/add_publisher');
		}
	}



	public function add_book(){
		$author_list=$this->My_model->select_model('author_list','*');
		$pub_list=$this->My_model->select_model('pub_list','*');
		$data['author_list']=$author_list;
		$data['pub_list']=$pub_list;

		$this->load->view('add_book',$data);
	}
	public function add_book1(){
		$data=$this->input->post();
		unset($data['book_add']);
		$res= $this->My_model->databaseop('book_list','insert',$data);
		if($res){
			$this->session->set_flashdata('msg','Book Added successfully');
			redirect('Home/add_book');
			
		}else{
			redirect('Home/add_book');
		}
	}

	public function book_list(){
		$book_list=$this->My_model->select_model('book_list','*');
		$this->load->view('book_list',['book_list'=>$book_list]);
	}

	public function book_issue_submit(){
		$this->load->view('book_issue_submit');
	}
	public function book_filter(){
		$data=$this->input->post('id');
		$res=$this->My_model->select_model('member_list','*','',array('id'=>$data));
		if($res){
			$book_data=$this->My_model->select_model('book_list','name','','');

			$this->load->view('book_issue_submit',['res'=>$res,'book_data'=>$book_data]);
		}else{

			$this->session->set_flashdata('msg','User Not Founded');
			$this->load->view('book_issue_submit');
		}
	}

	public function issue_book(){
		$data=$this->input->post();
		unset($data['btn']);
		$user_id=$this->input->post('user_id');
		$book_name=$this->input->post('book_name');
		$check_status=$this->My_model->select_model('issue_book','*','',array('user_id'=>$user_id,'book_name'=>$book_name));
		$check_status2=$this->My_model->select_model('issue_book','*','',array('user_id'=>$user_id));
		print_r(sizeof($check_status));
		if($check_status){
			$this->session->set_flashdata('msg',$book_name.'Book Already issued');
			redirect('home/book_issue_submit');
		}
		else if(sizeof($check_status2)>2){
			$this->session->set_flashdata('msg','Already Two Books Are issued');
			redirect('home/book_issue_submit');
		}

		else{


		$res=$this->My_model->databaseop('issue_book','insert',$data);
		if($res){
			$this->session->set_flashdata('msg','Book successfully issued');
			redirect('home/book_issue_submit');
		}else{
				$this->session->set_flashdata('msg','Book not  issued');
				redirect('home/book_issue_submit');
		}}
	}

	public function sub_book_list(){
		$sub_book_enfo=$this->My_model->select_model('submit_book','*','','');
		$this->load->view('submit_book_list',['sub_book_enfo'=>$sub_book_enfo]);
	}

	public function issue_book_list(){
		$book_list=$this->My_model->select_model('issue_book','*','','');
		$this->load->view('issue_book_list',['book_list'=>$book_list]);
	}
	public function sub_book($id){
		$data=$this->My_model->select_model('issue_book',array('name','book_name','email'),'',array('id'=>$id));
		$res1=$this->My_model->databaseop('issue_book','delete','',array('id'=>$id));
		$res=$this->My_model->databaseop('submit_book','insert',$data[0]);
		if($res){
			$this->session->set_flashdata('msg','Book successfully Submited');
			redirect('home/issue_book_list');

		}else{
			$this->session->set_flashdata('msg','Book Not Submited');
			redirect('home/issue_book_list');
		}
		//$this->load->view('sub_book');
	}

	public function member_manage(){
		$this->load->view('member_manage');
	}
	public function add_member(){
		$data=$this->input->post();
		unset($data['sub']);
		$res=$this->My_model->databaseop('member_list','insert',$data);
		if ($res) {
			$this->session->set_flashdata('msg','Member added successfully');
			redirect('home/member_manage');
		}else{
			redirect('home/member_manage');
		}

	}
	public function member_list(){
		$res=$this->My_model->select_model('member_list','*');

		$this->load->view('member_list',['res'=>$res]);
	}



}
?>
