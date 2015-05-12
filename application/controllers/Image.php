<?php
/**
 * Created by PhpStorm.
 * User: inwiter
 * Date: 12/5/15
 * Time: 2:20 PM
 */
class Image extends CI_Controller {
    /* public function __construct()
     {
         parent::__construct();
         $this->load->helper('url');
     }*/
    public function images()
    {
        //echo $img_name;
        $this->load->view('/image/logo1.png');
    }
}
