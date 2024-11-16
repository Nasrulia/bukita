<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Home';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function nama()
    {
        echo "Nasrulia Khairunisa Istiqomah";
    }

    public function praktikum()
    {
        echo "Saya sedang praktikum web 2";
    }
}
