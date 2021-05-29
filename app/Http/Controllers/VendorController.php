<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function login_vendor()
    {
        return view('auth/vendor/vendor-login');
    }

    protected function create_vendor()
    {
        return view('auth/vendor/vendor-register');
    }

    protected function store_vendor(Request $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:vendors'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $vend = Vendor::create([
            $vend->name = $request->name;
            $vend->email = $request->email;
            $vend->password = $request->password;
            // 'name' => $request['name'],
            // 'email' => $request['email'],
            // 'password' => Hash::make($request['password']),
        ]);
        $vend->save();
    }
}
