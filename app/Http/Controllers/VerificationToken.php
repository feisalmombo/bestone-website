<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Mail\RegisterToken;
use DB;
use Carbon\Carbon;
use App\User;

class VerificationToken extends Controller
{
    public function index(){
        return view('admin_layouts.projects.register_token');
    }

    public function sendEmail(Request $request){

        $user_email = $request->email;
        $token = rand(0000,90000);
        DB::table('reg_token')
            ->insert([
                'token' => $token,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        Mail::to($user_email)->send(new RegisterToken($token));

        

        return redirect()->back()->with('msg','Email Send');
        
    }

    public function register(Request $request){

        $user = new User();
       $this->validate($request,[
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'reg_token' => 'required|string|max:255',
       ]);

        $token = $request->reg_token;
        $check = DB::table('reg_token')
                ->select('token')
                ->where('token','=',$token)
                ->first();
       // dd($check);
  

        if(count($check) != 0) {

            $check_status = DB::table('reg_token')
                ->select('status')
                ->where('token','=',$token)
                ->first();
        
            if($check_status->status != 1){

            $user->first_name = $request->fname;
            $user->last_name = $request->lname;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

             $user->save();

             DB::table('reg_token')
                    ->where('token','=',$check->token)
                    ->update([
                        'status' => 1,
                    ]);
                    
             return redirect('/login')->with('msg1','Your Success Registered. You can login now');
                }else
                {
                    return redirect()->back()->with('msg','Token You Proved Are Already Expired'); 
              }
            }else{
            return redirect()->back()->with('msg','Token Provided Not Match');
        }
    }
}
