<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    public function Profile($id)
    {
        return $id.'<br> my id:'.$id;
    }

}