<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function index()
    {
        return view('apartments');
    }
    function functionName(Request $request){
        $firstName = $request->get('firstname');
        $lastName = $request->get('lastname');
        $country = $request->get('country');
    }
}
