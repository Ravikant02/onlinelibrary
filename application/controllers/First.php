<?php
/**
 * Created by PhpStorm.
 * User: inwiter
 * Date: 3/5/15
 * Time: 12:48 PM
 */
class First extends CI_Controller {
    public function index()
    {
        $this->load->view('demo');
    }
    public function one()
    {
        $this->load->view('hello');
    }
}
