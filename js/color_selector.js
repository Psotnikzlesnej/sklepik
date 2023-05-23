class ColorSelector extends HTMLElement {
  constructor() {
    super();
    this.selectTemplate = document.querySelector("#color-selector");
    //trzeba stworzyc shadow, zeby uzywac slotow
    this.attachShadow({ mode: "open" });
    const clone = this.selectTemplate.content.cloneNode(true);
    this.shadowRoot.appendChild(clone);
    this.listElement = this.shadowRoot.querySelector('.select__list')
    const slot = this.shadowRoot.querySelector("slot");
    this.list = [...slot.assignedElements()];
    this.selected = this.getAttribute("data-selected").split(',');

    this.renderColors()
    this.setEventListeners()
  } 

  renderColors(){
    this.list.forEach(el=>{
      const value = el.getAttribute("data-value");
      el.style.background = el.textContent;
      el.textContent = ''
      if(this.selected.includes(value)){
        el.classList.add('color-selector__list-item--selected')
      }
    })
  }

  setEventListeners(){
    this.list.forEach((el) => {
      el.addEventListener("click", (_) => {
        const value = el.getAttribute("data-value");
        el.classList.toggle('color-selector__list-item--selected')
        const valueIndex = this.selected.indexOf(value)
        if(valueIndex !== -1){
          this.selected.splice(valueIndex, 1)
        }else{
          this.selected.push(value)
        }
        this.dispatchEvent(new CustomEvent("selectionchange", {
          detail: {
            value: value,
          },
        }))
      });
    });
  }
}
customElements.define("color-selector", ColorSelector);

document.querySelector('.color-selector').addEventListener('selectionchange', e=> console.log(e))
