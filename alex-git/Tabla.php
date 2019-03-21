<?php

abstract class Tabla {

    static $server = "localhost";
    static $user = "root";
    static $passwd = "";
    static $database = "Biblioteca";
    protected $Libros;
    protected $idField;
    protected $fields;
    protected $showFields;
    static protected $conn;

    public function __construct($Libros, $idField, $fields = "", $showFields = "") {

        $this->table = $Libros;
        $this->idField = $idField;
        $this->fields = $fields;
        $this->showFields = $showFields;
        self::conectar();
    }

    static function conectar() {
        try {

            self::$conn = new PDO("mysql:host=" . self::$server . ";dbname=" . self::$database, self::$user, self::$passwd, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {

            echo $ex->getMessage();
        }
    }

}
