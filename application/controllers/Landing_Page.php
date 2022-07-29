<?php
class Landing_Page extends CI_Controller {

	function __construct()	
	{
		parent::__construct();
        $this->load->model("AdminModel");
		$this->load->model("UserModel");
	}

	public function index() 
	{
		$this->load->view('landingPage');
	}

	public function register()
	{
		$this->load->view('admin/register');
	}

	public function login()
	{
		$this->load->view('User/login');
	}

	public function insert_account() 
    {
		$Username = $this->input->post("Username");
		$Password = password_hash($this->input->post("Password"), PASSWORD_DEFAULT);

        $User = $this->AdminModel->findOne("Username", $Username);
		if($User != null)
		{
			echo"
 			<script>
 				alert('Username telah terdaftar, pilih username lain');
 				document.location.href = '../register';
 			</script>";
		}
        else {

            $data = array(
                "Username" => $Username,
                "Password" => $Password,
            );

            $this->AdminModel->input($data,'user');
			// echo "<pre>";
            // print_r($User->name);
            // echo "</pre>";
            
            if($User=='User')
            {
                redirect(base_url('Landing_Page'));
            }
            else
            {
                redirect(base_url('Landing_Page'));
            }
        }
    }
}