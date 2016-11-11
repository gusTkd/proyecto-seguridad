<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

/**
 * Class RegisterController
 * @package %%NAMESPACE%%\Http\Controllers\Auth
 */
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
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('adminlte::auth.register');
    }

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
        // validar request
        return Validator::make($data, [
            'nombre' => 'required|max:255',
            'a_paterno' => 'required|max:255',
            'a_materno' => 'required|max:255',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'semestre' => 'required',
            'usuario' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'terms' => 'required',
        ], [
            'required' => 'El campo :attribute es obligatorio',
            'max' => 'El valor de :attribute es demasiado largo',
            'unique' => 'El :attribute que ingresaste ya existe',
            'min' => 'El valor de :attribute es demasiado corto',
            'confirmed' => 'La contraseña no coincide',
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
            'nombre' => $data['nombre'],
            'a_paterno' => $data['a_paterno'],
            'a_materno' => $data['a_materno'],
            'fecha_nacimiento' => $data['fecha_nacimiento'],
            'genero' => $data['genero'],
            'semestre' => $data['semestre'],
            'usuario' => $data['usuario'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
