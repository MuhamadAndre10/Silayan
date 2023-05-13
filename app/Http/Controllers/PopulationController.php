<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PopulationController extends Controller
{
    public function showFormPopulation() {
        return view("pages.add_population");
    }
}
