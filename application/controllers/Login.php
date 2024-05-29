<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('M_data');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('v_login');
    }

    public function login_aksi() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('v_login');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $sebagai = $this->input->post('sebagai');
            
            $where = array(
                'username' => $username,
                'password' => md5($password)
            );
            
            if ($sebagai == "admin") {
                $cek = $this->M_data->cek_login('admin', $where)->num_rows();
                $data = $this->M_data->cek_login('admin', $where)->row();

                
                if ($cek > 0) {
                    $data_session = array(
                        'id' => $data->id,
                        'username' => $data->username,
                        'status' => 'admin_login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url('admin'));
                } else {
                    redirect(base_url('login?alert=gagal'));
                }
            } else if ($sebagai == "petugas") {
                $cek = $this->M_data->cek_login('m_biodata_pegawai', $where)->num_rows();
                $data = $this->M_data->cek_login('m_biodata_pegawai', $where)->row();
                
                if ($cek > 0) {
                    $data_session = array(
                        'id' => $data->id,
                        'nama' => $data->M_biodata_pegawai_nama,
                        'username' => $data->username,
                        'status' => 'petugas_login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect(base_url('petugas'));
                } else {
                    redirect(base_url('login?alert=gagal'));
                }
            } else {
                $this->load->view('v_login');
            }
        }
    }
}
