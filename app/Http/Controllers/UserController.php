<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests\UserSaveRequest;
use Illuminate\Support\Str;
class UserController extends Controller
{

    //homepage listing all users
    public function home(){
        $users=User::paginate(10);
        return view('home',compact('users'));
    }

    //register page view
    public function registerpage(){
        return view('register');
    }
   

    //register a new user
    public function register(UserSaveRequest $request){
        try{
            $input=$request->validated();

            if($request->hasFile('photo')){
            $extension = $request->photo->extension();
            $filename= Str::random(6)."_user.".$extension;
            $request->photo->storeAs('photo',$filename);
            $input['photo']=$filename;
            }
            User::create($input);
            return redirect()->route('home');
        }catch(\Exception $e)
        {
            return response()->json($e);
        }
    }


    //delete a cuurent user
    public function userdelete($id){
        try{
            $userId=User::find(decrypt($id));
            if(!empty($userId->photo)){
            Storage::delete('photo/'.$userId->photo);
            }
            $userId->delete();
            return redirect()->route('home');
        }
        catch(\Exception $e){
            return response()->json($e);
        }
    }


}