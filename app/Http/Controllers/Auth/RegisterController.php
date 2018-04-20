<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' =>'required',
            'designation' =>'required',
            'address' =>'required',
            'workplace' =>'required',
            'profile_pic' =>'required',           
            'password' => 'required|string|min:6|confirmed',
            'optionsRadios' =>'required',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $url = "";

        if(Input::hasFile('profile_pic')){
            $file = Input::file('profile_pic');
            $file->move(public_path(). '/uploads/', $file->getClientOriginalName());
            $url = URL::to("/") . '/uploads/'. $file->getClientOriginalName();
        }

        $profile_pic = $url;
        //$profile_pic->save();
            
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'contact' => $data['contact'],
            'designation' => $data['designation'],
            'address' =>$data['address'],
            'workplace' =>$data['workplace'],
            'password' => Hash::make($data['password']),
            'profile_pic' => $profile_pic,
            'optionsRadios' => $data['optionsRadios']
        ]);
    }
}
