const ul = document.querySelector('section#b ul');
ul.innerHTML = '<li>item pertama</li><li>item kedua</li><li>item 3</li>';

const p2 = document.getElementsByTagName('p')[2];
p2.style.color = 'red';


const judul = document.getElementById('judul');

// // coba di CONSOLE saja

// judul.getAttribute('id');
// judul.setAttribute('class', 'judul-1');
// judul.removeAttribute('class', 'judul-1');

// judul.classList.add('satu');
// judul.classList.remove('satu');
// judul.classList.toggle('satu');
// judul.classList.replace('satu', 'dua');

// judul.classList.item(0);   // periksa class pertama
// judul.classList.contains('satu');  // periksa apakah ada class yg bernama 'satu'

