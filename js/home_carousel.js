(()=>{
  let currIndex = 0;
  const elements = document.querySelectorAll('.home-carousel__element')
  const dots = document.querySelectorAll('.home-carousel__dot')
  const leftArrow = document.querySelector('.home-carousel__arrow--left')
  const rightArrow = document.querySelector('.home-carousel__arrow--right')

  let timeout = setTimeout(rightArrowClick, 2500)

  leftArrow.addEventListener('click', e=>{
    clearTimeout(timeout)
    const oldIndex = currIndex
    if(--currIndex < 0){
      currIndex = elements.length - 1
    }
    updateElement(oldIndex)
  })

  rightArrow.addEventListener('click', rightArrowClick)

  function rightArrowClick(){
    clearTimeout(timeout)
    const oldIndex = currIndex
    if(++currIndex > elements.length - 1){
      currIndex = 0
    }
    updateElement(oldIndex)
  }

  dots.forEach((dot, i)=>{
    dot.addEventListener('click', e=>{
      clearTimeout(timeout)
      const oldIndex = currIndex
      currIndex = i
      updateElement(oldIndex)
    })
  })

  function updateElement(oldIndex){
    dots[oldIndex].classList.remove('home-carousel__dot--current');
    dots[currIndex].classList.add('home-carousel__dot--current');
    elements[oldIndex].classList.remove('home-carousel__element--current')
    elements[currIndex].classList.add('home-carousel__element--current')
    timeout = setTimeout(rightArrowClick, 2500)
  }

  updateElement(0)
})()
window.addEventListener('DOMContentLoaded', (event) => {
  const carouselContainer = document.querySelector('.home-carousel-container');
  const prevArrow = carouselContainer.querySelector('.home-carousel__arrow--left');
  const nextArrow = carouselContainer.querySelector('.home-carousel__arrow--right');
  const carouselImages = carouselContainer.querySelectorAll('.home-carousel__image');
  const dotsContainer = carouselContainer.querySelector('.home-carousel__dots-container');

  if (carouselImages.length <= 1) {
    prevArrow.style.display = 'none';
    nextArrow.style.display = 'none';
    dotsContainer.style.display = 'none';
  }
});

