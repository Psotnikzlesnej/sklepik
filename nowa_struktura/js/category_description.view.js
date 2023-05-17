var container = document.querySelector(".info_container");
var str =
    "Gniazda elektryczne są niezbędnym elementem instalacji elektrycznej. To dzięki nim użytkownicy mogą zasilić urządzenia i sprzęt. Kontakty elektryczne są funkcjonalne i łatwe w montażu. Posiadamy zarówno gniazda instalacyjne natynkowe, podtynkowe, nowoczesne gniazdka teleinformatyczne, RTV i SAT, jak i hermetyczne, sprawdzające się tam, gdzie istnieje ryzyko kontaktu z wodą – łazienka, kuchnia… Gniazda elektryczne są niezbędnym elementem instalacji elektrycznej. To dzięki nim użytkownicy mogą zasilić urządzenia i sprzęt. Kontakty elektryczne są funkcjonalne i łatwe w montażu. Posiadamy zarówno gniazda instalacyjne natynkowe, podtynkowe, nowoczesne gniazdka teleinformatyczne, RTV i SAT, jak i hermetyczne, sprawdzające się tam, gdzie istnieje ryzyko kontaktu z wodą – łazienka, kuchnia…";
var arr = str.split(" ");
var count = arr.length;
if (count > 50) {
    container.innerHTML += `<div class="info"></div>   <button type="button" class="collapsible">Rozwiń</button> `;
    var coll = document.querySelector(".collapsible");
    var info = document.querySelector(".info");
    for (var i = 24; i <= count - 1; i++) {
        info.innerHTML += arr[i] + " ";
    }

    coll.addEventListener("click", function() {
        coll.classList.toggle("active");
        if (info.style.display === "block") {
            info.style.display = "none";
        } else {
            info.style.display = "block";
        }
    });
}