<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index(){
        if(get_cookie('login')){
            redirect('admin');
        }
        $username = $this->session->userdata('username');
        if($username !== null){
            redirect('admin');
        }
        // validasi form login
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required');
        // jika data tidak valid maka redirect ke halaman auth
        if($this->form_validation->run() == FALSE){
            $data['title'] = "Halaman Login";
            $this->load->view('template/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('template/footer', $data);
            // jika data valid maka masuk ke percabangan
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            // mengambil kolom tabel user yang usernamenya adalah $username
            $user = $this->db->get_where('user', ['username' => $username])->row_array();
            // jika query menghasilkan boolean true
            if($user){
                // maka cocokan password
                if(password_verify($password, $user['password'])){
                    $data = ['username' => $username];
                    $this->session->set_userdata($data);
                    if($this->input->post('remember') !== null){
                        $array = [
                            'name' => 'remember',
                            'value' => TRUE,
                            'exipre' => '60',
                            'seecure' => TRUE
                        ];
                        set_cookie($array);
                    }
                    redirect('admin');
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Username dan Password tidak cocok.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
                    redirect('auth');
                }
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Username dan Password tidak cocokk.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>');
                redirect('auth');
            }
        }

    }
    public function registration(){
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|matches[password2]',[
            'matches' => 'Password tidak cocok.'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|min_length[5]|matches[password]');
        if($this->form_validation->run() == FALSE ){
            $data['title'] = "Halaman Login";
            $this->load->view('template/header', $data);
            $this->load->view('auth/registration', $data);
            $this->load->view('template/footer', $data);            
        }else{
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $password = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'username' => $username,
                'password' => $password
            ];
            $this->db->insert('user', $data);
            redirect('admin');
        }
    }
    public function logout(){        
        $this->session->unset_userdata('username');
        delete_cookie('remember');
        redirect('auth');
    }
}
