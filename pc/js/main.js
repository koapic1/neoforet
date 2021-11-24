Splitting();

const mainVisualSlider = new Swiper("#mainVisual", {
    autoplay: true,
    speed: 1000,
    effect: "fade",
    loop: true,
    pagination: {
        el: "#mainVisual .pagination",
        type: "bullets",
        clickable: true,
    },
});

const productSlider = new Swiper("#product .list", {
    speed: 600,
    slidesPerView: 3, //화면에 보여지는 갯수
    slidesPerGroup: 3, //묶음
    navigation: {
        prevEl: "#product .prev",
        nextEl: "#product .next",
    },
});

gsap.from("#mainVisual .slogan .main .char", { opacity: 0, x: 150, ease: "slow", dutation: 2, stagger: 0.1 });
gsap.from("#mainVisual .slogan .sub .char", { opacity: 0, y: 150, ease: "back", dutation: 1, delay: 1.8, stagger: 0.1 });

//f(x,y) = x+y*3; f(3,5) = 18
