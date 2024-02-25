
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
