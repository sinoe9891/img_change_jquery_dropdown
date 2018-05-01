<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script type="text/javascript" src="//code.jquery.com/jquery-3.1.0.slim.js"></script>
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  <title>Cambiar la Imagen de fondo</title>
  <style type="text/css">
    @import url(//fonts.googleapis.com/css?family=Baloo+Da|Indie+Flower|Open+Sans);
      .mapa1 {
        background-repeat: no-repeat;
        background-size:contain;
        max-width: 100%;
        height: auto;
   }}
        .mapa1 .menu {
          text-align: center;
          background-color: orange;
          padding: 10px;
          margin-top: 20px; }
          .mapa1 .menu button {
            font-family: 'Open Sans', cursive;
            font-size: 16px;
            background-color: #F5E206;
            color: #000;
            width: 150px;
            border: 0; }
            .mapa1 .menu button:hover {
              cursor: pointer;
              background-color: #F0CB05; }
        .mapa1 #articulo {
          margin-top: 51%;
          padding-bottom: 200px; }
          .mapa1 #articulo h1 {
            font-family: 'Open Sans', cursive;
            color: white;
            background-color: #01597A; }
          .mapa1 #articulo p {
            margin: 20px;
            font-family: 'Open Sans', sans-serif;
            color: black;
            background-color: #01597A; }


  </style>
</head>
<body>
  <div class="mapa1">
  <select  name="kitchen_color" id="kitchen_color" onchange="setImage(this);">
      <option  class="mapa1" value="./images/map-01.jpg">Mapa 1</option>
      <option class="mapa1" value="./images/map-02.jpg">Mapa 2</option>
      <option class="mapa1" value="./images/map-03.jpg">Mapa 3</option>
  </select>
  </div>
  <br />
  <img src="./images/map-01.jpg" name="image-swap" class="mapa1" />
<script>
// tell the embed parent frame the height of the content
function setImage(select){
    var image = document.getElementsByName("image-swap")[0];
    image.src = select.options[select.selectedIndex].value;
}
</script>
</body>
</html>
