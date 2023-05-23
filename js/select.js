class SelectElement extends HTMLElement {
  constructor() {
    super();
    this.selectTemplate = document.querySelector("#select");
    //trzeba stworzyc shadow, zeby uzywac slotow
    this.attachShadow({ mode: "open" });
    const clone = this.selectTemplate.content.cloneNode(true);
    this.shadowRoot.appendChild(clone);
    this.currentContent = this.shadowRoot.querySelector(
      ".select__current-content"
    );
    this.currentElement = this.shadowRoot.querySelector(
      ".select__current-element"
    );
    this.listElement = this.shadowRoot.querySelector('.select__list')
    this.icon = this.shadowRoot.querySelector('.select__icon')
    const slot = this.shadowRoot.querySelector("slot");
    this.list = [...slot.assignedElements()];
    this.value;
    this.setDefault()
    this.setEventListeners()
  }

  setNewContent(element) {
    this.currentContent.textContent = element.textContent;
  }

  setDefault(){
    const defaultValue = this.getAttribute("data-default-value");
    this.value = defaultValue
    const selectedByDefault = this.list.find((el) =>
      defaultValue ? el.getAttribute("data-value") === defaultValue : true
    );
    selectedByDefault.classList.add('select__list-item--selected')
    this.setNewContent(selectedByDefault);
  }

  setEventListeners(){
    this.list.forEach((el) => {
      el.addEventListener("click", (_) => {
        this.value = el.getAttribute("data-value");
        this.setNewContent(el);
        this.makeEveryItemVisible()
        el.classList.add('select__list-item--selected')
        this.icon.classList.toggle('select__icon--rotated')
        this.listElement.classList.add('select__list--hidden')
        this.dispatchEvent(new CustomEvent("selectionchange", {
          detail: {
            value: this.value,
            content: el.textContent
          },
        }))
      });
    });

    this.currentElement.addEventListener('click', _=>{
      this.icon.classList.toggle('select__icon--rotated')
      console.log('xD')
      this.listElement.classList.toggle('select__list--hidden')
    })
  }

  makeEveryItemVisible(){
    this.list.forEach(el=>{
      el.classList.remove('select__list-item--selected');
    })
  }
}
customElements.define("custom-select", SelectElement);

// document.querySelector('.select').addEventListener('selectionchange', e=> console.log(e))
