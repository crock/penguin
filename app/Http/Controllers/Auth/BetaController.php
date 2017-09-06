<?php

namespace App\Http\Controllers\Auth;

use App\BetaUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class BetaController extends Controller
{

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
                'email' => 'required|string|email|max:255'
            ]);
        }
    
        /**
         * Create a new beta user instance after a valid registration.
         *
         * @param  array  $data
         * @return \App\User
         */
        protected function create(array $data)
        {
            return BetaUser::create([
                'email' => $data['email']
            ]);
        }

        protected function beta() 
        {
            return view('beta');
        }

        protected function requestInvite()
        {
            return "requested :)";
        }
}
