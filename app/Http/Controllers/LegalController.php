<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function terms():View{
        return view('terms.index');
    }

    public function poltics():View{
        return view('politics.index');
    }
}
