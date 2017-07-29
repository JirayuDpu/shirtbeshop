<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/admin';

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
    // make คือการตรวจสอบว่าข้อมูลที่ใส่เข้ามาตรงกันไหม
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' =>'required|string|max:255',
            'last_name' =>'required|string|max:255',
            'sex' =>'required',
            'phone' =>'required|numeric',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],
        [
            'phone.required' =>'เบอร์โทรศัพท์ไม่ได้ระบุ',
            'phone.numeric' =>'ข้อมูลเบอร์โทรศัพท์ต้องเป็นตัวเลขเท่านั้น (0-9)',
            'email.required' =>'อีเมล์ไม่ได้ระบุ',
            'email.unique' =>'E-mail นี้ถูกนำมาใช้แล้ว',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'sex' => $data['sex'],
            'phone' => $data['phone'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
