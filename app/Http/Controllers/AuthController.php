<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => "3103118143",
            "Name" => "Zarah Rosiana",
            "Gender" => "Perempuan",
            "Phone" => "081225099457",
            "Class" => "XII RPL 4",
        ];
            
    }
}