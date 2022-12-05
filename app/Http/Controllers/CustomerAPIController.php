<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAPIController extends Controller
{
    function me(){
        $customer = Auth::guard('customer')->user();
        $data = $customer;
        return response()->json($data, 200);
        }
        
}
