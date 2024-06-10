<?php

namespace Libraries\QueryBuilder;

class Migration
{
    public static function run()
    {
        $files = glob("database/migrations/*.php");

        foreach ($files as $file) {
            require_once $file;

            $className = pathinfo($file, PATHINFO_FILENAME);
            $className = explode('_', $className);
            $className = ucwords("$className[4] $className[5]");
            $className = str_replace(' ', '', $className);

            $namespace = '\Database\Migrations\\';
            $fullClassName = $namespace . $className;
            
            $className = new $fullClassName();
            $className->up();
        }
    }

    public static function migrateFresh()
    {
        $files = glob("database/migrations/*.php");

        foreach ($files as $file) {
            require_once $file;

            $className = pathinfo($file, PATHINFO_FILENAME);
            $className = explode('_', $className);
            $className = ucwords("$className[4] $className[5]");
            $className = str_replace(' ', '', $className);

            $namespace = '\Database\Migrations\\';
            $fullClassName = $namespace . $className;
            
            $className = new $fullClassName();
            $className->down();
        }
    }
}
