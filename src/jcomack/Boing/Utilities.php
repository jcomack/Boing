<?php namespace jcomack\Boing;

/**
 * Class Utilities
 * @package jcomack\Boing
 */
class Utilities
{
    public static function toCamelCase($string, $capitalize = false)
    {
        if ($capitalize) {
            $string[0] = strtoupper($string[0]);
        }

        $callback = create_function('$character', 'return strtoupper($character[1]);');

        return preg_replace_callback('/_([a-z])/', $callback, $string);
    }

    public static function toSnakeCase($string)
    {
        $string[0] = strtolower($string[0]);

        $callback = create_function('$character', 'return "_" . strtolower($character[1]);');

        return preg_replace_callback('/([A-Z])/', $callback, $string);
    }
}
