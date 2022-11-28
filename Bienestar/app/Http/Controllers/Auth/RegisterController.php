<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'document' => ['unique:users'],
            'documentCuidador' => ['unique:users'],
            'documentPatient' => ['unique:users:document'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'email.unique' => 'Este correo ya está registrado.',
            'document.unique' => 'Este documento ya está registrado.',
            'documentCuidador.unique' => 'Este cuidador ya está a cargo de otro paciente.',
            'documentPatient' => 'Otro cuidador ya está a cargo de este paciente.'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if($data['role'] == 'patient') {
            return User::create([
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'document' => $data['document'],
                'birthday' => $data['birthday'],  
                'phone' => $data['phone'],  
                'nameCuidador' => $data['nameCuidador'],  
                'documentCuidador' => $data['documentCuidador'],  
                'password' => Hash::make($data['password']),
                'role' => $data['role']
            ]);
        } elseif ($data['role'] == 'doctor') {
            return User::create([
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'document' => $data['document'],
                'profession' => $data['profession'],            
                'password' => Hash::make($data['password']),
                'role' => $data['role']
            ]);
        } elseif ($data['role'] == 'cuidador') {
            return User::create([
                'name' => $data['name'],
                'lastname' => $data['lastname'],
                'email' => $data['email'],
                'document' => $data['document'],
                'birthday' => $data['birthday'],  
                'phone' => $data['phone'],  
                'namePatient' => $data['namePatient'],            
                'documentPatient' => $data['documentPatient'],            
                'password' => Hash::make($data['password']),
                'role' => $data['role']
            ]);
        }
    }
}
