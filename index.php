<?php
	session_start();
?>

<!doctype html>
<html lang="es">
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Montserrat&family=Oswald:wght@400;700&family=Quicksand:wght@300;400;500;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/queries.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aromatic - Inicio</title>
  </head>
  <body>

  <?php include("navbar.php"); ?>

      <div style="width: 100%;" class="port">
        <img width="100%" src="img/pagini4.jpg" alt="Portada">
      </div>

      <div class="tf">
        <h1>Encontra Tu Fragancia Ideal</h1>
        <h2>Perfumes, Fragancias, Aromatizantes y mas</h2>
        <a href="moger/index.php">MIRA NUESTRO CATALOGO</a>
      </div>

      <div class="masv">
        <h1>Podria interesarte...</h1>
        <div class="productos">
          <!-- <button type="button" id="fi"><</button>
          <button type="button" id="fd">></button> -->

        <a href="moger/index.php" class="prod">
          <img width="100%" src="img/sahumerio.jpg" alt="sahumerio">
          <h1>Producto 1</h1>
          <h2>$125</h2>
        </a>
        <a href="moger/index.php" class="prod">
          <img width="100%" src="img/sahumerio.jpg" alt="sahumerio">
          <h1>Producto 2</h1>
          <h2>$250</h2>
        </a>
        <a href="moger/index.php" class="prod">
          <img width="100%" src="img/sahumerio.jpg" alt="sahumerio">
          <h1>Producto 3</h1>
          <h2>$500</h2>
        </a>

        <a class="mm" href="moger/index.php">MIRA OTROS PRODUCTOS ASI</a>

        </div>
      </div>

    <div class="backg"></div> 
    <div class="cgrup">
    <div class="circulo" id="ciz"></div>
    <div class="imag2"><img src="img/fragancia.png" width="100%"></div> 
    </div>

    <div class="future" id="izq">

      <h1>¿Que es Aromatic?</h1>
      <h3>Aromatic es un sistema de ventas centrado en vender productos aromatizantes y decorativos para el hogar, trabajamos junto a Saphirus para vender estos productos y hacer posible que lleguen a tus manos. Aromatic fue hecho por Gragus Corp. Inc. una de diseño y elaboración de paginas web</h3>

    </div>

    <div class="cgrup">
    <div class="imag1"><img src="img/difusor.png" width="100%"></div> 
    <div class="circulo" id="cde"></div>
    </div>

    <div class="future" id="der">

      <h1>Envios</h1>
      <h3>Aromatic cuenta con una politica de envios de encuentro, es decir que, los puntos de envio son puestos por el administrador de la pagina y seran lugares publicos en los que tanto el administrador como el cliente puedan llegar y les quede comodo. En ese lugar acordado el cliente pagara el producto por el metodo de pago deseado y se le entregara dicho producto para que asi se complete el envio</h3>

    </div>

    <div style="margin-top: 20%;"> </div>

    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>