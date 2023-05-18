class SelectElement extends HTMLElement {
  constructor() {
    super();
    this.selectTemplate = document.querySelector('#select')
    this.attachShadow({mode: 'open'})
    const clone = this.selectTemplate.content.cloneNode(true);
    this.shadowRoot.appendChild(clone);
    this.currentValue = this.querySelector('.select__current-value')
    const slot = this.shadowRoot.querySelector('slot')
    this.list = slot.assignedNodes()
    this.value = this.getAttribute('data-default-value')
    this.curr_item = ''
    this.list.forEach(el=>{
      el.addEventListener('click', e=>{
        this.value
      })
    })
  }
}
customElements.define('custom-select', SelectElement)