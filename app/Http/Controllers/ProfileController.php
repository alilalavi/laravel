<?php
/** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Foundation\Console\Kernel;
use Illuminate\Http\Request;
use App\MainPart\BusinessLayer\ProfileBL;

class ProfileController extends Controller
{
    /**
     * @return mixed
     */
    public function getPersonList()
    {
        $p = ProfileBL::getperson();
        return $p;
    }
}
