<?php

namespace App\Controllers;

use App\Service\InputHandler;
use App\Repository\DonnerRepository;
use App\Repository\DonationRepository;

class HomeController extends Controller
{

    public static function home()
    {
        self::renderView('home/home', [
            'name' => 'Oussama OUDRHIRI'
        ]);
    }
    public static function listDons(array $params)
    {
        if(isset($_GET['search'])){
            $search = $_GET['search'];
            $dons =  DonationRepository::findBy($search);
            self::renderView('donation/list_dons', [
                'dons' => $dons
            ]);    
        }else{
            self::renderView('donation/list_dons');
        }

    }

    public static function addDonner()
    {
        //check if data sent from form
        if(InputHandler::isSet('DonnerSubmit')){
            $full_name = (InputHandler::isSet('full_name')) ? InputHandler::post('full_name'):'';
            $phone_number = (InputHandler::isSet('phone_number')) ? InputHandler::post('phone_number'):'';
            $donner =  DonnerRepository::add($full_name,$phone_number);
            if($donner){
                self::renderView('donner/add_donner', [
                    'message' => 'Donneur bien ajouté'
                ]);    
            }
        }else{
            self::renderView('donner/add_donner');
        }
    }
    public static function addDonation()
    {
        //check if data sent from form
        if(InputHandler::isSet('DonSubmit')){
            $don_name = (InputHandler::isSet('name')) ? InputHandler::post('name'):'';
            $don_type = (InputHandler::isSet('type')) ? InputHandler::post('type'):'';
            $don =  DonationRepository::add($don_name,$don_type);
            if($don){
                self::renderView('donation/add_don', [
                    'message' => 'Don bien ajouté'
                ]);    
            }
        }else{
            self::renderView('donation/add_don');
        }

    }
}
