<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\category_description.scss">
    <link rel="stylesheet" href="..\styles\category_description.css">
</head>
<body>
    <div class="info_container">

            <div class= "container">
            <h1>Przykładowy tytuł</h1>


<div class="lapa" id="lapa">

          <p class="hej">Gniazda elektryczne są niezbędnym elementem instalacji elektrycznej. To dzięki nim użytkownicy mogą zasilić urządzenia i sprzęt. Kontakty elektryczne są funkcjonalne i łatwe w montażu. Posiadamy zarówno gniazda instalacyjne natynkowe, podtynkowe, nowoczesne gniazdka teleinformatyczne, RTV i SAT, jak i hermetyczne, sprawdzające się tam, gdzie istnieje ryzyko kontaktu z wodą – łazienka, kuchnia
        <span id="dots">...</span>
    <div id="more">

       <p class="hej">emil to cwel Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, harum provident soluta exercitationem nisi nulla distinctio laudantium dolore hic sapiente voluptates dolorum odio cupiditate porro minima maiores tempore quisquam vero.</p>

    </div>

<div class="lapa2">

 <div class="line"></div>

 <a id="btn" onclick="readmore()">Rozwiń</a>

</div>

</div>


     
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
    lapa.style.height = '150px';

}else{
    lapa.style.height = '140px';
    dots.style.display = 'none';
    btn.innerHTML = "Zwiń";
    more.style.display = 'inline';
}

}
    </script> 

    </body>



</html>