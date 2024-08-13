<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Illuminate\Http\Request;
use Mail;
// use Validator;


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

    public function Shop()
    {
        
        return view( 'auth.shop' );
    }

    public function LogIn()
    {
        // $binding = [
        //     'title' => '登入',
        // ];
        return view( 'auth.login');
    }

    public function SignOut()
    {
        session()->flush();
        return redirect('/user/auth/login');
    }




    public function Home()
    {
        // $binding = [
        //     'title' => 'Home',
        // ];
        return view( 'auth.home');
    }

    public function SignUpProcess()
    {
        $form_data = request()->all();
    
        $validator = Validator::make($form_data, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',  
            'nickname' => 'required|string',
            'type' => 'required|string'
        ]);
    
        if ($validator->fails()) {
            return redirect('/user/auth/signup')
                ->withInput()
                ->withErrors($validator);
        }
    
        $user = User::create([
            'email' => $form_data['email'],
            'password' => Hash::make($form_data['password']),
            'nickname' => $form_data['nickname'],
            'type' => $form_data['type'],
        ]);
    
        // 发送邮件或其他处理
    
        return redirect('/user/auth/login');
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
            session() ->put('user_type', $user->type);
            //導向首頁
            return redirect('/user/auth/home');
        }else{
            echo '登入失敗';
            return redirect('/user/auth/login')
            ->withInput()
            ->withErrors(['無此帳號，帳號或密碼錯誤']);

        }

    }

    public function Pizza(){
        
        // 重新導向至商品編輯頁
        return view('auth.pizza');
    }

    public function CartProcess(Request $request)
    {

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity', 1); // 默认数量为1

        // 逻辑: 将商品添加到购物车
        // 假设你使用的是 Session 存储购物车
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId] += $quantity; // 更新数量
        } else {
            $cart[$productId] = $quantity; // 添加新商品
        }
        session()->put('cart', $cart);

        // 返回购物车数据
        return response()->json([
            'cart' => $cart,
            'total' => array_sum($cart), // 示例: 计算总金额
        ]);
    }

    public function Super(){
        
        // 重新導向至商品編輯頁
        return view('component.super');
    }

   
    
}