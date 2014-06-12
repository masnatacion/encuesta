<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASE_PATH.'application/controllers/base'.EXT;

class Home extends Base {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
           
        $this->load->view("survey/survey");
    }
    

}

?>