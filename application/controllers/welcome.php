<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewhome();
		$this->load->view('index',$data);
	}
	public function tshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewtshirt();
		$this->load->view('tshirt',$data);
	}
	public function error_page()
	{
		$this->load->view('404');
	}
	public function cart()
	{
		$this->load->view('cart');
	}
	public function helm()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewhelm();
		$this->load->view('helm',$data);
	}
	public function pants()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewpants();
		$this->load->view('pants',$data);
	}
	public function motorcycle()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewmotorcycle();
		$this->load->view('motorcycle',$data);
	}
	public function vest()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewvest();
		$this->load->view('vest',$data);
	}
	public function workshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewworkshirt();
		$this->load->view('workshirt',$data);
	}
	public function caps()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewcaps();
		$this->load->view('caps',$data);
	}
	public function detail()
	{
		$this->load->model('merch');
		$data['type'] = $this->input->post('type');
		$data['data']=$this->merch->detail();
		$this->load->view('single',$data);
	}
	public function addmerch()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);

		$this->load->model('merch');
		$data['data']=$this->merch->addmerch();
		$this->load->view('admin/insert/imerch');
	}
	public function addacc()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);

		$this->load->model('merch');
		$data['data']=$this->merch->addacc();
		$this->load->view('admin/insert/iacc');
	}
	public function addmtrc()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);

		$this->load->model('merch');
		$data['data']=$this->merch->addmotorcycle();
		$this->load->view('admin/insert/imotorcycle');
	}
	public function imerch()
	{
		// $this->load->model('merc');
		// $data['data']=$this->merch->viewadmin();
		$this->load->view('admin/insert/imerch');
	}
	public function iacc()
	{
		// $this->load->model('merc');
		// $data['data']=$this->merch->viewadmin();
		$this->load->view('admin/insert/iacc');
	}
	public function imtrc()
	{
		// $this->load->model('merc');
		// $data['data']=$this->merch->viewadmin();
		$this->load->view('admin/insert/imotorcycle');
	}
	public function utshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->utshirt();
		$this->load->view('admin/update/utshirt',$data);
	}
	public function updatetshirt()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);
        
		$this->load->model('merch');
		$data['data']=$this->merch->updatetshirt();
		redirect("welcome/vtshirt");
	}
	public function uworkshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->uworkshirt();
		$this->load->view('admin/update/uworkshirt',$data);
	}
	public function updateworkshirt()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);
        
		$this->load->model('merch');
		$data['data']=$this->merch->updateworkshirt();
		redirect("welcome/vworkshirt");
	}
	public function uvest()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->uvest();
		$this->load->view('admin/update/uvest',$data);
	}
	public function updatevest()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);
        
		$this->load->model('merch');
		$data['data']=$this->merch->updatevest();
		redirect("welcome/vvest");
	}
	public function upants()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->upants();
		$this->load->view('admin/update/upants',$data);
	}
	public function updatepants()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);
        
		$this->load->model('merch');
		$data['data']=$this->merch->updatepants();
		redirect("welcome/vpants");
	}
	public function ucaps()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->ucaps();
		$this->load->view('admin/update/ucaps',$data);
	}
	public function updatecaps()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);
        
		$this->load->model('merch');
		$data['data']=$this->merch->updatecaps();
		redirect("welcome/vcaps");
	}
	public function uhelm()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->uhelm();
		$this->load->view('admin/update/uhelm',$data);
	}
	public function updatehelm()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);
        
		$this->load->model('merch');
		$data['data']=$this->merch->updatehelm();
		redirect("welcome/vhelm");
	}
	public function umotorcycle()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->umotorcycle();
		$this->load->view('admin/update/umotorcycle',$data);
	}
	public function updatemotorcycle()
	{
		$config['upload_path']          = './images';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10000';
        $config['max_width']            = '10000';
        $config['max_height']           = '10000';
        $this->load->library('upload', $config);
        
		$this->load->model('merch');
		$data['data']=$this->merch->updatemotorcycle();
		redirect("welcome/vmotorcycle");
	}
	public function admin()
	{
		if ($this->session->userdata('admin_valid') == FALSE && $this->session->userdata('admin_id') == "") {
			redirect("welcome/login");
		}
		$this->load->view('admin/dashboard');
	}
	public function vtshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewtshirt();
		$this->load->view('admin/data/vtshirt',$data);
	}
	public function vworkshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewworkshirt();
		$this->load->view('admin/data/vworkshirt',$data);
	}
	public function vvest()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewvest();
		$this->load->view('admin/data/vvest',$data);
	}
	public function vpants()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewpants();
		$this->load->view('admin/data/vpants',$data);
	}
	public function vhelm()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewhelm();
		$this->load->view('admin/data/vhelm',$data);
	}
	public function vcaps()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewcaps();
		$this->load->view('admin/data/vcaps',$data);
	}
	public function vmotorcycle()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->viewmotorcycle();
		$this->load->view('admin/data/vmotorcycle',$data);
	}
	public function dtshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->deletetshirt();
		redirect("welcome/vtshirt");
	}
	public function dworkshirt()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->deleteworkshirt();
		redirect("welcome/vworkshirt");
	}
	public function dvest()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->deletevest();
		redirect("welcome/vvest");
	}
	public function dpants()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->deletepants();
		redirect("welcome/vpants");
	}
	public function dcaps()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->deletecaps();
		redirect("welcome/vcaps");
	}
	public function dhelm()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->deletehelm();
		redirect("welcome/vhelm");
	}
	public function dmotorcycle()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->deletemotorcycle();
		redirect("welcome/vmotorcycle");
	}
	public function login() {
        $this->load->view('login');
    }
    public function do_login() {
        $this->load->model('merch');
        $data = $this->merch->do_login();
        redirect("welcome/admin");
    }
    public function logout(){
        $this->session->sess_destroy();
		redirect('welcome/login');
    }
    public function profile()
	{
		$this->load->model('merch');
		$data['data']=$this->merch->profile();
		$this->load->view('admin/profile',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */