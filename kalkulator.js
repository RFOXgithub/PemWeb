let bilangan1 = "";
let bilangan2 = "";
let operator = "";
let hasil = "";

function tambahAngka(angka) {
  if (operator === "") {
    bilangan1 += angka;
  } else {
    bilangan2 += angka;
  }
  updateHasil();
}

function tambah() {
  operator = "+";
  updateHasil();
}

function kurang() {
  operator = "-";
  updateHasil();
}

function kali() {
  operator = "*";
  updateHasil();
}

function bagi() {
  operator = "/";
  updateHasil();
}

function tambahTitik() {
  if (operator === "") {
    if (bilangan1.indexOf(".") === -1) {
      bilangan1 += ".";
      updateHasil();
    }
  } else {
    if (bilangan2.indexOf(".") === -1) {
      bilangan2 += ".";
      updateHasil();
    }
  }
}

function bersihkan() {
  bilangan1 = "";
  bilangan2 = "";
  operator = "";
  hasil = "";
  updateHasil();
}

function hitung() {
  let bil1 = parseFloat(bilangan1);
  let bil2 = parseFloat(bilangan2);
  switch (operator) {
    case "+":
      hasil = bil1 + bil2;
      break;
    case "-":
      hasil = bil1 - bil2;
      break;
    case "*":
      hasil = bil1 * bil2;
      break;
    case "/":
      hasil = bil1 / bil2;
      break;
  }
  bilangan1 = hasil.toString();
  bilangan2 = "";
  operator = "";
  updateHasil();
}

function updateHasil() {
  let hasilElement = document.getElementById("hasil");
  if (bilangan2 === "") {
    hasilElement.value = bilangan1 + operator;
  } else {
    hasilElement.value = bilangan1 + operator + bilangan2;
  }
}
