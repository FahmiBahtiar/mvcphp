<?php

class About extends Controller{
    public function index($nama = 'Fahmi', $hobi = 'Gamer', $umur = 16){
        $data['judul'] = 'Halaman About';
        $data['nama'] =$nama;
        $data['hobi'] = $hobi;
        $data['umur'] = $umur;
        $this->view('templates/header', $data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = 'Halaman Page';
        $this->view('templates/header', $data);
         $this->view('about/page');
         $this->view('templates/footer');

    }
}