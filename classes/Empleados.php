<?php

class Empleados {
    //Atributos
   protected $id;
   protected $nombre;
   protected $apellido;
   protected $cargo;
   protected $fecha_nacimiento;
   protected $barrio;
   protected $imagen;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();
    $query = 

    $query = "SELECT *
    FROM empleados";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

    $PDOStatement->execute();

    $resultado = $PDOStatement->fetchAll();

    return $resultado;





   }

   //Metodo buscar

 public function buscarEmpleados($keywords){
   //llamamos a la conexion
   $conexion = (new Conexion())->getConexion();
   //Creamos una variable con comodines para buscar coincidencias
   $keywords = '%' . $keywords . '%';

   //llamamos a las query
   $query = "SELECT * FROM empleados where nombre LIKE :keywords ";

   //preparamos la consulta
   $PDOStatement = $conexion->prepare($query);

   //preparamos la busqueda con BINDPARAM
   $PDOStatement->bindParam(':keywords', $keywords, PDO::PARAM_STR);

   //executamos
   $PDOStatement->execute();

   
   $resultados = $PDOStatement->fetchAll(PDO::FETCH_CLASS, self::class);

   return $resultados;

   

}

   //Metodos (Cumpleaños)  

 public function verificarCumpleanios($fecha)  {
   

   //llamar a la conexion
   $conexion = (new Conexion())->getConexion();
   $query = 

   $query = "SELECT * FROM empleados WHERE DATE_FORMAT(fecha_nacimiento, '%m-%d')
    = DATE_FORMAT(:fecha, '%m-%d')";

   $PDOStatement = $conexion->prepare($query);

   $PDOStatement->bindParam(':fecha', $fecha, PDO::PARAM_STR);

   $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

   $PDOStatement->execute();

   $resultado = $PDOStatement->fetchAll();

   return $resultado;





  }

   

   

   

   

  

   /**
    * Get the value of id
    */ 
   public function getId()
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */ 
   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of nombre
    */ 
   public function getNombre()
   {
      return $this->nombre;
   }

   /**
    * Set the value of nombre
    *
    * @return  self
    */ 
   public function setNombre($nombre)
   {
      $this->nombre = $nombre;

      return $this;
   }

   /**
    * Get the value of apellido
    */ 
   public function getApellido()
   {
      return $this->apellido;
   }

   /**
    * Set the value of apellido
    *
    * @return  self
    */ 
   public function setApellido($apellido)
   {
      $this->apellido = $apellido;

      return $this;
   }

   /**
    * Get the value of cargo
    */ 
   public function getCargo()
   {
      return $this->cargo;
   }

   /**
    * Set the value of cargo
    *
    * @return  self
    */ 
   public function setCargo($cargo)
   {
      $this->cargo = $cargo;

      return $this;
   }

   /**
    * Get the value of fecha_nacimiento
    */ 
   public function getFecha_nacimiento()
   {
      return $this->fecha_nacimiento;
   }

   /**
    * Set the value of fecha_nacimiento
    *
    * @return  self
    */ 
   public function setFecha_nacimiento($fecha_nacimiento)
   {
      $this->fecha_nacimiento = $fecha_nacimiento;

      return $this;
   }

   /**
    * Get the value of barrio
    */ 
   public function getBarrio()
   {
      return $this->barrio;
   }

   /**
    * Set the value of barrio
    *
    * @return  self
    */ 
   public function setBarrio($barrio)
   {
      $this->barrio = $barrio;

      return $this;
   }

   /**
    * Get the value of imagen
    */ 
   public function getImagen()
   {
      return $this->imagen;
   }

   /**
    * Set the value of imagen
    *
    * @return  self
    */ 
   public function setImagen($imagen)
   {
      $this->imagen = $imagen;

      return $this;
   }
}







?>