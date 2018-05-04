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


            .mapa2 .menu {
              text-align: center;
              background-color: orange;
              padding: 10px;
              margin-top: 20px; }
              .mapa2 .menu button {
                font-family: 'Open Sans', cursive;
                font-size: 16px;
                background-color: #F5E206;
                color: #000;
                width: 150px;
                border: 0; }
                .mapa2 .menu button:hover {
                  cursor: pointer;
                  background-color: #F0CB05; }
            .mapa2 #articulo {
              margin-top: 51%;
              padding-bottom: 200px; }
              .mapa2 #articulo h1 {
                font-family: 'Open Sans', cursive;
                color: white;
                background-color: #01597A; }
              .mapa2 #articulo p {
                margin: 20px;
                font-family: 'Open Sans', sans-serif;
                color: black;
                background-color: #01597A; }
        

  </style>
  <script type="text/javascript">
    var VanillaRunOnDomReady = function() {
    $(function(){
      var botones = $('.menu').find('button');
      var divContenido = $('#contenido');
      botones.on('click', function(event){
        var boton = $(this);
        var style = boton.data('style');
        //Quita todas las clases antes de agregar una nueva
        divContenido.removeClass();
        if(style !== undefined){
          divContenido.addClass(style);
        }
      })
    })
    }
    var alreadyrunflag = 0;
    if (document.addEventListener)
        document.addEventListener("DOMContentLoaded", function(){
            alreadyrunflag=1;
            VanillaRunOnDomReady();
        }, false);
        else if (document.all && !window.opera) {
          document.write('<script type="text/javascript" id="contentloadtag" defer="defer" src="javascript:void(0)"><\/script>');
          var contentloadtag = document.getElementById("contentloadtag")
          contentloadtag.onreadystatechange=function(){
              if (this.readyState=="complete"){
                  alreadyrunflag=1;
                  VanillaRunOnDomReady();
            }
        }
    }
    window.onload = function(){
      setTimeout("if (!alreadyrunflag){VanillaRunOnDomReady}", 0);
    }
  </script>
</head>
<body>
  <div class="mapa1">
  <select  class="dropdown" name="kitchen_color" id="kitchen_color" onchange="setImage(this);">
      <option  class="mapa1" value="./images/map-01.jpg">Inundaciones</option>
      <option class="mapa1" value="./images/map-02.jpg">Deslizamientos</option>
      <option class="mapa1" value="./images/map-03.jpg">Lidar</option>
  </select>
  </div>
  <div><p></p></div>
  <div id="contenido">
  <div class="menu">
    <button data-style="mapa1">
     +
    </button>
    <button data-style="mapa2">
     -
    </button>
  </div>
  <div id="articulo">
    <h1>
      DEMO PGRD
    </h1>
  </div>
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
    <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "vogabqoj"
      }], "*")
    }
    </script>
</body>
</html>
