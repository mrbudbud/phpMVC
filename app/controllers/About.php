<?php 

class About extends Controller
{
    public function index ($nama = 'Rachmad', $pekerjaan = 'Programmer', $umur = 20)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;

        $data ['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
    public function page()
    {
        $data ['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer', $data);
    }
}

