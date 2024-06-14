<?php

namespace App\Middleware;

use Database\Database;
use Libraries\Response;

class Authorization
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

    public function allEnrolledUsers()
    {
        $role = $this->getUserRole();

        if ($role) {
            return true;
        } else {
            Response::redirect('/login');
        }
    }

    public function onlyGuest()
    {
        $role = $this->getUserRole();

        if ($role) {
            $previousPage = $_SERVER['HTTP_REFERER'];
            if (isset($previousPage)) {
                Response::redirect($previousPage);
            } else {
                Response::redirect('/');
            }
        }
    }

    public function userSellerAndGuest()
    {
        $role = $this->getUserRole();

        if ($role === 'User' || $role === 'Seller' || $role === null) {
            return true;
        } else {
            Response::redirect('/303');
        }
    }

    public function userAndSeller()
    {
        $role = $this->getUserRole();

        if ($role === 'User' || $role === 'Seller') {
            return true;
        } else {
            if ($role === 'Admin') {
                Response::redirect('/303');
            } else {
                Response::redirect('/login');
            }
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
            if ($role === 'User' || $role === 'Admin') {
                Response::redirect('/303');
            } else {
                Response::redirect('/login');
            }
        }
    }

    public function onlyAdmin()
    {
        $role = $this->getUserRole();

        if ($role === 'Admin') {
            return true;
        } else {
            if ($role === 'User' || $role === 'Seller') {
                Response::redirect('/303');
            } else {
                Response::redirect('/login');
            }
        }
    }
}
