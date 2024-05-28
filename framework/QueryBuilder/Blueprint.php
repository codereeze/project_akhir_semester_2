<?php

namespace Framework\QueryBuilder;

use Database\Database;

class Blueprint
{
    public Database $db;
    public $tableName = '';
    public $columns = [];

    public function __construct($tableName)
    {
        $this->tableName = $tableName;
        $this->db = new Database();
    }

    public function createTable()
    {
        $columns = '';

        for ($i = 0; $i < count($this->columns); $i++) {
            $comma = $i < count($this->columns) - 1 ? ',' : '';
            $columns .= "{$this->columns[$i]}$comma";
        }

        $statement = $this->db->prepare("CREATE TABLE {$this->tableName} ($columns);");
        $statement->execute();
    }

    public function id(string $attr_name = 'id', $length = 12)
    {
        array_push($this->columns, "$attr_name INT($length) AUTO_INCREMENT PRIMARY KEY");
        return $this;
    }

    public function varchar(string $attr_name, $length = 255, $null = true, $unique = false)
    {
        $nullable = $null ? '' : 'NOT NULL';
        $unique = $unique ? 'UNIQUE' : '';
        array_push($this->columns, "$attr_name VARCHAR($length) $nullable $unique");
        return $this;
    }

    public function text(string $attr_name, $null = true)
    {
        $nullable = $null ? '' : 'NOT NULL';
        array_push($this->columns, "$attr_name TEXT $nullable");
        return $this;
    }

    public function char(string $attr_name, $length = 20, $null = true, $unique = false)
    {
        $nullable = $null ? '' : 'NOT NULL';
        $unique = $unique ? 'UNIQUE' : '';
        array_push($this->columns, "$attr_name CHAR($length) $nullable $unique");
        return $this;
    }

    public function enum(string $attr_name, $length, $defaultValue = '')
    {
        $enumValues = "'" . implode("', '", $length) . "'";
        $isDefault = $defaultValue ? "DEFAULT '$defaultValue'" : "";
        array_push($this->columns, "$attr_name ENUM($enumValues) $isDefault");
        return $this;
    }

    public function integer(string $attr_name, $length = 12)
    {
        array_push($this->columns, "$attr_name INT($length) NOT NULL");
        return $this;
    }

    public function foreign(string $attr_name, $reference, $column)
    {
        array_push($this->columns, "CONSTRAINT fk_". uniqid() ." FOREIGN KEY ($attr_name) REFERENCES $reference($column) ON DELETE CASCADE");
        return $this;
    }
}
