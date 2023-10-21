<?php

class Alumnos {
    //Atributos
   protected $id;
   protected $nombre;
   protected $apellido;
   protected $barrio;
   protected $fecha_nacimiento;
   protected $estado_civil;
   protected $nota;
   protected $curso_inscripto;
   protected $correo;
   protected $imagen;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();
    $query = 

    $query = "SELECT *
    FROM alumnos";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

    $PDOStatement->execute();

    $resultado = $PDOStatement->fetchAll();

    return $resultado;





   }

   //Metodo buscar

 public function buscarAlumnos($keywords){
   //llamamos a la conexion
   $conexion = (new Conexion())->getConexion();
   //Creamos una variable con comodines para buscar coincidencias
   $keywords = '%' . $keywords . '%';

   //llamamos a las query
   $query = "SELECT * FROM alumnos where nombre LIKE :keywords ";

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

   $query = "SELECT * FROM alumnos WHERE DATE_FORMAT(fecha_nacimiento, '%m-%d')
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
    * Get the value of estado_civil
    */ 
   public function getEstado_civil()
   {
      return $this->estado_civil;
   }

   /**
    * Set the value of estado_civil
    *
    * @return  self
    */ 
   public function setEstado_civil($estado_civil)
   {
      $this->estado_civil = $estado_civil;

      return $this;
   }

   /**
    * Get the value of nota
    */ 
   public function getNota()
   {
      return $this->nota;
   }

   /**
    * Set the value of nota
    *
    * @return  self
    */ 
   public function setNota($nota)
   {
      $this->nota = $nota;

      return $this;
   }

   /**
    * Get the value of curso_inscripto
    */ 
   public function getCurso_inscripto()
   {
      return $this->curso_inscripto;
   }

   /**
    * Set the value of curso_inscripto
    *
    * @return  self
    */ 
   public function setCurso_inscripto($curso_inscripto)
   {
      $this->curso_inscripto = $curso_inscripto;

      return $this;
   }

   /**
    * Get the value of correo
    */ 
   public function getCorreo()
   {
      return $this->correo;
   }

   /**
    * Set the value of correo
    *
    * @return  self
    */ 
   public function setCorreo($correo)
   {
      $this->correo = $correo;

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