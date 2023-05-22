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
const wrapper = document.querySelector(".dots-wrapper");
const dots = document.querySelectorAll(".dot");

next.addEventListener("click", () => {
  const slideWidth = slide_banner.clientWidth;
  bannercontainer.scrollLeft += slideWidth;
});

prev.addEventListener("click", () => {
  const slideWidth = slide_banner.clientWidth;
  bannercontainer.scrollLeft -= slideWidth;
});

var btnContainer = document.getElementById("dots-wrapper");
var btns = btnContainer.getElementsByClassName("dot");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
