<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PembayaranModel'); // Memuat model yang sudah dibuat sebelumnya
    }

    public function index()
    {
        $data['pembayaran_tiket'] = $this->PembayaranModel->get_pembayaran_tiket();
        $this->load->view('template/header');
        $this->load->view('pembayaran/index', $data);
        $this->load->view('template/footer');
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Aturan validasi untuk form tambah data
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_lahir', 'required');
        $this->form_validation->set_rules('layanan', 'Layanan', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, tampilkan kembali form tambah data
            $this->load->view('template/header');
            $this->load->view('pembayaran/addpembayaran');
            $this->load->view('template/footer');
        } else {
            // Jika validasi berhasil, simpan data ke database
            $data = array(
                'nama' => $this->input->post('nama'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'layanan' => $this->input->post('layanan'),

                // Tambahkan field lainnya sesuai kebutuhan
            );

            $this->PembayaranModel->create_pembayaran($data);
            redirect('pembayaran/index'); // Redirect kembali ke halaman utama setelah berhasil menambahkan data
        }
    }

    public function edit($id)
    {
        $data['pembayaran_tiket'] = $this->PembayaranModel->get_pembayaran_by_id($id);
        $this->load->view('template/header');
        $this->load->view('pembayaran/editpembayaran', $data);
    }

    public function update($id)
    {
        // Mengambil data yang di-submit dari form
        $data = array(
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'layanan' => $this->input->post('layanan')

        );

        // Memanggil method model untuk melakukan update data karyawan
        $this->PembayaranModel->update_pembayaran($id, $data);

        // Redirect kembali ke halaman index atau halaman lain setelah update berhasil
        redirect('pembayaran/index');
    }


    public function delete($id)
    {
        $this->PembayaranModel->delete_pembayaran($id);
        redirect('pembayaran/index'); // Redirect kembali ke halaman utama setelah menghapus data
    }

    public function search()
    {
        // Ambil keyword dari input form
        $keyword = $this->input->get('keyword');

        // Jika $keyword tidak kosong, lakukan pencarian
        if (!empty($keyword)) {
            // Panggil method dari model untuk melakukan pencarian pembayaran
            $data['pembayaran_tiket'] = $this->PembayaranModel->cari_pembayaran($keyword);
        } else {
            // Jika $keyword kosong, tampilkan semua data pendaftaran
            $data['pembayaran_tiket'] = $this->PembayaranModel->get_pembayaran();
        }

        // Load view dengan hasil pencarian
        $this->load->view('template/header');
        $this->load->view('pembayaran/index', $data);
        $this->load->view('template/footer');
    }
}
