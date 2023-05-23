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

const bannercontainer = document.getElementById("slides-container_banner");
const slide_banner = document.querySelector(".slide_banner");
const prev = document.getElementById("slide-arrow-prev_banner");
const next = document.getElementById("slide-arrow-next_banner");
const image = document.getElementById("image40");
const image2 = document.getElementById("image41");

next.addEventListener("click", () => {
  const slideWidth = slide_banner.clientWidth;
  bannercontainer.scrollLeft += slideWidth;
});

prev.addEventListener("click", () => {
  const slideWidth = slide_banner.clientWidth;
  bannercontainer.scrollLeft -= slideWidth;
});

image.addEventListener("click", () => {
  const slideWidth = slide_banner.clientWidth;
  bannercontainer.scrollLeft += slideWidth;
});
image2.addEventListener("click", () => {
  const slideWidth = slide_banner.clientWidth;
  bannercontainer.scrollLeft -= slideWidth;
});
