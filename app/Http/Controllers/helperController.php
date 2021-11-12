<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helperController extends Controller
{
    public function getSplitName(){
        return splitName("Mohammad Alsalamat");
    }
}
