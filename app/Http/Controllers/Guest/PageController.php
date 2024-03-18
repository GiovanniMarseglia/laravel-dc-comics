<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\dc;

class PageController extends Controller
{
    public function index(){
        $comics = dc::All();
        return view("pages.home",compact("comics"));
    }
}
