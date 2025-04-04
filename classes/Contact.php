<?php
namespace formular;

error_reporting(E_ALL);
ini_set('display_errors', 1);
if (!defined('__ROOT__')) {
    define('__ROOT__', dirname(dirname(__FILE__)));
}require_once (__ROOT__.'/classes/Database.php');

class Contact extends \Database
{
    private $conn;
    public function __construct() {
        parent::__construct();
        $this->conn = $this->getConnection();
    }

    /* private function connect() {
        $config = DATABASE;
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

        try {
            $this->conn = new PDO('mysql:host='.$config['HOST'].';dbname='.$config['DBNAME']. ';port=' . $config['PORT'], $config['USER_NAME'], $config['PASSWORD'], $options);
        } catch (PDOException $e) {
            die("Spojenie zlyhalo: " . $e->getMessage());
        }
    } */

    public function ulozSpravu($meno,$email,$sprava)
    {
        $sql = "INSERT INTO udaje1 (meno,email,sprava) VALUES (:meno,:email,:sprava)";

        $statement = $this->conn->prepare($sql);

        try {
            $insert = $statement->execute(array(':meno'=>$meno,':email'=>$email,':sprava'=>$sprava));
            if ($insert) {
                http_response_code(200);
                header("Location: ../thankyou.php");
            } else {
                die("Chyba pri odoslaní správy do databázy");
            }
            return $insert;
        } catch (\Exception $e) {
            http_response_code(404);
            return false;
        }

    }

}

