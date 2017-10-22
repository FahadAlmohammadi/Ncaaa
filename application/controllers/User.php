<?php
/**
 * Created by PhpStorm.
 * User: mfahad
 * Date: 10/23/2017
 * Time: 12:08 AM
 */

class User extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['user_logged'])){

            $this->session->set_flashdata('error','Please login to view this page.');
            redirect('auth/login');
        }
    }

    public function profile(){
        $this->load->view('profile');
    }
}
