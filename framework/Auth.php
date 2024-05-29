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

        $stmt2 = self::$db->prepare("SELECT * FROM addresses WHERE user_id = :id AND status = :status");
        $stmt2->bindValue(':id', $_SESSION['user_id'], \PDO::PARAM_INT);
        $stmt2->bindValue(':status', 'Utama');
        $stmt2->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);
        $address = $stmt2->fetch(\PDO::FETCH_ASSOC);

        if ($address) {
            $combinedData = array_merge($user, $address);
        } else {
            $combinedData = $user;
        }
        return $combinedData;
    }
}
