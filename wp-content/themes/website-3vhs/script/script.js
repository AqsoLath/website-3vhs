
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
    // freeMode: true,
    autoplay: {
        delay: 500,
        disableOnInteraction: false
    },
});

// var swiperPlayers = new Swiper(".divider-rosters .swiper-divider-rosters", {
//     // loop: true,
//     rewind: true,
//     speed: 2000,
//     freeMode: true,
//     slidesPerView: 10,
//     spaceBetween: 16,
//     autoplay: {
//         delay: 0,
//         disableOnInteraction: false
//     },
//     on: {
//         reachEnd: function () {
//             console.log('mentok');
//             // swiperPlayers.slideToLoop(0)
//             // swiperPlayers.init(swiperPlayers)
//             // swiperPlayers.setProgress(0, 0);
//             // swiperPlayers.update()
//         }
//     }
// });


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

(function ($) {
    function runMarquee() {
        let marqueeWrapper = $(".marquee")
        let marqueeItem = $(".marquee span");


        // setTimeout(runMarquee, 500);
    }
    $(document).ready(function () {
        runMarquee();
    })

})(jQuery);