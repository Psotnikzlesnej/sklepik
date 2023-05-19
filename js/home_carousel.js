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

function changeImage() {
    let displayImage = document.getElementById("image40");
    if (displayImage.src.match("../photos/banners/Group_40.png")) {
        displayImage.src = "../photos/banners/Mask_group_40.png";
    } else {
        displayImage.src = "../photos/banners/Group_40.png";
    }
}