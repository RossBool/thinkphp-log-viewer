<?php


use logViewer\Logger;

class TestDemo
{
    public $sex = 'M';

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

}

  var_dump((new Logger(['name'=>'周俊任']))::getName());