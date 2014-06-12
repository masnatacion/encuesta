<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {
       
       var $device = "computer";
       
       public function __construct()
       {
	      header("Access-Control-Allow-Origin: *");
	      parent::__construct();
	      
	      $this->load->library("mobiledetect");
	      $this->device = ($this->mobiledetect->isMobile() ? ($this->mobiledetect->isTablet() ? 'tablet' : 'phone') : 'computer');
	      define("DEVICE",    $this->device);
       }
       
       
       function getClassName(){
	      return strtolower($this->uri->rsegment(1));
       }
       
	function _remap($method)
	{
	  $param_offset = 2;
	
	  // Default to index
	  if ( ! method_exists($this, $method))
	  {
	    // We need one more param
	    $param_offset = 1;
	    $method = 'index';
	  }
	
	  // Since all we get is $method, load up everything else in the URI
	  $params = array_slice($this->uri->rsegment_array(), $param_offset);
	
	  // Call the determined method with all params
	  call_user_func_array(array($this, $method), $params);
	}

	
	public function index(){
	    
	    return $this->uri->uri_to_assoc(3);
	    
	}
	


}
?>
