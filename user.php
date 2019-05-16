<?php
	include_once('DB.php');
 	class User extends DB
 	{

 		private $nombre;
 		private $username;


 		public function userExists($user, $pass)
 		{

 			$query = $this->connect()->prepare("SELECT * FROM ibq.usuarios WHERE usuario = '$user' and contrasena = '$pass'");
 			$query-> execute(['usuario'=> $user, 'contrasena'=> $pass]);

 		if($query->rowCount())
 			{
 				return true;
 			}
 		else
 			{
 				return false;
 			}
 		}

 		public function setUser($user)
 		{
			$query = $this -> connect() -> prepare("SELECT * FROM ibq.usuarios WHERE usuario = '$user'");
			$query -> execute(['usuario => $user']);

			foreach ($query as $currentUser)
			{
			 	$this->nombre = $currentUser['usuario'];
			} 	$this->username = $currentUser['tipo_usuario'];
 		}

 		public function getNombre()
 		{
 			return $this->nombre;
 		}
 	}

?>