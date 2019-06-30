// Get DOM Elements
const modal1 = document.querySelector('#my-modal1');
const modalBtn1 = document.querySelector('#modal-btn1');
const closeBtn1 = document.querySelector('#my-close1');

const modal2 = document.querySelector('#my-modal2');
const modalBtn2 = document.querySelector('#modal-btn2');
const closeBtn2 = document.querySelector('#my-close2');

const modal3 = document.querySelector('#my-modal3');
const modalBtn3 = document.querySelector('#modal-btn3');
const closeBtn3 = document.querySelector('#my-close3');

const modal4 = document.querySelector('#my-modal4');
const modalBtn4 = document.querySelector('#modal-btn4');
const closeBtn4 = document.querySelector('#my-close4');

// Events
modalBtn1.addEventListener('click', openModal1);
closeBtn1.addEventListener('click', closeModal1);
window.addEventListener('click', outsideClick1);

modalBtn2.addEventListener('click', openModal2);
closeBtn2.addEventListener('click', closeModal2);
window.addEventListener('click', outsideClick2);

modalBtn3.addEventListener('click', openModal3);
closeBtn3.addEventListener('click', closeModal3);
window.addEventListener('click', outsideClick3);

modalBtn4.addEventListener('click', openModal4);
closeBtn4.addEventListener('click', closeModal4);
window.addEventListener('click', outsideClick4);

// Open
function openModal1() {
  modal1.style.display = 'block';
}
function openModal2() {
  modal2.style.display = 'block';
}
function openModal3() {
  modal3.style.display = 'block';
}
function openModal4() {
  modal4.style.display = 'block';
}
// Close
function closeModal1() {
  modal1.style.display = 'none';
}
function closeModal2() {
  modal2.style.display = 'none';
}
function closeModal3() {
  modal3.style.display = 'none';
}
function closeModal4() {
  modal4.style.display = 'none';
}

// Close If Outside Click
function outsideClick1(e) {
  if (e.target == modal1) {
    modal1.style.display = 'none';
  }
}
function outsideClick2(e) {
  if (e.target == modal2) {
    modal2.style.display = 'none';
  }
}
function outsideClick3(e) {
  if (e.target == modal3) {
    modal3.style.display = 'none';
  }
}
function outsideClick4(e) {
  if (e.target == modal4) {
    modal4.style.display = 'none';
  }
}
