<?php
/** @noinspection ALL */

namespace App\MainPart\DataAccessLayer;

use App\Models\Person;

class PersonDAL
{
    public static function getperson()
    {
        $A = Person::all();
        return $A;
    }
}
