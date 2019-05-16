<?php
 
  include_once('user.php');
  include_once('user_session.php');

$userSession = new UserSession();
$user = new User();

  if(isset($_SESSION['user']))
  {
    echo "hay sesion";
  }
  else if (isset($_POST['username']) && isset($_POST['password'])) 
  {
    //echo "validacion de login";
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    if($user -> userExists($userForm, $passForm))
    {
      echo "Usuario Validado";
      $userSession->setCurrentUser($userForm);
      $user->setUser($userForm);
      var_dump("$userSession");
      include_once('Adm.php');

    }

    else
    {
      $errorLogin = "Nombre de usuario y/o contraseña son incorrectos";

    }
  }
  else
  {
    echo "Login";
    include_once('login.php');
  }

  ?>
