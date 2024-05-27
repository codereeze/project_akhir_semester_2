<?php

namespace Framework;

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

    public function update($data, $id)
    {
        try {
            $this->initialize();
            if (isset($data['email'])) {
                $stmt = $this->db->prepare("SELECT id FROM {$this->table_name} WHERE email = :email AND id != :id");
                $stmt->bindValue(':email', $data['email']);
                $stmt->bindValue(':id', $id);
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

            $sql = "UPDATE {$this->table_name} SET $setPart WHERE id = :id";
            $stmt = $this->db->prepare($sql);
            $values[':id'] = $id;

            foreach ($values as $placeholder => $value) {
                $stmt->bindValue($placeholder, $value);
            }

            $stmt->execute();
            echo "sukses";
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
            return false;
        }
    }

    public static function delete($id)
    {
    }
}
