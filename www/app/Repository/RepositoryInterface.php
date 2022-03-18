<?php

namespace App\Repository;


interface RepositoryInterface
{
    public static function all();
    public static function add(string $parm1, string $param2);
    public static function findBy($key);
}