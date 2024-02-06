
//===============
//===== AOS =====
//===============
AOS.init();

//==================
//===== SWIPER =====
//==================
var swiperPlayers = new Swiper(".mainhero .swiper-players", {
    direction: "vertical",
    loop: true,
    speed: 2000,
    autoplay: {
        delay: 500
    },
    // sliderChange: function () {
    //     console.log('awikwok');
    // }

    // pagination: {
    //     el: ".swiper-pagination",
    //     clickable: true,
    // },
});

swiperPlayers.on("beforeTransitionStart", () => {
    console.log('awikwok');
})


// if (urlLocation == '/') {
//     const beranda = document.getElementsByClassName('beranda');
//     beranda[0].classList.add("activate");
// } else if (urlLocation == '/roaster') {
//     const roaster = document.getElementsByClassName('roaster');
//     roaster[0].classList.add("activate");
// } else if (urlLocation == '/gallery') {
//     const gallery = document.getElementsByClassName('gallery');
//     gallery[0].classList.add("activate");
// } else if (urlLocation == '/contact') {
//     const contact = document.getElementsByClassName('kontak');
//     contact[0].classList.add("activate");
// }

