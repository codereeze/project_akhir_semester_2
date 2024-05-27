<?php

namespace Framework;

use Database\Database;

class Auth
{
    public static $tableName = 'users';
    public static Database $db;

    public static function initialize(Database $db)
    {
        self::$db = $db;
    }

    public static function attempt(array $data)
    {
        $stmt = self::$db->prepare("SELECT * FROM " . self::$tableName . " WHERE email = :email");
        $stmt->bindValue(':email', $data['email']);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($user && password_verify($data['password'], $user['password'])) {
            session_start();
            foreach($user as $key => $value){
                $_SESSION[$key] = $value;
            }
            return true;
        }

        return false;
    }
}
