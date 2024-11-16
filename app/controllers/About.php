<?php
class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman About Me';
        $data['nama'] = 'Nasrulia Khairunisa Istiqomah';
        $data['alamat'] = 'Jalan Padat Karya Sungai Andai Komplek Kayu Bulan';
        $data['no_hp'] = '0895 3058 5553';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
