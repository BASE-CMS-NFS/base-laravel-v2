<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
#PACKAGE
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Validator;
use Hash;
#HELPER
use Cron;
use Date;
use Fibonanci;
use Helper;
use Nfs;
use Payments;
use Wa;
#MODEL
use App\Models\User;
use App\Models\Cms\Role;
use App\Models\Cms\CmsSettings;
use App\Models\Cms\CmsModules;
use App\Models\Cms\CmsMenus;
use App\Models\Cms\CmsMenusAccess;
use App\Models\Cms\CmsRoleAccess;
use App\Models\Cms\CmsEmails;

class CmsManagementUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function account()
    {
        $data['link']           = 'account';
        $data['title']          = 'update account';
        $data['row']            = User::find(Session::get('id'));
        return view('admin.cms.account.account',$data);
    }


    public function account_update(Request $request)
    {
        $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email:rfc,dns',
            'phone'     => 'required',
        ]);

        $fetch_one = User::where('id',Session::get('id'))->first();

        if($request->email == $fetch_one->email){

            $request->validate([
                'email'     => 'required|email:rfc,dns',
            ]);

        }else{
            $request->validate([
                'email'     => 'required|email:rfc,dns|unique:users,email',
            ]);

        }

        if($request->phone == $fetch_one->phone){

            $request->validate([
                'phone'     => 'required',
            ]);

        }else{
            $request->validate([
                'phone'     => 'required|unique:users,phone',
            ]);

        }

        $update = User::where('id',Session::get('id'))->update(
            [
                'name'       =>$request->name,
                'email'      =>$request->email,
                'phone'      =>$request->phone,
            
            ]
        );

        if($update){
            return redirect()->back()->with('message','success update data')->with('message_type','primary');
        }else{
            return redirect()->back()->with('message','failed update data')->with('message_type','warning');
        }
    }

    public function password()
    {
        $data['link']           ='password';
        $data['title']          = 'update password';
        return view('admin.cms.account.password',$data);
    }


    public function password_update(Request $request)
    {
        $request->validate([
            'password'          => 'required|string',
            'password_confirm'  => 'required|string',
        ]);

        if($request->password == $request->password_confirm ){

            $password = Hash::make($request->password);

            $update = User::where('id',Session::get('id'))->update(
                        [
                            'password'       =>$password,                        
                        ]
                    );
            if($update){
                return redirect()->back()->with('message','success update data')->with('message_type','primary');
            }else{
                return redirect()->back()->with('message','failed update data')->with('message_type','warning');
            }

        }else{
            return redirect()->back()->with('message','password confirm tidak sama tolong check')->with('message_type','warning');
        }
    }

}
