<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {

        Validator::make($request->all(), [
            'mobile' =>  'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
        ])->validate();
        $mobile = $request->mobile;
        $checkMobile = User::where("mobile", $mobile)->exists();
        if ($checkMobile) {
            $token = rand(10000,99999);
            self::sendSms($mobile,"رمز موقت شما $token میباشد");
            Session::put("user_".$mobile,$token);
            return view("auth.code", ["mobile" => $mobile]);
        }
        else {
            $token = rand(10000,99999);
            self::sendSms($mobile,"رمز موقت شما $token میباشد");
            Session::put("user_".$mobile,$token);
            return view("auth.code", ["mobile" => $mobile]);
        }
    }

    public function checkCode(Request $request)
    {
        $code = $request->code;
        $mobile = $request->mobile;
        if($code == Session::get("user_".$mobile)){
            $checkMobile = User::where("mobile",$mobile)->first();
            if (!isset($checkMobile)) {
                // do register
                $user = User::create([
                    "mobile" => $mobile,
                    "user_name" => $mobile,
                    "password" => Hash::make($mobile),
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now(),
                ]);
                Profile::create([
                    "user_id" => $user->id,
                    "phone" => "$mobile",
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
