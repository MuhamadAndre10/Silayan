<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopulationController extends Controller
{
    public function showPopulations() {
        return view("pages.view-population");
    }
    public function create() {
        return view("pages.add-populations");
    }
}
