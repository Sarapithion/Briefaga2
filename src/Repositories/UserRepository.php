<?php

namespace src\Repositories;

use PDO;
use src\Models\Database;
use src\Models\User;

class UserRepository
{
    private $DB;
    private $user;
    public function __construct()
    {
        $database = new Database();
        $this->DB = $database->getDB();
        $this->user = new User();

        require_once __DIR__ . '/../../config.php';
    }


    public function login(string $email, string $password)
    {
        $sql = "SELECT * FROM  " . PREFIXE . "utilisateurs
        WHERE Mail = :email";

        $statement = $this->DB->prepare($sql);
        $statement->bindParam(":email",$email);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $utilisateur = $statement->fetch();

        if ($utilisateur){
            if(password_verify($password, $utilisateur->getMdp())){
                return $statement->rowCount()==1;
            } else {
                return false;
            }
        } else {
            return false;
        }
    
    

    }



}
