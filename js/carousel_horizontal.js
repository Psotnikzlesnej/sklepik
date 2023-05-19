const slidesContainer = document.getElementById("slides-container_horizontal");
const slide = document.querySelector(".slide_horizontal");
const prevButton = document.getElementById("slide-arrow-prev_horizontal");
const nextButton = document.getElementById("slide-arrow-next_horizontal");

nextButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft += slideWidth;
});

prevButton.addEventListener("click", () => {
    const slideWidth = slide.clientWidth;
    slidesContainer.scrollLeft -= slideWidth;
});