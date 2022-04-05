<?php
/**
 * Ppermite conectar ala base de datos 
 * @Jesus Manuel Sanchez Rendon 
 */
class Connection {

		public $driver;
		public $host;
		public $user;
		public $password;
		public $database;
		public $conn;

		function __construct()
		{
			$this->driver = "mysql";
			$this->host = "localhost";
			$this->user = "root";
			$this->password = "";
			$this->database = "clima";

			$this->get_Connection();

		}

	public function get_Connection(){
      $this->conn = new PDO($this->driver.":"."host=".$this->host.";port=3307;"."dbname=".$this->database,$this->user,$this->password);

      if (!$this->conn){

        echo "Error al conectar";

      }
      else{
       // echo "Conexion establecida";
     }
   }

public function registrarse($nom_completo,$correo,$password){

   $sql = "CALL wep_sp_registrarse(?,?,?)";
   $statement = $this->conn->prepare($sql);
   $statement->bindParam(1,$nom_completo);
   $statement->bindParam(2,$correo);
   $statement->bindParam(3,$password);
 
   if($statement->execute()){

    return "Registrado";

   }
   else{
     return "No se puedo Registrarse";
   }
}



  function wep_sp_login($correo,$password){

     $sql = "CALL wep_sp_login(?,?)";
     $statement = $this->conn->prepare($sql);

     $statement->bindParam(1,$correo);
     $statement->bindParam(2,$password);
   
     if($statement->execute()){

      $count=$statement->rowCount();

      if($count){
        $cookie_name = "sesion";
        $cookie_value - "token";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        return "Inicio Sesión";
      
     }
     else{
       return "No se puedo Iniciar Sesión";
     }
   }
  }
}