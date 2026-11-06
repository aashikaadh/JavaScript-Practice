<?php
class pi {
    public static $value = 3.14159;
    public static function staticValue() {
        return self::$value;
    }
}

echo "The value of pi is. " . pi::staticValue();
?>