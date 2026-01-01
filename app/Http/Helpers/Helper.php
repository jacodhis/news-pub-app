<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use QuickBooksOnline\API\DataService\DataService;
use Illuminate\Support\Str;
use App\Models\Boat;

class Helper{

    protected $dataService;

    public static function getPhoneNumber(){
        return Setting::where('key','phone')->first()->value;
    }


}
