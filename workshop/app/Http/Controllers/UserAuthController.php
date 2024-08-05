<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Mail;
use Validator;


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
            ->withErrors(['請檢查所有欄位都填滿']);
        }else{
            $user = User::create([
                'email' => $form_data['email'],
                'password' => Hash::make($form_data['password']),
                'nickname' => $form_data['nickname'],
                'type' => $form_data['type'],
            ]);
           

            Mail::send('email.signUpEmailNotification', [
             'nickname' => $form_data['nickname']
            ], function($message) use ($form_data) {
                $message->to($form_data['email'],$form_data['nickname'])
                ->from('c109156129@nkust.edu.tw')
                ->subject('Laravel 8 Mail Test');
            });
            dd( $user );
        }        
    }

    public function LoginProcess()
    {
        $form_data = request()->all();

        if( $form_data['password'] == '' || $form_data['email'] == ''){
            return redirect('/user/auth/login')
            ->withInput()
            ->withErrors(['請檢查所有欄位都填滿']);
        }
        dd( $form_data );
    }


    public function LogIn()
    {
        $binding = [
            'title' => '登入',
        ];
        return view( 'auth.login' , $binding);
    }

    
}