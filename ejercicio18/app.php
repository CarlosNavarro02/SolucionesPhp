<?php

class App
{

  //metodo run carga la app y envia al metodo login

  public function run()
  {
    if (isset($_GET['method'])) {
      $method = $_GET['method'];
    } else {
      $method = 'login';
    }

    $this->$method();
  }
  // Si existe una cookie reedirige directamente al home si no se va al login
  public function login()
  {
    if (isset($_COOKIE['name'])) {
      header('Location: ?method=home');
      return;
    }
    include('views/login.php');
  }

  //Si el campo nombre se envia se guardan las cookies en las variables definidas como name y password
  public function auth()
  {

    //recoger datos con el array POST
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
      $password = $_POST['password'];
    } else {
      header('Location: ?method=login');
      return;
    }

    //Definicion de las cookies
    setcookie('name', $name, time() + 60 * 60 * 2);
    setcookie('password', $password, time() + 60 * 60 * 2);
    
    //redireccion al index 
    header('Location: index.php?method=home');
  }

  public function home()
  {
    if (!isset($_COOKIE['name'])) {
      header('Location: ?method=login');
      return;
    }
//Los archivos son incluidos con base en la ruta de acceso dada o, si ninguna es dada, el include_path especificado. 
//Si el archivo no se encuentra en el include_path, include finalmente verificará en el 
//propio directorio del script que hace el llamado y en el directorio de trabajo actual, antes de fallar.
    include('views/home.php');
  }

  //La funcion de closes elimina las cookies 
  public function close()
  {

    setcookie('name', '',  -100);
    setcookie('password', '',  -100);
    header('Location: index.php?method=login');
  }
}