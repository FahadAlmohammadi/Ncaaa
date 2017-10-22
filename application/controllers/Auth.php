<?php
/**
 * Created by PhpStorm.
 * User: mfahad
 * Date: 10/22/2017
 * Time: 7:33 PM
 */

class Auth extends CI_Controller{
    public function login()
    {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        if ($this->form_validation->run() == true) {

            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $this->db->select('*');
            $this->db->from('users');
            $this->db->where(array('user_username' => $username , 'user_password' => $password));
            $query = $this->db->get();

            $user = $query->row();

            if($user->user_username){
                $this->session->set_flashdata('success','You are logged in');
                $_SESSION['user_logged'] = true;
                $_SESSION['username'] = $user->user_username;

                redirect("user/profile","refresh");

            }else{
                $this->session->set_flashdata('error','No such account exists in database');
                redirect("auth/login","refresh");
            }
        }


//            if ($this->form_validation->run() == true) {
//                echo 'form validation';

                $this->load->view('login');
//            }

    }
    public function register(){

        if (isset($_POST['register'])) {

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|min_length[8]|matches[password]');
            $this->form_validation->set_rules('fname', 'First Name', 'required');
            $this->form_validation->set_rules('lname', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('phone', 'Phone', 'required|min_length[8]');

        if ($this->form_validation->run() == true) {
            echo 'form validation';

            $data = array(
                'user_username' => $_POST['username'],
                'user_password' => md5($_POST['password']),
                'user_firstname' => $_POST['fname'],
                'user_lastname' => $_POST['lname'],
                'user_email' => $_POST['email'],
                'user_phone' => $_POST['phone'],
                'user_gender' => $_POST['gender']

            );

            $this->db->insert('users',$data);

            $this->session->set_flashdata("success","Your account has been registered. You can login now");
            redirect("auth/register","refresh");


        }

    }
        $this->load->view('register');
    }

}


