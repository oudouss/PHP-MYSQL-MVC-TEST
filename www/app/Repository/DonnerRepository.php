<?php

namespace App\Repository;

use PDO;
use App\Models\Donner;
use App\Repository\RepositoryInterface;
use App\Service\DatabaseConnection as DB;

class DonnerRepository implements RepositoryInterface
{

    
    public static function findBy($key)
    {
        //TODO implement find by key
    }
    public static function add(string $parm1, string $parm2)
    {
        $connexion = DB::getInstance();
        $data = [':full_name' => $parm1, ':phone_number' => $parm2];
        $sql = "INSERT INTO donners (full_name, phone_number) VALUES (:full_name, :phone_number)";
        $connexion->prepare($sql)->execute($data);
        
        return $connexion->prepare($sql)->execute($data);

    }
    public static function all()
    {
        $sql = "SELECT * FROM donners";
        
        return DB::getInstance()->query($sql)->fetchAll(PDO::FETCH_CLASS, '\App\Models\Donner');

    }

}