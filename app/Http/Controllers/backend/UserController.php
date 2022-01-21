<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\models\Role;
use Auth;
use App\models\RoleUsers;


class UserController extends Controller
{
    //
    function GetUser(){

        $data['users']=User::with('role')->get();
        // $data['users']=User::join('role_users','users.id','=','role_users.id_User')
        //                 ->join('role','role.idRole','=','role_users.id_Role')->get();
        return view('backend.users.list_users',$data);
        
    }

    public function assign_role(Request $request){
        

        $user=User::where('email',$request->email_user)->first();
        $user->role()->detach();
        
        if($request->role_admin){
            $user->role()->attach(Role::where('TenQuyen','Admin')->first());
        }
        if($request->role_employy){
            $user->role()->attach(Role::where('TenQuyen','Nhân viên')->first());

        }
        if($request->role_guest){
            $user->role()->attach(Role::where('TenQuyen','Khách hàng')->first());

        }
        
         return redirect()->back();
    }

    public function delete_user(Request $request){
        $idUser=$request->idUser;
        if(Auth::id()==$idUser){
            return response()->json([
                'success'=>'Khong duoc xoa chinh minh',
            ]);
        }
        $user=User::find($idUser);
        if($user){
            $user->role()->detach();
            $user->delete();
        }  
        return response()->json([
            'success'=>'Xoa thanh cong',
        ]);
    }

    public function view_users(Request $request){
        $idUsers=$request->idUsers;
        $user=User::where('id',$idUsers)->first();

        return response()->json([
            'users'=>$user,
        ]);
    }
}
