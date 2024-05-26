<?php

namespace Framework;

use Database\Database;

class Auth
{
    public $tableName = 'users';
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public static function attempt(array $data)
    {
        $stmt = self::$db->prepare("SELECT * FROM " . self::$tableName . " WHERE email = :email");
        $stmt->bindParam(':email', $data['email']);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if($user && password_verify($data['password'], $user['password'])){
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            return true;
        }

        return false;
    }
}
