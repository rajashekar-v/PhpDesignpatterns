<?php

Class SelfDemo{

    public static $selfVariable = 10;

    public static function print()
    {
        return self::$selfVariable . "<br>";
    }
    
}


class StaticDemo extends SelfDemo{

    public static $selfVariable = 20;

}

print_r(SelfDemo::print());

print_r(StaticDemo::print());

?>