<?php
App::uses('AppController', 'Controller');

class ChartsController extends AppController {
    public $helpers = array('Html', 'Form');
    public function index(){
    	if(isset($_GET['message'])){
    		$message['Chart']['id'] = 0;
	    	$message['Chart']['name'] = 2;
	    	$message['Chart']['user_id'] = 2;
	    	$message['Chart']['message'] = '111';
	    	$this->Chart->save($message);
	    	die();
    	}
    }


}