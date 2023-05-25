(()=>{
    let currIndex = 0;
    const elements = document.querySelectorAll('.featured-carousel__element')
    const leftArrow = document.querySelector('.featured-carousel__arrow--left')
    const rightArrow = document.querySelector('.featured-carousel__arrow--right')
    console.log(elements)

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