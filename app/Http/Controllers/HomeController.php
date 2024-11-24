<?php

namespace App\Http\Controllers;

use App\Models\Heading;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index() {
        $data = json_decode(file_get_contents(resource_path("data/home.json")), true);

        return view("pages.home", compact('data'));
    }
}
