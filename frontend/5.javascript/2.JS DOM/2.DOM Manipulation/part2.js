// DOM Maniulation
// buat elemen baru
const pBaru = document.createElement('p');
pBaru.classList.add('pBaru');
const textPBaru = document.createTextNode('p4 ini dibuat dg JS');

// simpan tulisan ke paragraft
pBaru.appendChild(textPBaru);

// simpan elemen baru di akhir section A
const sectionA = document.getElementById('a');
sectionA.appendChild(pBaru);


// insertbefore
const liBaru = document.createElement('li');
const textLiBaru = document.createTextNode('list baru');

liBaru.appendChild(textLiBaru);

const ul = document.querySelector('section#b ul');
const li2 = ul.querySelector('li:nth-child(2)');

ul.insertBefore(liBaru, li2);


// removechild
const link = document.getElementsByTagName('a')[0];
sectionA.removeChild(link);

// replaceChild
const sectionB = document.getElementById('b');
const p = sectionB.getElementsByTagName('p')[0];
const h2 = document.createElement('h2');
const isiH2 = document.createTextNode('Judul baru');

h2.appendChild(isiH2);

sectionB.replaceChild(h2, p);






liBaru.style.backgroundColor = 'lightgreen';
h2.style.backgroundColor = 'lightgreen';
pBaru.style.backgroundColor = 'lightgreen';