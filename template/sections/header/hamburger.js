function hamburger() {
    var x = document.getElementById("hamburger__menu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}