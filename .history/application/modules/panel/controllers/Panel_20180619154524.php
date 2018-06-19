<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $data = array(
            'content' => 'layout/content', 
            'navbar' => 'layout/subnavbar', 
        );
        $this->load->view('dashboard', $data);
    }

}

/* End of file Panel.php */
