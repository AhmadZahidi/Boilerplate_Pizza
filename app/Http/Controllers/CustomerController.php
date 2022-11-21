<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    //Register
    public function showRegisterPage(){
        return view('customer.register');
    }

    public function saveCustomerData(Request $request){
        
        $data=$request->validate([
            'name'=>'required | min:5|max:255',
            'email'=>'required | email',
            'password'=>'required | confirmed |min:8'
        ]);

        $data['password']=Hash::make($data['password']);

        Customer::create($data);

        return redirect()->route('customerLoginPage');

    }

    //login

    public function showLoginPage(){
        return view('customer.login');
    }

    public function validateCustomer(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(!auth()->guard('customer')->attempt($request->only('email','password'))){
            return back()->with('error' , 'Invalid username or password');
        }

        return redirect()->route('index');
    }

    public function dashboard(){
        return view('customer.dashboard');
    }

    public function logout(){
        Auth::guard ('customer')->logout();
        return redirect()->route('index');
    }
}
