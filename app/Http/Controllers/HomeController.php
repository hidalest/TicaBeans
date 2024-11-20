<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index() {
        $headingData = Heading::first();

        return view("pages.home");
    }
}
