<?php

class About {
  // sebagai method default
  public function index($nama = 'User', $pekerjaan = 'Pekerja Keras') { // params default 
    echo "Hai, saya adalah $nama, saya seorang $pekerjaan";
  }

  public function page() {
    echo 'About/page';
  }
}
