<?php


namespace App;


trait Followable
{

    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        if ($this->following($user)) {
            return $this->unfollow($user);
        }

        $this->follow($user);
    }

    public function following(User $user)
    {
        //여러가지 방법이 있는데
        //현재 유저가 팔로우 하는 모든 유저들의 컬렉션을 가져온다음 주어진 유저들을 체크한다
//        return $this->follows->contains($user);
        return $this->follows()->where('following_user_id', $user->id)->exists();
    }

    public function follows()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }
}
