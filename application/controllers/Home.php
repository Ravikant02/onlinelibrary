<?php
/**
 * Created by PhpStorm.
 * User: inwiter
 * Date: 3/5/15
 * Time: 12:32 PM
 */

class Home extends CI_Controller {
   /* public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }*/
    public function index()
    {
        $this->load->view('index.html');
    }
}
