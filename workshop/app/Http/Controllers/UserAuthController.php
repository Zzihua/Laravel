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

    public function LogIn()
    {
        $binding = [
            'title' => '登入',
        ];
        return view( 'auth.login' , $binding);
    }


    public function Home()
    {
        $binding = [
            'title' => 'Home',
        ];
        return view( 'auth.home', $binding);
    }

    public function SignUpProcess()
    {
        $form_data = request()->all();

        if( $form_data['password'] == '' || $form_data['email'] == '' || $form_data['nickname'] == ''){
            return redirect('/user/auth/signup')
            ->withInput()
            ->withErrors(['請檢查所有欄位都填滿']);
        }else{
            //判斷使用者帳號是否重複
            $user = User::where('email', $form_data['email'])->firstOrFail();
            if( !is_null($user) ){
                return redirect('/user/auth/signup')
                ->withInput()
                ->withErrors(['帳號已被註冊，請更換帳號']);
            }

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
            return redirect('/user/auth/login');
        }        
    }

    public function LoginProcess()
    {
        $form_data = request()->all();
        // dd($form_data);
        $user = User::where('email', $form_data['email'])->FirstOrFail();
        if (Hash::check($form_data['password'], $user->password)){
            echo '登入成功';
            session() -> put('user_id', $user->id);
            session() ->put('user_email', $user->email);
            //導向首頁
            return redirect('/user/auth/home');
        }else{
            echo '登入失敗';
            return redirect('/user/auth/login')
            ->withInput()
            ->withErrors(['無此帳號，帳號或密碼錯誤']);

        }

    }

   
    
}