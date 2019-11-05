<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('admin_model');
        if ($_SESSION["role"] != 'admin') redirect(base_url() . "", 'refresh');
    }

    public function index()
    {

       $this->load->view('main');
    }
    public function dashboard()
    {
        $this->load->view('pages/dashboard');
    }
    public function user()
    {
        $res['users']=$this->admin_model->all_user();
        $this->load->view('pages/user',$res);
    }
    function  add_user(){
        $data = $this->input->post();
        unset($data['cpassword']);
        if($data['id']){
            $res=$this->admin_model->update_user($data);
            if($res){
                echo 'ok';
            }else{
                echo 'not ok';
            }
        }else{
                $res=$this->admin_model->add_user($data);
                if($res){
                    echo 'ok';
                }else{
                    echo 'not ok';
                }
        }

    }
    function chk_email(){
        $email = $this->input->post('email');
        $res=$this->admin_model->chk_email($email);
        if($res){
            echo "email Exist";
        }else{
            echo "";
        }
    }
    function edit(){
        $id = $this->input->post('id');
        $res=$this->admin_model->user_by_id($id);
        print_r(json_encode($res));
    }
    function delete(){
    $id = $this->input->post('id');
    $res=$this->admin_model->delete_by_id($id);
    if ($res){
        echo 'deleted Successfully';
    }
   }
}
