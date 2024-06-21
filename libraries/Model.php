<?php

namespace Libraries;

use Database\Database;

abstract class Model
{
    public $table_name = '';
    public Database $db;

    public function initialize()
    {
        $this->db = new Database();
    }

    public function insert($data)
    {
        try {
            $this->initialize();
            $attributes = '';
            $placeholders = '';
            $values = [];

            foreach ($data as $key => $value) {
                $attributes .= "$key,";
                $placeholders .= ":$key,";
                $values[":$key"] = $value;
            }

            $attributes = rtrim($attributes, ',');
            $placeholders = rtrim($placeholders, ',');

            $stmt = $this->db->prepare("INSERT INTO {$this->table_name} ($attributes) VALUES ($placeholders)");

            foreach ($values as $placeholder => $value) {
                $stmt->bindValue($placeholder, $value);
            }

            $stmt->execute();
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function update($data, $condition, $column = 'id')
    {
        try {
            $this->initialize();
            if (isset($data['email'])) {
                $stmt = $this->db->prepare("SELECT id FROM {$this->table_name} WHERE email = :email AND id != :id");
                $stmt->bindValue(':email', $data['email']);
                $stmt->bindValue(':id', $condition);
                $stmt->execute();

                if ($stmt->rowCount() > 0) {
                    throw new \Exception('Email already in use by another user.');
                }
            }

            $setPart = '';
            $values = [];

            foreach ($data as $key => $value) {
                $setPart .= "`$key` = :$key, ";
                $values[":$key"] = $value;
            }

            $setPart = rtrim($setPart, ', ');

            $sql = "UPDATE {$this->table_name} SET $setPart WHERE $column = :$column";
            $stmt = $this->db->prepare($sql);
            $values[":$column"] = $condition;

            foreach ($values as $placeholder => $value) {
                $stmt->bindValue($placeholder, $value);
            }

            $stmt->execute();
            echo "sukses";
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function findAllById($column, $id)
    {
        try {
            $this->initialize();
            $stmt = $this->db->prepare("SELECT * FROM " . $this->table_name . " WHERE $column = :id");
            $stmt->bindValue(':id', (int)$id, \PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function findAllWhere($column, $condition)
    {
        try {
            $this->initialize();
            $stmt = $this->db->prepare("SELECT * FROM " . $this->table_name . " WHERE $column = :condition");
            $stmt->bindValue(':condition', $condition);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function find($column, $id, $column2 = '', $condition = '')
    {
        $sql = '';
        if ($column2 && $condition) {
            $sql = "AND $column2 = :condition";
        }

        try {
            $this->initialize();
            $stmt = $this->db->prepare("SELECT * FROM " . $this->table_name . " WHERE $column = :id $sql");
            $stmt->bindValue(':id', (int)$id, \PDO::PARAM_INT);
            if ($column2 && $condition) {
                $stmt->bindValue(':condition', $condition, \PDO::PARAM_STR);
            }
            $stmt->execute();

            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function selectAll()
    {
        try {
            $this->initialize();
            $stmt = $this->db->prepare("SELECT * FROM " . $this->table_name);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function delete($column, $id)
    {
        try {
            $this->initialize();
            $stmt = $this->db->prepare("DELETE FROM {$this->table_name} WHERE $column = :id");
            $stmt->bindValue(':id', $id, \PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "User deleted successfully.";
            } else {
                echo "No user found with the provided ID.";
            }
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function leftJoinAll($foreign_key, $destination_table, $column = '', $condition = '')
    {
        try {
            if (count($foreign_key) !== count($destination_table)) {
                throw new \Exception('Jumlah foreign key dan tabel tujuan harus sama.');
            }

            $this->initialize();

            $query = "SELECT * FROM {$this->table_name}";

            for ($i = 0; $i < count($destination_table); $i++) {
                if ($condition && $column) {
                    $query .= " LEFT JOIN {$destination_table[$i]} ON {$destination_table[$i]}.id = {$this->table_name}.{$foreign_key[$i]} WHERE $column = :condition";
                } else {
                    $query .= " LEFT JOIN {$destination_table[$i]} ON {$destination_table[$i]}.id = {$this->table_name}.{$foreign_key[$i]}";
                }
            }

            $stmt = $this->db->prepare($query);
            if ($condition && $column) {
                $stmt->bindValue(':condition', $condition);
            }
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return !empty($result) ? $result : null;
        } catch (\Exception $e) {
            echo "Maaf, error: " . $e->getMessage();
        }
    }


    public function joinWhere($destination_table, string $primary_key, string $foreign_key, string $column, $condition)
    {
        try {
            $this->initialize();

            $query = "
            SELECT * 
            FROM {$destination_table} 
            LEFT JOIN {$this->table_name} 
            ON {$this->table_name}.{$primary_key} = {$destination_table}.{$foreign_key} 
            WHERE {$destination_table}.{$column} = :condition
        ";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':condition', $condition);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (empty($result)) {
                return null;
            }

            if (count($result) === 0) {
                return $result[0];
            }

            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function joinForCart($column, $condition)
    {
        try {
            $this->initialize();

            $query = "
            SELECT 
                carts.id AS cart_id, 
                carts.*, 
                products.*, 
                users.*, 
                stores.*
            FROM 
                carts
            LEFT JOIN 
                products ON carts.produk_id = products.id
            LEFT JOIN 
                users ON carts.user_id = users.id
            LEFT JOIN 
                stores ON products.toko_id = stores.id
            WHERE 
                users.{$column} = :condition
            ";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':condition', $condition);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (empty($result)) {
                return null;
            }

            if (count($result) === 0) {
                return $result[0];
            }

            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function joinForTransaction($column, $column2, $condition, $status)
    {
        try {
            $this->initialize();

            $query = "
            SELECT 
                transactions.id AS trans_id, 
                transactions.*, 
                products.*, 
                users.*, 
                stores.*
            FROM 
                transactions
            LEFT JOIN 
                products ON transactions.produk_id = products.id
            LEFT JOIN 
                users ON transactions.user_id = users.id
            LEFT JOIN 
                stores ON products.toko_id = stores.id
            WHERE 
                users.{$column} = :condition AND
                transactions.{$column2} = :status
            ";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':condition', $condition);
            $stmt->bindParam(':status', $status);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (empty($result)) {
                return null;
            }

            if (count($result) === 0) {
                return $result[0];
            }

            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function joinForComment($column, $condition)
    {
        try {
            $this->initialize();

            $query = "
                SELECT 
                    comments.*, 
                    products.*, 
                    users.*
                FROM 
                    comments
                LEFT JOIN 
                    products ON comments.produk_id = products.id
                LEFT JOIN 
                    users ON comments.user_id = users.id
                WHERE 
                    comments.{$column} = :condition
            ";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':condition', $condition);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (empty($result)) {
                return null;
            }

            if (count($result) === 0) {
                return $result[0];
            }

            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public function joinForNotification($column, $condition)
    {
        try {
            $this->initialize();

            $query = "
                SELECT 
                    s.id AS toko_id, 
                    s.*, 
                    n.id AS notif_id, 
                    n.*, 
                    u.*
                FROM 
                    notifications n
                LEFT JOIN 
                    stores s ON n.store_id = s.id
                LEFT JOIN 
                    users u ON n.user_id = u.id
                WHERE 
                    n.{$column} = :condition;
            ";

            $stmt = $this->db->prepare($query);
            $stmt->bindParam(':condition', $condition);
            $stmt->execute();

            $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            if (empty($result)) {
                return null;
            }

            if (count($result) === 0) {
                return $result[0];
            }

            return $result;
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }
}
