<?php

namespace Framework;

use Database\Database;

class Auth
{
    public static $tableName = 'users';
    public static Database $db;

    public static function initialize()
    {
        self::$db = new Database();
    }

    public static function attempt(array $data)
    {
        $stmt = self::$db->prepare("SELECT * FROM " . self::$tableName . " WHERE email = :email");
        $stmt->bindValue(':email', $data['email']);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($user && password_verify($data['password'], $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            return true;
        }

        return false;
    }

    public static function user()
    {
        self::initialize();
        $stmt = self::$db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindValue(':id', $_SESSION['user_id'], \PDO::PARAM_INT);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $user;
    }
}
