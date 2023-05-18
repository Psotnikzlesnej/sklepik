<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/page_navigation.css">
    <title>Document</title>
</head>
<script>
 function changeColor(div) {
    div.classList.toggle("blue");
  }

</script>

<body>
<div class="nav-long">
    
    <div  class="cate">
    <span class="myDiv" onclick="changeColor(this)">OPIS PRODUKTU</span>
    <span class="myDiv" onclick="changeColor(this)">DANE TECHNICZNE</span>
    <span class="myDiv" onclick="changeColor(this)">INNE Z KATEGORII</span>
    </div>
    </div>
</body>
</html>