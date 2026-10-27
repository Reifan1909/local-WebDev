<?php

// jadikan child Controller $this->view terbaca
class Home extends Controller {
  public function index() {
    $data["judul"] = "Home"; // untuk title

    // method view bikin di core/Controller
    $this->view('templates/header', $data);
    $this->view('home/index'); // berisi halaman yg ada di folder views
    $this->view('templates/footer');
  }
}
