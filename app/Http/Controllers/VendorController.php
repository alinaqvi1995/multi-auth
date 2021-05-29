<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\Validator;

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
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // $vend = Vendor::create([
        //     $vend->name = $request->name,
        //     $vend->email = $request->email,
        //     $vend->password = $request->password,
        //     // 'name' => $request['name'],
        //     // 'email' => $request['email'],
        //     // 'password' => Hash::make($request['password']),
        // ]);
        $vend = new Vendor();
        $vend->name = $request->name;
        $vend->email = $request->email;
        $vend->password = $request->password;
        $vend->save();
    }
}
