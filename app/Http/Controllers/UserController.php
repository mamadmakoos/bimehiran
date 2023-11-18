<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $mobile = $request->mobile;
        $checkMobile = User::where("mobile", $mobile)->exists();
        if ($checkMobile) {
            $code = "12345";
            return view("auth.code", ["mobile" => $mobile]);
        }
        else {
            $code = "12345";
            return view("auth.code", ["mobile" => $mobile]);
        }
    }

    public function checkCode(Request $request)
    {
        $code = $request->code;
        $mobile = $request->mobile;
        if ($code == "12345") {
            $checkMobile = User::where("mobile", $mobile)->first();
            if (!isset($checkMobile)) {
                // do register
                User::create([
                    "mobile" => $mobile,
                    "user_name" => $mobile,
                    "password" => Hash::make($mobile),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);
                Auth::loginUsingId($checkMobile->id, true);
            }
            // do login
            Auth::loginUsingId($checkMobile->id, true);
            return 1;
        } else {
            return 0;
        }

    }

    public function logout()
    {
        Auth::logout();
        return back();
    }


}
