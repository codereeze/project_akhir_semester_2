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

            $stmt = $this->db->prepare("INSERT INTO ". $this->table_name ." ($attributes) VALUES ($placeholders)");

            foreach ($values as $placeholder => $value) {
                $stmt->bindValue($placeholder, $value);
            }

            $stmt->execute();
        } catch (\Exception $e) {
            echo "Maaf error: " . $e->getMessage();
        }
    }

    public static function update($id)
    {
    }

    public static function delete($id)
    {
    }
}
