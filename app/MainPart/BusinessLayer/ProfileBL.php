<?php
namespace App\MainPart\BusinessLayer;

use App\MainPart\DataAccessLayer\PersonDAL;

class ProfileBL
{
    public static function getperson()
    {
        $w = PersonDAL::getperson();
//        return $w;
    }

}
