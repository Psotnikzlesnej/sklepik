<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="info_container">

            <div class= "container">
            <h1>Przykładowy tytuł<h1>

<p>no
        <span id="dots">...</span>
    <div id="more">

        <p>no hejka</p>
        <p>no hejka</p>

    </div>
</p>

     <button id="btn"  onclick="readmore()">Rozwiń</button>
            </div>
            </div>


            <script>

function readmore()
{
var dots = document.getElementById("dots");
var more = document.getElementById("more");
var btn = document.getElementById("btn");

if (dots.style.display === "none")
{
    dots.style.display = "inline";
    btn.innerHTML = "Rozwiń";
    more.style.display = 'none';
}else{
    dots.style.display = 'none';
    btn.innerHTML = "Zwiń";
    more.style.display = 'inline';


}

}
    </script> 

    </body>



</html>