<?php

namespace App\Http\Controllers;

use App\User;

class ExploreController extends Controller
{
    //단일 액션만을 처리하는 컨트롤러를 정의하고 싶다면  __invoke
    public function __invoke()
    {
        return view('explore',[
            'users' => User::paginate(50),
        ]);
    }
}
