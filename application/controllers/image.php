<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image extends CI_Controller {

	public function resize($name){
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
	}
}
?>