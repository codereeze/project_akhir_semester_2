<?php
namespace App\Middleware;

use Database\Database;
use Libraries\Response;

class CheckRoleUser
{
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    private function getUserRole()
    {
        $dbh = $this->db->prepare("SELECT role FROM users WHERE id = :user_id");
        $dbh->bindParam(':user_id', $_SESSION['user_id'], \PDO::PARAM_INT);
        $dbh->execute();

        $result = $dbh->fetch(\PDO::FETCH_ASSOC);
        return $result['role'] ?? null;
    }

    public function allUsers()
    {
        $role = $this->getUserRole();

        if ($role || $role == null) {
            return true;
        }
        exit();
    }

    public function onlyGuest()
    {
        $role = $this->getUserRole();

        if ($role !== null) {
            $previousPage = $_SERVER['HTTP_REFERER'];
            Response::redirect($previousPage);
        } else {
            return true;
        }
    }

    public function userAndGuest()
    {
        $role = $this->getUserRole();

        if ($role === 'User' || $role === 'Seller' || $role === null) {
            return true;
        } else {
            Response::redirect('/303');
            return false;
        }
    }

    public function onlyUser()
    {
        $role = $this->getUserRole();

        if ($role === 'User' || $role === 'Seller') {
            return true;
        } else {
            Response::redirect('/303');
        }
    }

    public function onlySeller()
    {
        $role = $this->getUserRole();

        if ($role === 'Seller') {
            return true;
        } else {
            Response::redirect('/303');
        }
    }

    public function onlyAdmin()
    {
        $role = $this->getUserRole();

        if ($role === 'Admin') {
            return true;
        } else {
            Response::redirect('/303');
        }
    }
}
