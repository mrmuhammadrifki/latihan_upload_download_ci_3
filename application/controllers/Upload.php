<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Upload extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'download'));
    }

public function index()
{   
    $this->load->view('v_upload', array('error' => ''));      
}

public function aksi_upload()
{
    $config['upload_path']      = './gambar/';
    $config['allowed_types']    = 'gif|jpg|png';
    $config['max_size']         = 10000;
    $config['max_width']        = 1024;
    $config['max_height']       = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('berkas')) {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('v_upload', $error);
    } else {
        $data = array('upload_data' => $this->upload->data());
        $this->load->view('v_upload_sukses', $data);
    }
}

    public function lakukan_download($nama_file)
    {
        force_download('gambar/'.$nama_file, NULL);
    }
        
}
        
    /* End of file  upload.php */
        
                            