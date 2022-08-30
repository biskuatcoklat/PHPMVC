<?php
class About extends Controller
{
    public function index($nama = 'wahyu Aprilliandhika', $pekerjaan = 'Backend Engineer', $umur = 19)
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['profesi'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'My Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
