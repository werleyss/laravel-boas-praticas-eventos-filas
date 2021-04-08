<?php

namespace App\Observers;

class UserObserver
{
    public function creating($user){
        \Mail::to($user)->send(new UserRegistered($user));
    }

    public function created($user){
        \Mail::to($user)->send(new UserRegistered($user));
    }

    public function updating($user){
        \Mail::to($user)->send(new UserRegistered($user));
    }

    public function updated($user){
        \Mail::to($user)->send(new UserRegistered($user));
    }

    public function salving($user){
        \Mail::to($user)->send(new UserRegistered($user));
    }

    public function salved($user){
        \Mail::to($user)->send(new UserRegistered($user));
    }


}
