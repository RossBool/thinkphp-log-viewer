<?php


namespace ZJR;


class Logger
{
    public static $name;

    public function __construct($data)
    {
        self::$name = $data['name'];
    }

    /**
     * @return mixed
     */
    public static function getName()
    {
        return self::$name;
    }

    /**
     * @param mixed $name
     */
    public static function setName($name)
    {
        self::$name = $name;
    }


}
