<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="get">
    <p>Elige la funcion que quieres realizar</p>
    <p>
      <input type="submit" name="boton" value="Index">
      <input type="submit" name="boton1" value="Fibionnaci">
      <input type="submit" name="boton2" value="Potencias de 2">
      <input type="submit" name="boton3" value="factoriales">
      <input type="submit" name="boton4" value="primos">

    </p>
  </form>
  <?php
    //La funcion del INDEX es ejecutar todas las funciones en la clase 'app' , por medio de botones para ejecutarse
  require_once "App.php";
  $app = new App;

  if (isset($_GET['boton'])) {

    $app->index();
  }
  if (isset($_GET['boton1'])) {

    $app->fibonnaci();
  }

  if (isset($_GET['boton2'])) {

    $app->potencia();
  }

  if (isset($_GET['boton3'])) {

    $app->factorial();
  }
  if (isset($_GET['boton4'])) {

    $app->primo();
  }

  ?>
</body>

</html>