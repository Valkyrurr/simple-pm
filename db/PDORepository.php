<?php
class PDORepository {
    const USERNAME = 'root';
    const PASSWORD = '';
    const HOST = 'localhost';
    const DB = 'simple_pm';

    public static function getConnection(){
        $username = self::USERNAME;
        $password = self::PASSWORD;
        $host = self::HOST;
        $db = self::DB;

        try {
          $arguments = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          );
          $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password, $arguments);
          return $connection;
          
        } catch (PDOException $e) {
          return $e->getMessage();
        }

    }
    public function queryList($sql, $args){
        $connection = $this->getConnection();
        $stmt = $connection->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}
?>
