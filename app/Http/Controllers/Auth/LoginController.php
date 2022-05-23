<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    //Surcharge de la mtéhode login pour prendre en compte l'authentification par email ou par pseudo
    public function login(Request $request){
        $input = $request->all();
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ]);
    
        //Test de la chaine de caractère saisie en login
        $login = filter_var($request->login, FILTER_VALIDATE_EMAIL)? 'emailPersonne': 'pseudo';
        //Test d'authentification
        if(auth()->attempt(array($login=>$input['login'], 'password'=>$input['password']))){
            return redirect()->route('home');
        }
        else{
            return redirect()->route('login')->with('eror', 'Erreur d\'authentification');
        }
    }
}
