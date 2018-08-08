<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\EmailVerificationNotification;

class RegisteredListener implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        //获取当前用户
        $user = $event->user;
        $user->notify(new EmailVerificationNotification());
    }
}
