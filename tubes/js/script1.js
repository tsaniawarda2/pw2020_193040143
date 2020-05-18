const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.buku');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika menuliskan keyword
keyword.addEventListener('keyup', function () {
  const xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open('get', 'ajax/buku.php?keyword=' + keyword.value);
  xhr.send();

});

