const links = document.querySelectorAll(".page-navigation__item");

links.forEach((item) => {
  item.addEventListener("click", () => {
    let el = document.getElementById(item.getAttribute("data-link"));
    el.scrollIntoView({ behavior: "smooth", block: "start" });
  });
});

