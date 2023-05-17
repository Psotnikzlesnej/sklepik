class CounterElement extends HTMLElement {
  constructor() {
    super();
    this.counterTemplate = document.querySelector('#counter')
    this.innerHTML = this.counterTemplate.innerHTML
    this.increaseButton = this.querySelector('.counter__button-increase')
    this.decreaseButton = this.querySelector('.counter__button-decrease')
    this.input = this.querySelector('.counter__input')
    this.max = +(this.getAttribute('data-max') ?? Infinity)
    this.min = +(this.getAttribute('data-min') ?? 1)
    this.value = +(this.getAttribute('data-value') ?? 1)

    this.setInputAttributes()
    this.setEventListeners()
  }

  increase(){
    this.decreaseButton.disabled = false
    const newValue = +this.input.value + 1
    this.input.value = newValue
    this.blockOnBoundary(undefined, newValue, this.max)
  }

  decrease(){
    this.increaseButton.disabled = false
    const newValue = +this.input.value - 1
    this.input.value = newValue
    this.blockOnBoundary(this.min, newValue, undefined)
  }

  disableButtons(){
    this.decreaseButton.disabled = false
    this.increaseButton.disabled = false

    const value = +this.input.value
    let limitedValue = value
    if(value > this.max){
      limitedValue = this.max
    }else if(value < this.min){
      limitedValue = this.min
    }
    this.input.value = limitedValue
    this.blockOnBoundary(this.min, limitedValue, this.max)
  }

  setInputAttributes(){
    if(this.max !== Infinity){
      this.input.max = this.max
    }
    this.input.min = this.min
    this.input.value = this.value
    this.blockOnBoundary(this.min, this.value, this.max)
  }

  blockOnBoundary(min, curr, max){
    const hitLowLimit = min !== undefined && min === curr;
    const hitHighLimit = max !== undefined && max === curr;
    if(hitLowLimit){
      this.decreaseButton.disabled = true
    }
    if(hitHighLimit){
      this.increaseButton.disabled = true
    }
  }

  setEventListeners(){
    this.increaseButton.addEventListener('click', this.increase.bind(this))
    this.decreaseButton.addEventListener('click', this.decrease.bind(this))
    this.input.addEventListener('change', this.disableButtons.bind(this))
  }
}

customElements.define('custom-counter', CounterElement)