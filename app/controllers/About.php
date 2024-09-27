<?php 

class About extends Controller {
    public function index($nama = 'Luky', $pekerjaan = 'Mahasiswa', $umur = 19)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('about/index', $data);
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('about/page');
    }
}




