(()=>{
    const clientWidth = document.body.clientWidth;
    let amount = 5;
    const container = document.querySelector('.featured-carousel__product-container')
    let currElement = createElement();
    const products = document.querySelectorAll('.featured-carousel__product')

    function createElement(){
        const div = document.createElement('div')
        div.classList.add('featured-carousel__element')
        container.appendChild(div)
        return div
    }

    if(clientWidth < 700) {
        amount = 1
    }else if(clientWidth < 1000){
        amount = 2
    }else if(clientWidth < 1200){
        amount = 3
    }else if(clientWidth < 1400){
        amount = 4
    }

    products.forEach((el, i)=>{
        currElement.appendChild(el)
        if((i+1) % amount === 0 && products.length - 1 !== i){
            currElement = createElement()
        }
    })

    let currIndex = 0;
    const elements = document.querySelectorAll('.featured-carousel__element')
    const leftArrow = document.querySelector('.featured-carousel__arrow--left')
    const rightArrow = document.querySelector('.featured-carousel__arrow--right')

    leftArrow.addEventListener('click', e=>{
    const oldIndex = currIndex
    if(--currIndex < 0){
        currIndex = elements.length - 1
    }
    updateElement(oldIndex)
    })

    rightArrow.addEventListener('click', rightArrowClick)

    function rightArrowClick(){
    const oldIndex = currIndex
    if(++currIndex > elements.length - 1){
        currIndex = 0
    }
    updateElement(oldIndex)
    }

    function updateElement(oldIndex){
        console.log(oldIndex)
        elements[oldIndex].classList.remove('featured-carousel__element--current')
        elements[currIndex].classList.add('featured-carousel__element--current')
    }

    updateElement(0)
})()
window.addEventListener('DOMContentLoaded', (event) => {
    const featuredCarousel = document.querySelector('.featured-carousel');
    const prevArrow = featuredCarousel.querySelector('.featured-carousel__arrow--left');
    const nextArrow = featuredCarousel.querySelector('.featured-carousel__arrow--right');
    const productContainer = featuredCarousel.querySelector('.featured-carousel__product-container');
    const products = productContainer.querySelectorAll('.featured-carousel__product');
  
    if (products.length <= 4) {
      prevArrow.style.display = 'none';
      nextArrow.style.display = 'none';
    }
  });
  