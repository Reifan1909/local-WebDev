// DOM Selection part 2

// document.querySelector() -> element
// --> ini digunakan ketika tag tidak punya id & class
p = document.querySelector('#b p');
p.style.backgroundColor = 'red';

p = document.querySelector('p'); // karna tidak spesifik, maka akan dipilih <p> pertama
p.style.backgroundColor = 'blue';

li2 = document.querySelector('#b li:nth-child(2)');
li2.style.color = 'red';



// document.querySelectorAll() -> HTMLCollection
li = document.querySelectorAll('#b li')[0];
li.style.color = 'green';

li = document.querySelectorAll('p')[3]; // boleh tidak spesifik karna ada [3] >>HTMLCollection
li.style.color = 'white';

// BISA JUGA SEPERTI INI, mengubah NODE ROOT document
// agar tidak susah menghitung indexnya []

sectionB = document.querySelector('#b');    // document
p = sectionB.querySelectorAll('p')[0];      // sectionB
p.innerHTML = 'JS paragraft';