<?php

class App {
  protected $controller = 'Home';
  protected $method = 'index';
  protected $params = [];

  public function __construct() {
    $url = $this->parseURL();
    var_dump($url);
  }

  public function parseURL() {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/'); // mengilangkan / akhir di url
      $url = filter_var($url, FILTER_SANITIZE_URL); // untuk membersihkan karakter aneh di url;
      $url = explode('/', $url); // untuk memecah urlnya menjadi array
      return $url;
    }
  }
}
