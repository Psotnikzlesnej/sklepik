const links = document.querySelectorAll(".hejka");

links.forEach((item) => {
  item.addEventListener("click", () => {
    let el = document.getElementById(item.getAttribute("data-link"));
    el.scrollIntoView({ behavior: "smooth", block: "start" });
  });
});

window.myFunction = function (event) {
  // reset all menu items
  document.querySelectorAll("ul a.active").forEach(function (item) {
    item.classList.remove("active");
  });
  // mark as active selected menu item
  event.target.classList.add("active");
};
