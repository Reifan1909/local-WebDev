<?php

class About extends Controller {
  // sebagai method default
  public function index($nama = 'User', $pekerjaan = 'Pekerja Keras', $umur = 'Hanya Allah yg tau') {
    $data["judul"] = "About Me"; // untuk title

    $data["nama"] = $nama;
    $data["pekerjaan"] = $pekerjaan;
    $data["umur"] = $umur;

    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }

  public function page() {
    $data["judul"] = "Pages";

    $this->view('templates/header', $data);
    $this->view('about/page');
    $this->view('templates/footer');
  }
}
