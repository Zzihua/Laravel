<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Socialite;

class SocialiteController extends Controller
{
        /**
        * Redirect the user to the Google authentication page.
        *
        * @return 301
        */
        public function redirectToProvider()
        {
            return Socialite::driver('google')->redirect();
        }
        /**
        * Obtain the user information from Google.
        *
        * @return \Illuminate\Http\Response
        */


        /*****************************第三方登入更新************************************* */
        public function handleProviderCallback()
        {
            $userSocial = Socialite::driver('google')->stateless()->user();
        
            // 創建使用者資料
            $userdata = [
                'email' => $userSocial->email,
                'nickname'  => $userSocial->name,
                'password' => Hash::make($userSocial->password),
                'type' => 'G',
            ];
        
            // 查詢使用者是否已經存在，否則創建新的使用者
            $user = User::firstOrCreate(['email' => $userSocial->email], $userdata);
        
            // 使用 Laravel 的 Auth 系統來登入使用者
            Auth::login($user);
        
            // 存放需要的 session 資料
            session()->put('user_id', $user->id);
            session()->put('user_email', $user->email);
            session()->put('user_type', "G");
        
            return redirect('/user/auth/home');
        }
        
        /*****************************第三方登入更新************************************* */
}
?>