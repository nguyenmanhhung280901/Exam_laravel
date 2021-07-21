<?php

namespace App\Http\Controllers;

use App\Models\Apartments;
use Illuminate\Http\Request;

class ApartmentsController extends Controller
{
    public function index()
    {
        return view('apartments',[
            'list' => Apartments::paginate(6)
        ]);
    }
    function functionName(Request $request){
        $name = $request->get('name');
        $address = $request->get('address');
        $price = $request->get('address');
        $general_information = $request->get('general_information');
        $details = $request->get('details');
        $thumbnail = $request->get('thumbnail');
        $status = $request->get('status');

    }
}
