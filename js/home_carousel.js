let currIndex = 0;
const elements = document.querySelectorAll('.carousel__element')
const leftArrow = document.querySelector('.carousel__arrow--left')
const rightArrow = document.querySelector('.carousel__arrow--right')
elements[currIndex].classList.add('carousel__element--active')

leftArrow.addEventListener('click', e=>{
  const oldIndex = currIndex
  if(--currIndex < 0){
    currIndex = elements.length - 1
  }
  updateElement(oldIndex)
})
rightArrow.addEventListener('click', e=>{
  const oldIndex = currIndex
  if(++currIndex > elements.length - 1){
    currIndex = 0
  }
  updateElement(oldIndex)
})

function updateElement(oldIndex){
  elements[oldIndex].classList.remove('carousel__element--current')
  elements[currIndex].classList.add('carousel__element--current')
}