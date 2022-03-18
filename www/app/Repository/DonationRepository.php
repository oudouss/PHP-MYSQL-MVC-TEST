<?php

namespace App\Repository;

use PDO;
use App\Models\Donation;
use App\Repository\RepositoryInterface;
use App\Service\DatabaseConnection as DB;

class DonationRepository implements RepositoryInterface
{
    public static function findBy($key)
    {
        $sql = "SELECT * FROM (SELECT * FROM donners WHERE full_name LIKE :keyword OR phone_number LIKE :keyword)d INNER JOIN donations ds ON d.id = ds.donner_id";
        $connexion = DB::getInstance()->prepare($sql);
        $connexion->bindValue(':keyword', "%".$key."%", PDO::PARAM_STR);
        $connexion->execute();
        return $connexion->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function add(string $parm1, string $parm2)
    {
        $data = [':don_name' => $parm1, ':don_type' => $parm2];
        $sql = "INSERT INTO donners (don_name, don_type) VALUES (:don_name , :don_type)";
        $added = DB::getInstance()->prepare($sql);
        $added->execute($data);
        return $added;

    }
    public static function all()
    {
        $sql = "SELECT * FROM donners";
        
        return DB::getInstance()->query($sql)->fetchAll(PDO::FETCH_CLASS, '\App\Models\Donner');

    }

}