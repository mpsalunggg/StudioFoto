<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // logged_in();
    }

    public function index()
    {

        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function pesanan()
    {
        $data['title'] = 'Pesanan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pesanan'] = $this->db->get('cetak_foto')->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pesanan', $data);
        $this->load->view('templates/footer');
    }

    public function cetak()
    {
        $data['title'] = 'Cetak Foto';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/cetak', $data);
        $this->load->view('templates/footer');
    }

    public function portofolio()
    {
        $data['title'] = 'Portofolio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/portofolio', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('foto', 'Foto', 'required');
        $this->form_validation->set_rules('bukti_tf', 'Bukti Transfer', 'required');

        $config['upload_path']          = './assets/foto/';
        $config['allowed_types']        = 'jpg|png|PNG|JPG|jpeg|JPEG';
        $config['max_size']             = 10000000000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gagal Upload";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];

            if (!$this->upload->do_upload('bukti_tf')) {
                echo "Gagal Upload";
            } else {
                $bukti = $this->upload->data();
                $bukti = $bukti['file_name'];
                $nama = $this->input->post('nama', TRUE);
                $no_hp = $this->input->post('no_hp', TRUE);
                $alamat = $this->input->post('alamat', TRUE);
                $harga = $this->input->post('harga', TRUE);
                $size = $this->input->post('size', TRUE);
                $date = time();

                $data = array(
                    'nama' => $nama,
                    'no_hp' => $no_hp,
                    'alamat' => $alamat,
                    'harga' => $harga,
                    'size' => $size,
                    'foto' => $gambar,
                    'bukti_tf' => $bukti,
                    'date' => $date
                );

                $this->db->insert('cetak_foto', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Data berhasil ditambah </div>');
                redirect('user/cetak');
            }
        }
    }

    public function edit_data_pesanan()
    {
        // $this->form_validation->set_rules('nama', 'Nama', 'required');
        // $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        // $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        // $this->form_validation->set_rules('foto', 'Foto', 'required');
        // $this->form_validation->set_rules('bukti_tf', 'Bukti Transfer', 'required');
        $id = $this->input->post('id');
        $config['upload_path']          = './assets/foto/';
        $config['allowed_types']        = 'jpg|png|PNG|JPG|jpeg|JPEG';
        $config['max_size']             = 10000000000000000000000000000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $nama = $this->input->post('nama', TRUE);
            $no_hp = $this->input->post('no_hp', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $harga = $this->input->post('harga', TRUE);
            $size = $this->input->post('size', TRUE);

            $data = array(
                'id' => $id,
                'nama' => $nama,
                'no_hp' => $no_hp,
                'alamat' => $alamat,
                'harga' => $harga,
                'size' => $size
            );
            $this->db->where('id', $id);
            $this->db->update('cetak_foto', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Data berhasil diubah </div>');
            redirect('user/pesanan');
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            // die($gambar);
            // $bukti = $this->upload->data();
            // $bukti = $bukti['file_name'];
            $nama = $this->input->post('nama', TRUE);
            $no_hp = $this->input->post('no_hp', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $harga = $this->input->post('harga', TRUE);
            $size = $this->input->post('size', TRUE);

            $data = array(
                'id' => $id,
                'nama' => $nama,
                'no_hp' => $no_hp,
                'alamat' => $alamat,
                'harga' => $harga,
                'size' => $size,
                'foto' => $gambar
            );
            $this->db->where('id', $id);
            $this->db->update('cetak_foto', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Data berhasil diubah </div>');
            redirect('user/pesanan');
        }
    }

    public function hapus_data($id)
    {
        $data = [
            'id' => $id
        ];
        $this->load->model('Menu_model');
        $this->Menu_model->hapus_data($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Pesanan Telah Dibatalkan </div>');
        redirect('user/pesanan');
    }

    public function jasa()
    {
        $data['title'] = 'Jasa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/jasa', $data);
        $this->load->view('templates/footer');
    }

    public function prewed()
    {
        $data['title'] = 'Prewed';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/prewed', $data);
        $this->load->view('templates/footer');
    }
    public function graduation()
    {
        $data['title'] = 'Graduation';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/graduation', $data);
        $this->load->view('templates/footer');
    }
    public function yearbook()
    {
        $data['title'] = 'Yearbook';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/yearbook', $data);
        $this->load->view('templates/footer');
    }
    public function pesanan_jasa()
    {
        $data['title'] = 'List Pesanan Jasa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pesananjasa'] = $this->db->get('jasa_foto')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pesananjasa', $data);
        $this->load->view('templates/footer');
    }



    public function tambah_jasa()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('date', 'Tanggal Boking', 'required');
        $this->form_validation->set_rules('paket', 'Paket', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $this->form_validation->set_rules('bukti', 'Bukti', 'required');
        
        $config['upload_path']          = './assets/buktijasa/';
        $config['allowed_types']        = 'jpg|png|PNG|JPG|jpeg|JPEG';
        $config['max_size']             = 10000000000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger col" role="alert">Isi Data Pesanan Dengan Lengkap </div>');
            redirect('user/prewed');
        } else {
            
            $jenis_jasa = $this->input->post('jenis_jasa', TRUE);
            $nama = $this->input->post('nama', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $date = $this->input->post('date', TRUE);
            $paket = $this->input->post('paket', TRUE);
            $no_hp = $this->input->post('no_hp', TRUE);
            $lokasi = $this->input->post('lokasi', TRUE);
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];

            $data = array(
                'jenis_jasa' => $jenis_jasa,
                'nama' => $nama,
                'alamat' => $alamat,
                'date' => $date,
                'paket' => $paket,
                'no_hp' => $no_hp,
                'lokasi' => $lokasi,
                'bukti' => $gambar
            );
            
            $this->db->insert('jasa_foto', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Data berhasil ditambah </div>');
            redirect('user/prewed');
        }

    }

    public function edit_jasa()
    {

        // $data['pesananjasa'] = $this->db->get('jasa_foto')->result_array();
        
        $id = $this->input->post('id');
        $config['upload_path']          = './assets/foto/';
        $config['allowed_types']        = 'jpg|png|PNG|JPG|jpeg|JPEG';
        $config['max_size']             = 10000000000000000000000000000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $nama = $this->input->post('nama', TRUE);
            $alamat = $this->input->post('alamat', TRUE);
            $date = $this->input->post('date', TRUE);
            $no_hp = $this->input->post('no_hp', TRUE);
            $lokasi = $this->input->post('lokasi', TRUE);

            $data = array(
                'id' => $id,
                'nama' => $nama,
                'alamat' => $alamat,
                'date' => $date,
                'no_hp' => $no_hp,
                'lokasi' => $lokasi
            );
            $this->db->where('id', $id);
            $this->db->update('jasa_foto', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Jasa berhasil diubah </div>');
            redirect('user/pesanan_jasa');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Jasa berhasil diubah </div>');
            redirect('user/pesanan_jasa');
        }
    
    }
    
    public function hapus_jasa($id)
    {
        $data = [
            'id' => $id
        ];
        $this->load->model('Menu_model');
        $this->Menu_model->hapus_jasa($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success col" role="alert">Jasa Telah Dihapus </div>');
        redirect('user/pesanan_jasa'); 
    }

    // public function cariDataJasa(){
    //     $keyword = $this->input->post('keyword');
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['pesananjasa'] = $this->db->get_where('jasa_foto', ['nama' => $keyword])->result_array();
    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('user/pesananjasa', $data);
    //     $this->load->view('templates/footer');
    // }
}