<?php
    class admin_controller extends CI_Controller{
        public function admin(){
            $this->load->view("header");
            $this->load->view("templates/admin/header_admin");
            $this->load->view("templates/admin/admin");
            $this->load->view("footer");
        }
    }
?>