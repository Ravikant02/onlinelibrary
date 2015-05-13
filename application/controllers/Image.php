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
    public function images($image_name)
    {
        echo $image_name;
        $img_name = explode('.', $image_name);
        $image_variable = "/image/$img_name[0].$img_name[1]";
        echo $image_variable;
        $this->load->view($image_variable);
    }
    public function logo_loader()
    {
        $this->load->view('/image/logo1.png');
    }
}
