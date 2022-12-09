<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerAPIController extends Controller
{
    public function me(){
        $customer = Auth::guard('customer')->user();
        $data = $customer;
        return response()->json($data, 200);
        }

    public function index(){
        $customer = Auth::guard('customer')->user();
        $data = $customer;
        return response()->json($data, 200);
    }

    public function shows(Customer $customer){
        return response()->json([
            'customer'=>$customer
        ]);
    }
    
}
