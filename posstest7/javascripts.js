var element = document.body;

function UbahWarna(){
    alert("klik ganti tema")
    element.classList.toggle("gelap")
}

const judul = document.getElementById('judul')
judul.innerHTML='<em>YantiCoffee';

function Ubah_image(a){
    document.getElementById("gambar").src=a;
}
