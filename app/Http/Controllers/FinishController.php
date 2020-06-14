<?php

namespace App\Http\Controllers;

use App\Recipe;
use App\Http\Controllers\Controller;
use App\Helpers\Random;

class FinishController extends Controller
{
    /**
     * Show random finishing answer
     *
     * @return View
     */
    public function finish()
    {            
        return view('finish', ['finish' => Random::text('finishing')]);
    }
}