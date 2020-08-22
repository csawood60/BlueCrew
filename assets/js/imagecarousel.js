let slideIndex = 0;

// adds active class to slide to be displayed, removes active class from all slides between slide shifts
const createCarousels = function() {

    const carouselList = document.getElementsByClassName("carousel-inner");

    for (let i = 0; i < carouselList.length; i++) {
        let carousel = carouselList[i];
        initializeCarousel(carousel, {
            'slideTime': carousel.attributes.getNamedItem('data-slide-time').value
        });
    }
}

const initializeCarousel = function(carouselEl, options) {
    let listSlides = carouselEl.children;

    for (let i = 0; i < listSlides.length; i++) {
        listSlides[i].classList.remove("active");
    }

    slideIndex++;

    if (slideIndex > listSlides.length) {
        slideIndex = 1;
    }

    listSlides[slideIndex - 1].classList.add("active");


    setTimeout(function() {
        initializeCarousel(carouselEl, options)
    }, options.slideTime);
}

createCarousels();
