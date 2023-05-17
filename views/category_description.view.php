<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/category_description.css">
    <link rel="stylesheet" href="style.scss">

</head>
<body>
    <div class="info_container">

            <div class= "container">
            <h1>Przykładowy tytuł</h1>


<div class="lapa" id="lapa">

<p>Gniazda elektryczne są niezbędnym elementem instalacji elektrycznej. To dzięki nim użytkownicy mogą zasilić urządzenia i sprzęt. Kontakty elektryczne są funkcjonalne i łatwe w montażu. Posiadamy zarówno gniazda instalacyjne natynkowe, podtynkowe, nowoczesne gniazdka teleinformatyczne, RTV i SAT, jak i hermetyczne, sprawdzające się tam, gdzie istnieje ryzyko kontaktu z wodą – łazienka, kuchnia
        <span id="dots">...</span>
    <div id="more">

        <p>no hejka</p>
        <p>no hejka</p>

    </div>
</p>

</div>

     <button id="btn"  onclick="readmore()">Rozwiń</button>
            </div>
            </div>

            <script>

function readmore()
{
var dots = document.getElementById("dots");
var more = document.getElementById("more");
var btn = document.getElementById("btn");
var lapa = document.getElementById("lapa");

if (dots.style.display === "none")
{
    dots.style.display = "inline";
    btn.innerHTML = "Rozwiń";
    more.style.display = 'none';
    lapa.style.height = '50px';

}else{
    lapa.style.height = '150px';
    dots.style.display = 'none';
    btn.innerHTML = "Zwiń";
    more.style.display = 'inline';


}

}
    </script> 

    </body>



</html>