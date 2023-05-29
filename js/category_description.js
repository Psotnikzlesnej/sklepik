function readmore() {
    var dots = document.getElementById("dots");
    var more = document.getElementById("more");
    var readmore = document.getElementById("readmore");
    var box = document.getElementById("container_text_box");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        readmore.innerHTML = "Rozwiń";
        more.style.display = "none";
        // box.style.height = "150px";
    } else {
        dots.style.display = "none";
        readmore.innerHTML = "Zwiń";
        more.style.display = "inline";
        // box.style.height = "140px";
    }
}