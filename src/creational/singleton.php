<?php

final class Singleton {

    private static $singleton_array = [];

    public static function init($classname) {
        
        if (!isset(self::$singleton_array[$classname])) {
            self::$singleton_array[$classname] = new $classname();
        }
        print_r(self::$singleton_array);
        /* @phpstan-ignore-next-line | static magic */
        return self::$singleton_array[$classname];
    }

}


class Database
{
    public function connect()
    {
        // ...
    }

    /**
     * @return static
     */
    public static function singleton() {
        
        return Singleton::init(self::class);
    }
}

class Logger
{
    public function log()
    {
        // ...
    }

    /**
     * @return static
     */
    public static function singleton() {
        
        return Singleton::init(self::class);
    }
}
print_r(Database::singleton());
print_r(Logger::singleton());