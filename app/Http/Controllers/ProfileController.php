<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where("id",Auth::id())->first();
        return view("profile.main",["result" => $user , "menu" => "index"]);
    }
    public function editProfileAction(Request $request){

        Validator::make($request->all(), [
            // 'username' => 'nullable|unique:App\Models\User,user_name',
            'user_name' => [
                'nullable',
                Rule::unique('users')->ignore(Auth::id()),
            ],

            'fname' => 'nullable|min:2|max:64',
            'lname' => 'nullable|min:2|max:64',
            'melli_code' => ['nullable','digits:10','numeric',Rule::unique('profile')],
            'phone' => 'nullable',
            'postal_code' => 'nullable|digits:10|numeric',
            'address' => 'nullable|min:10|max:512',
        ])->validate();

        User::where("id",Auth::id())->update([
            "user_name" => $request->user_name,
        ]);

        Profile::where("user_id",Auth::id())->update([
            "fname" => $request->fname,
            "lname" => $request->lname,
            "melli_code" => $request->melli_code,
            "phone" => $request->phone,
            "postal_code" => $request->postal_code,
            "address" => $request->address,
        ]);

        Session::flash("success",true);

        return back();

    }


    public function password(){
        return view('profile.password',['menu' => 'password']);
    }
    public function passwordAction(Request $request){

        if(isset($request->password) && isset($request->repassword) && isset($request->oldpassword)){

            if(mb_strlen($request->password) >= 6 && mb_strlen($request->repassword) >= 6){
/*                $oldpassword= Hash::make($request->oldpassword);

               if ($oldpassword == Auth::user()->password){*/
                   if($request->password == $request->repassword){

                       $id = Auth::id();
                       User::where("id",$id)->update([
                           "password" => Hash::make($request->password),
                           "ipc" => 1
                       ]);

                       Session::flash("status",[
                           "msg" => "رمز عبور با موفقیت تغییر یافت",
                           "type" => "success"
                       ]);

                       return back();

                   }
                   Session::flash("status",[
                       "msg" => "رمز عبور های شما با هم مطابقت ندارد",
                       "type" => "danger"
                   ]);
                   return back();
//               }
/*                Session::flash("status",[
                    "msg" => "رمز عبور  فعلی شما درست نمیباشد",
                    "type" => "danger"
                ]);


                return back();*/

            }

            Session::flash("status",[
                "msg" => "رمز عبور شما ضعیف است",
                "type" => "danger"
            ]);

            return back();

        }

        Session::flash("status",[
            "msg" => "مشکلی در تغییر رمز عبور اتفاق افتاده",
            "type" => "danger"
        ]);

        return back();
    }
}
