<?php
 
class Upload extends CI_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'html'));
    }
 
    function index() {
        $this->load->view('form_view', array('error' => ' '));
    }
 
    function do_upload() {
		$image = $this->upload->data();
		$resized = base_url()."uploads/".$name['orig_name'];
		
		//Create 600px version
		$config = array();
		$config['source_image'] = $resized;
		$config['image_library'] = 'gd2';
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 600;
		$config['height'] = 600;
		$this->image_lib->initialize($config);
		$this->image_lib->resize();
		$this->image_lib->clear();
		unset($config);
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $name = $_FILES['userfile']['name']; // get file name from form
        //$fileNameParts = explode('.', $name); // explode file name to two part
        //$default_name = $fileNameParts[0]; // get raw name from client
        $config['file_name'] = $name; //constructing a new name
 
 
        $this->load->library('upload', $config);
 
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
 
            $this->load->view('form_view', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
 
            $this->load->view('success_view', $data);
        }
    }
}
?>