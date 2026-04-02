<?php

class About extends Controller
{

  public function index($nama = "Syauqi", $jurusan = "Informatiak", $umur = 20)
  {
    $data['nama'] = $nama;
    $data['jurusan'] = $jurusan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer', $data);
  }

  public function page()
  {
    $data['judul'] = 'pages';
    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
