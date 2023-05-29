class PriceRange extends HTMLElement {
  constructor() {
    super();
    this.rangeTemplate = document.querySelector("#range");
    const clone = this.rangeTemplate.content.cloneNode(true);
    this.appendChild(clone);
    this.rangeWidth = this.querySelector(".range__input--min").offsetWidth
    this.rangeMin = this.querySelector('.range__input--min')
    this.rangeMax = this.querySelector('.range__input--max')
    this.inputMin = this.querySelector('.range__value--min')
    this.inputMax = this.querySelector('.range__value--max')
    this.min = this.bottomBoundary = +(this.getAttribute('data-min') ?? 1);
    this.max = this.topBoundary = +(this.getAttribute('data-max') ?? 10000);

    this.setDefault()
    this.setEventListeners()
  }

  setDefault(){
    document.documentElement.style.setProperty("--range-width", this.rangeWidth + "px");
    this.rangeMin.value = this.inputMin.value = this.rangeMin.min = this.inputMin.min = this.rangeMax.min = this.inputMax.min = this.bottomBoundary;
    this.rangeMax.value = this.inputMax.value = this.rangeMin.max = this.inputMin.max = this.rangeMax.max = this.inputMax.max = this.topBoundary;
    this.updateProgress()
  }

  // nie wiem jak to inaczej nazwac i w ogole gowniana ta metoda
  eventListenerFactory(elementMin, elementMax, target){
    let maxValue = +elementMax.value;
    let minValue = +elementMin.value;
    const isMinBiggerThanMax = minValue >= maxValue
    if(target === elementMin){
      if(isMinBiggerThanMax){
        minValue = maxValue - 1
      }
      if(minValue < this.bottomBoundary){
        minValue = this.bottomBoundary
      }
      this.min = this.inputMin.value = this.rangeMin.value = minValue;
    }else {
      if(isMinBiggerThanMax){
        maxValue = minValue + 1
      }
      if(maxValue > this.topBoundary){
        maxValue = this.topBoundary
      }
      this.max = this.inputMax.value = this.rangeMax.value = maxValue;
    }
    this.dispatchEvent(new CustomEvent("rangechange", {
      detail: {
        min: this.min,
        max: this.max,
      },
    }))
    this.updateProgress()
  }

  setEventListeners(){
    this.rangeMin.addEventListener('input', (e)=>this.eventListenerFactory(this.rangeMin, this.rangeMax, e.target))
    this.inputMin.addEventListener('change', (e)=>this.eventListenerFactory(this.inputMin, this.inputMax, e.target))
    this.rangeMax.addEventListener('input', (e)=>this.eventListenerFactory(this.rangeMin, this.rangeMax, e.target))
    this.inputMax.addEventListener('change', (e)=>this.eventListenerFactory(this.inputMin, this.inputMax, e.target))
  }
  
  updateProgress(){
    const maxValue = this.max;
    const minValue = this.min;
    const minWidth = ((minValue - this.bottomBoundary)/(this.topBoundary-this.bottomBoundary)*this.rangeWidth)
    const maxWidth = ((maxValue - this.bottomBoundary) / (this.topBoundary - this.bottomBoundary)*this.rangeWidth)
    document.documentElement.style.setProperty("--left", Math.floor(minWidth) + "px");
    document.documentElement.style.setProperty("--width", Math.floor(maxWidth-minWidth) + "px");
  }
}

customElements.define('price-range', PriceRange)