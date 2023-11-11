

const urlLocation = location.pathname;

console.log("urlLocation  :" ,urlLocation,);


if(urlLocation == '/'){
    const beranda = document.getElementsByClassName('beranda');
    beranda[0].classList.add("activate");
} else if ( urlLocation == '/roaster') {
    const roaster = document.getElementsByClassName('roaster');
    roaster[0].classList.add("activate");
} else if ( urlLocation == '/gallery') {
    const gallery = document.getElementsByClassName('gallery');
    gallery[0].classList.add("activate");
} else if ( urlLocation == '/contact') {
    const contact = document.getElementsByClassName('kontak');
    contact[0].classList.add("activate");
} 
