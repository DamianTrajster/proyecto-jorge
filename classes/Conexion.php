<?php



class Conexion {
    protected PDO $db;

    public function __construct()
    {
        // Cargar variables de entorno desde el archivo .env
        /* $env = parse_ini_file(__DIR__ . '.env'); */

        $dbServer = $_ENV['DB_SERVER'] ;
        $dbUser = $_ENV['DB_USER'];
        $dbPass = $_ENV['DB_PASS'];
        $dbName = $_ENV['DB_NAME'] ;
        $dbPort = $_ENV['DB_PORT'] ;

        try {
            $dsn = "mysql:host=$dbServer;dbname=$dbName;port=$dbPort; charset=utf8mb4";
            $this->db = new PDO($dsn, $dbUser, $dbPass);
        } catch (PDOException $e) {
            die("Error al conectar con MySQL: " . $e->getMessage());
        }
    }

    public function getConexion(): PDO {
        return $this->db;
    }
}

?>