class SelectElement extends HTMLElement {
  constructor() {
    super();
    this.selectTemplate = document.querySelector("#select");
    this.attachShadow({ mode: "open" });
    const clone = this.selectTemplate.content.cloneNode(true);
    this.shadowRoot.appendChild(clone);
    this.currentElement = this.shadowRoot.querySelector(
      ".select__current-element"
    );
    const slot = this.shadowRoot.querySelector("slot");
    this.list = [...slot.assignedElements()];
    const defaultValue = this.getAttribute("data-default-value");
    this.value = defaultValue;
    const selectedByDefault = this.list.find((el) =>
      defaultValue ? el.getAttribute("data-value") === defaultValue : true
    );
    this.setNewContent(selectedByDefault);
    this.list.forEach((el) => {
      el.addEventListener("click", (_) => {
        this.value = el.getAttribute("data-value");
        this.setNewContent(el);
      });
    });
  }

  setNewContent(element) {
    this.currentElement.textContent = element.textContent;
  }
}
customElements.define("custom-select", SelectElement);
