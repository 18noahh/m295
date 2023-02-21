<?php
declare(strict_types=1);

namespace src;

class DB
{
    public function __construct($methode, $param)
    {
        $this->{$methode}($param);
    }
    public function getData($param)
    {
        echo "DB getData()";
        echo "<pre>";
        print_r($param);
        echo "<pre>";
    }
}