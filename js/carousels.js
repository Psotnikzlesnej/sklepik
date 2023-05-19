const slidesContainer = document.getElementById("slides-container");
const slide = document.querySelector(".slide");
const prevButton = document.getElementById("slide-arrow-prev");
const nextButton = document.getElementById("slide-arrow-next");

nextButton.addEventListener("click", () => {
    slidesContainer1.scrollLeft += slide1witdh;
    slidesContainer.scrollTop += slide2witdh;
});

prevButton.addEventListener("click", () => {
    slidesContainer1.scrollLeft -= slide1witdh;
    slidesContainer.scrollTop -= slide2witdh;
});

const slidesContainer1 = document.getElementById("slides-container_horizontal");
const slide1 = document.querySelector(".slide_horizontal");
const prevButton1 = document.getElementById("slide-arrow-prev_horizontal");
const nextButton1 = document.getElementById("slide-arrow-next_horizontal");

var slide1witdh = slide1.clientWidth;
var slide2witdh = slide.clientWidth;

nextButton1.addEventListener("click", () => {
    slidesContainer1.scrollLeft += slide1witdh;
    slidesContainer.scrollTop += slide2witdh;
});

prevButton1.addEventListener("click", () => {
    const slideWidth = slide1.clientWidth;
    slidesContainer1.scrollLeft -= slide1witdh;
    slidesContainer.scrollTop -= slide2witdh;
});