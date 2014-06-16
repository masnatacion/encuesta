<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once BASE_PATH.'application/controllers/base'.EXT;

class survey extends Base {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
           
        $this->load->view("survey/survey");
    }

    public function thankyou(){
           
        $this->load->view("survey/thankyou");
    }

    public function save()
    {

        $this->load->model("userdao");
        $this->load->model("answerdao");

        $id_user = $this->userdao->insert(array(
                                        "Email"     => "", 
                                        "FirstName" => "", 
                                        "LastName"  => "", 
                                        "Country"   => ""
                                ));

    	foreach ($this->input->post() as $input => $value) {
            $question[] = array(
                                    "ID_user"       => $id_user,
                                    "FieldName"     => $input, 
                                    "FieldValue"    => $value,
                                    "Date"          => date("Y-m-d"),
                                    "Time"          => date("H:m:s")
                                );
        }

        $this->answerdao->insert_batch($question);

    }
    

}

?>