<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use App\Models\Merchandise;
use Illuminate\Http\Request;
use TsaiYiHua\ECPay\Checkout;
use Mail;
use Product;
// use Validator;


class CheckoutController extends Controller
{
    protected $checkout;
    
    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function sendOrder()
    {
        $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'ItemName' => 'Product Name',
            'TotalAmount' => '2000',
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];
        return $this->checkout->setPostData($formData)->send();
    }
}