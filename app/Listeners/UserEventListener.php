<?php

namespace cs\Listeners;

use cs\Events\UserLoggedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use cs\Models\User;
use Carbon\Carbon;
use Auth;

class UserEventListener
{
    public function onUserLogin($event){
        Auth::user()->update(['last_login_at' => Carbon::now(),]);
        // $user= User::findOrFail($event->id);
        // $user->last_login_at = carbon::now();
        // $user->token = $token;
        // $user->save();
    }

    public function onUserLogout($event){

    }

    public function subscribe($events){
        $events->listen(
            'cs\Events\kjfkjml/m;ghbjm,',
            'cs\Listeners\UserEventListener@onUserLogin'
            );

        $events->listen(
            'cs\Events\UpdateLogout',
            'cs\Listeners\UserEventListener@onUserLogout'
            );
    }
}
