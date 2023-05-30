// const slidesContainer = document.getElementById("slides-container");
// const slide = document.querySelector(".slide");
const slidesVertical = document.querySelectorAll(".slide-vertical");

let currIndex = 0;
const prevHorizontalButton = document.getElementById(
  "slide-arrow-prev_horizontal"
);
const nextHorizontalButton = document.getElementById(
  "slide-arrow-next_horizontal"
);
const prevVerticalButton = document.querySelector(
  ".slide-arrow-vertical--prev"
);
const nextVerticalButton = document.querySelector(
  ".slide-arrow-vertical--next"
);
const slides = document.querySelectorAll(".slide_horizontal");

function next() {
  if (slides[0].classList.contains("slide_horizontal--reverse")) {
    slides.forEach((slide) => {
      slide.classList.remove("slide_horizontal--reverse");
    });
  }
  const oldIndex = currIndex;
  if (++currIndex > slides.length - 1) {
    currIndex = 0;
  }
  setTimeout(() => updateClasses(oldIndex), 0);
}

function updateClasses(oldIndex) {
  slides[oldIndex].classList.add("slide_horizontal--leaving");
  slides[oldIndex].classList.remove("slide_horizontal--current");
  slidesVertical[oldIndex].classList.remove("slide-vertical--current");
  slides[currIndex].classList.add("slide_horizontal--current");
  slidesVertical[currIndex].classList.add("slide-vertical--current");
  slidesVertical[currIndex].scrollIntoView({
    block: "nearest",
    inline: "nearest",
  });
  setTimeout(() => {
    slides[oldIndex].classList.remove("slide_horizontal--leaving");
  }, 500);
  // timeout = setTimeout(rightArrowClick, 2500)
}

function prev() {
  slides.forEach((slide) => {
    slide.classList.add("slide_horizontal--reverse");
  });
  const oldIndex = currIndex;
  if (--currIndex < 0) {
    currIndex = slides.length - 1;
  }
  setTimeout(() => updateClasses(oldIndex), 0);
}

let shouldWait = false;

nextHorizontalButton.addEventListener("click", throttle(next, 500));
nextVerticalButton.addEventListener("click", throttle(next, 500));
prevHorizontalButton.addEventListener("click", throttle(prev, 500));
prevVerticalButton.addEventListener("click", throttle(prev, 500));
slidesVertical.forEach((el, i) =>
  el.addEventListener("click", throttle(verticalClick, 500, i))
);

function throttle(cb, delay = 250, ...args) {
  return () => {
    if (shouldWait) return;
    cb.apply(null, args);
    shouldWait = true;
    setTimeout(() => {
      shouldWait = false;
    }, delay);
  };
}

function verticalClick(i) {
  const oldIndex = currIndex;
  currIndex = i;
  if (currIndex === oldIndex) {
    return;
  }
  const goBackwards =
    !slides[0].classList.contains("slide_horizontal--reverse") &&
    oldIndex > currIndex;
  const goForward =
    slides[0].classList.contains("slide_horizontal--reverse") &&
    oldIndex < currIndex;
  slides.forEach((slide) => {
    if (goBackwards) {
      slide.classList.add("slide_horizontal--reverse");
    } else if (goForward) {
      slide.classList.remove("slide_horizontal--reverse");
    }
  });
  setTimeout(() => updateClasses(oldIndex), 0);
}

slides[0].classList.add("slide_horizontal--current");
slidesVertical[0].classList.add("slide-vertical--current");
