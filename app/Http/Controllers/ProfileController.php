<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payments;
use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view("profile.main",["result" => $user] ,["menu" => "index"]);
    }
    public function editProfileAction(Request $request){

        Validator::make($request->all(), [
            // 'username' => 'nullable|unique:App\Models\User,user_name',
            'user_name' => [
                'nullable',
                Rule::unique('users')->ignore(Auth::id()),
            ],
            'melli_code' => 'nullable|numeric|digits:10',
            'fname' => 'nullable|min:2|max:64',
            'lname' => 'nullable|min:2|max:64',
            'phone' => 'nullable',
            'postal_code' => 'nullable|digits:10|numeric',
            'address' => 'nullable|min:10|max:512',
        ])->validate();

        User::where("id",Auth::id())->update([
            "user_name" => $request->user_name,
        ]);

        $check_profile = $profile = Profile::where("user_id",Auth::id());
         if (!isset($check_profile)){
              Profile::create([
                 "fname" => $request->fname,
                 "lname" => $request->lname,
                 "melli_code" => $request->melli_code,
                 "phone" => $request->phone,
                 "postal_code" => $request->postal_code,
                 "address" => $request->address,
                  "created_at" => Carbon::now(),
             ]);
         }else{
             Profile::where("user_id",Auth::id())->update([
                 "fname" => $request->fname,
                 "lname" => $request->lname,
                 "melli_code" => $request->melli_code,
                 "phone" => $request->phone,
                 "postal_code" => $request->postal_code,
                 "address" => $request->address,
                 "created_at" => Carbon::now(),
                 "updated_at" => Carbon::now(),
             ]);

         }

        Session::flash("success",true);

        return back();

    }

    public function credit(){
        $history = Payments::where("user_id",Auth::id())->orderByDesc("id")->get();
// نمی فهمه
//        ->paginate()

        return view("profile.credit",["menu" => "credit" , "history" => $history]);
    }

    public function creditAction(Request $request){
        Validator::make($request->all(), [
            'amount' => 'required|min:4|max:32',
        ])->validate();
        $amount = $request->amount;
        $amount= $amount * 10;
        $token = 'KJ'.rand(1000,9999).'BI'.Auth::id().rand(1,10);
        Payments::create([
            "user_id" => Auth::id(),
            "amount" => $amount,
            "status" => "PENDING",
            "created_at" => Carbon::now(),
            "token" => $token,
        ]);
        $params = array(
            'order_id' => $token,
            'amount' => $amount,
            'name' => Auth::user()->user_name,
            'phone' => Auth::user()->mobile,
            'mail' => '',
            'desc' => 'kojabime.com',
            'callback' => route('user_check_payment'),
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'X-API-KEY: 63a204d1-751a-4f30-91a3-4c2990ddbe25',
            'X-SANDBOX: 1'
        ));

        $result = curl_exec($ch);
        $result = json_decode($result,1);
        curl_close($ch);

        if(isset($result['error_code'])){
            return back();
        }else{
            return Redirect::to($result['link']);
        }

    }

    public function checkPayment(Request $request){

        $status = $request->status;
        $id = $request->id;
        $amount = $request->amount / 10;
        $token = $request->order_id;
        $all = $request->all();
// نمی فهمه
//        $user = Payments::where("token",'=',$token)->where("amount",'=',$amount)->first();
        $user = Payments::where( 'token',$token)->first();
        if(isset($user) && $user->status == "PENDING" && $status == "10"){

//            Payments::where("token",$token)->where("amount",$amount)->update(
            Payments::where("token",$token)->update(
                [
                "status" => "UNVERIFY",
                "response_before" => json_encode($all)
            ]);


            $params = array(
                'id' => $id,
                'order_id' => $token,
            );

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.idpay.ir/v1.1/payment/verify');
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'X-API-KEY: 63a204d1-751a-4f30-91a3-4c2990ddbe25',
                'X-SANDBOX: 1',
            ));

            $result = curl_exec($ch);
            $result = json_decode($result,1);
            curl_close($ch);

            if(isset($result) && $result['status'] == "100"){
                // motmaene motmaen pardakht anjam shode
                Payments::where("token",$token)->update([
                    "status" => "SUCCESS",
                    "response_after" => json_encode($result)
                ]);
                User::where("id",$user->user_id)->increment("credit",$amount);

                Session::flash("payment_success","پرداخت شما با موفقیت انجام شد و مبلغ $amount تومان به حساب شما نشست");
                return Redirect::route("user_profile");

            }

        }else{

            Session::flash("payment_error","متاسفانه مشکلی پیش آمده است");
            return Redirect::route("user_profile");
        }
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
