<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
//        dd(request('avatar'));
        $attributes = request()->validate([
            //Rule..->ignore($user) 사용자 이름이 현재 사용자 이외의 고유한지 확인
            'username' => ['string', 'required', 'max:255', Rule::unique('users')->ignore($user) ],
            'name' => ['string','required', 'max:255'],
            'avatar' => [ 'file'],
            'email' => ['string', 'required', 'email', 'max:255',Rule::unique('users')->ignore($user)],
            'password'
        ]);

        //avatars라는 디렉토리에 저장하고 db에 입력
        if(request('avatar)')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }
        $user->update($attributes);

        return redirect($user->path());
    }
}
