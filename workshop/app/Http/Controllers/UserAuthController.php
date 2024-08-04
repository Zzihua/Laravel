<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;

class UserAuthController extends Controller
{
    public function Profile($id)
    {
        return $id.'<br> my id:'.$id;
    }

    public function SignUp()
    {
        $binding = [
            'title' => '註冊',
        ];
        return view( 'auth.signup' , $binding);
    }

    public function SignUpProcess()
    {
        $form_data = request()->all();

        if( $form_data['password'] == '' || $form_data['email'] == '' || $form_data['nickname'] == ''){
            return redirect('/user/auth/signup')
            ->withInput()
            ->withErrors('資料不齊全');
        }else{
            $user = User::create([
                'email' => $form_data['email'],
                'password' => Hash::make($form_data['password']),
                'nickname' => $form_data['nickname'],
            ]);
            dd( $user );
        }

        
        
    }
    public function LogIn()
    {
        $binding = [
            'title' => '登入',
        ];
        return view( 'auth.login' , $binding);
    }

}