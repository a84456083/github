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



	public function index($page=1)
	{   $this->load->database();
	    $query = $this->db->get('tt');
		$data['news']=$query->result_array();




			$this->load->library('pagination');

$config['base_url'] = 'http://localhost/c/welcome/';
$config['total_rows'] = 10;
$config['per_page'] = 2;
$config['cur_page'] = $page;
$config['uri_segment'] = 2;
$config['use_page_numbers'] = TRUE;
$this->pagination->initialize($config);

$data['link']= $this->pagination->create_links();
$data['page']=$page;
$this->load->view('welcome_message',$data);
$this->load->helper('download');
$down = file_get_contents("license.txt"); // 读文件内容
$name = 'license.txt';



	}

	public function test(){
     echo $_POST['pass'];
  $config['upload_path'] = 'q/';
  $config['allowed_types'] = 'gif|jpg|png|txt';
  $config['max_size'] = '100';
  $config['max_width']  = '1024';
  $config['max_height']  = '768';
  $config['encrypt_name']  = true;
  $this->load->library('upload', $config);
 $filename='file';
  if ( ! $this->upload->do_upload("file"))
  {
   $error = array('error' => $this->upload->display_errors());

   $this->load->view('upload_form', $error);
  }
  else
  {
 echo "1";
  }
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */