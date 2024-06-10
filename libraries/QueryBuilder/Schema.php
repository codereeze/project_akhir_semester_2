<?php

namespace Libraries\QueryBuilder;

use Database\Database;

class Schema
{
    public static Database $db;

    public static function create(string $table_name, $callback)
    {
        $blueprint = new Blueprint($table_name);
        $callback($blueprint);

        $blueprint->createTable();

        $files = glob("database/migrations/*.php");
        foreach ($files as $file) {
            $migration = pathinfo($file, PATHINFO_FILENAME);
            self::log("Migrate $migration - DONE");
        }
    }

    public static function dropIfExists(string $table_name)
    {
        self::$db = new Database();
        $stmt = self::$db->prepare("DROP TABLE IF EXISTS $table_name");
        $stmt->execute();
    }

    private static function log($message)
    {
        echo "" . PHP_EOL;
        echo $message . PHP_EOL;
        echo "" . PHP_EOL;
    }
}
