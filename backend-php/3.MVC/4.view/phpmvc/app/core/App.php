<?php

class App {
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct() {
    $url = $this->parseURL();

    // dari gemini, karna di php8 harus pake ini, jadi ketika url hanya sampe public/ , maka tetap jalan
    if ($url == null) {
      $url = [$this->controller]; // gak harus $this->controller, ini agar terisi saja arraynya
    }


    // controller
    if (file_exists('../app/controllers/' . $url[0] . '.php')) { // file_exists = cek apakah ada file
      $this->controller = $url[0]; // isi $controller
      unset($url[0]); // menghilangkan controllernya
    }

    require_once '../app/controllers/' . $this->controller . '.php';
    $this->controller = new $this->controller;

    // method
    if (isset($url[1])) {
      if (method_exists($this->controller, $url[1])) {
        $this->method = $url[1];
        unset($url[1]);
      }
    }

    // params
    if (!empty($url)) {
      $this->params = array_values($url); // array_values untuk ambil data dari array
    }

    // jalankan controller dan method, serta kirimkan params jika ada
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseURL() {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/'); // mengilangkan / akhir di url
      $url = filter_var($url, FILTER_SANITIZE_URL); // untuk membersihkan karakter aneh di url;
      $url = explode('/', $url); // pecah urlnya menjadi array
      return $url;
    }
  }
}
