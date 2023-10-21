<?php

class Conexion {
    protected PDO $db;

    public function __construct()
    {
        // Cargar variables de entorno desde el archivo .env
        $env = parse_ini_file('.env');

        $dbServer = $env['DB_SERVER'] ;
        $dbUser = $env['DB_USER'];
        $dbPass = $env['DB_PASS'];
        $dbName = $env['DB_NAME'] ;
        $dbPort = $env['DB_PORT'] ;

        try {
            $dsn = "mysql:host=$dbServer;dbname=$dbName;charset=utf8mb4";
            $this->db = new PDO($dsn, $dbUser, $dbPass,[]);
        } catch (PDOException $e) {
            die("Error al conectar con MySQL: " . $e->getMessage());
        }
    }

    public function getConexion(): PDO {
        return $this->db;
    }
}

?>