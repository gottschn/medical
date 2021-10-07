<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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


    /* Google */

    public function redirectToGoogle()
    {
        /* return Socialite::driver('google')->redirect(); */
        return Socialite::driver('google')->redirect();
    }

    public function logout(){
        Auth::logout();
        return view('pages.index');
    }

    //Google Callback

    public function handleGoogleCallBack()
    {
        
        $user = Socialite::driver('google')->stateless()->user();
        
        $this->_registerOrloginUser($user);

        //return home after login
        return redirect()->route('home');
    }

        /* Facebook */

        public function redirectToFacebook()
        {
            return Socialite::driver('facebook')->redirect();
        }
    
        //Facebook Callback
    
        public function handleFacebookCallBack()
        {
            $user = Socialite::driver('facebook')->user();
    
            
        $this->_registerOrloginUser($user);
        
        //return home after login
        return redirect()->route('home');
        }

        protected function _registerOrloginUser($data){
            
            $user = User::where('email' , $data->email)->first();
            
            if(!$user){
                $user = new User();
                $user->name = $data->name;
                $user->email = $data->email;
                $user->provider_id = $data->id;
                $user->avatar = $data->avatar;
                $user->save();
            }
            
            Auth::login($user);
        }
    
}