<?php

namespace App\Listeners;

use App\Models\User;
use App\Mail\SendMailToUser;
use App\Events\UserCreatedEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    // public function __construct(
    //     public  $user,

    // ) {
    //     info($user);
    // }
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreatedEvent $event)
    {
        Mail::to($event->user->email)->send(new SendMailToUser($event->user));
    }
}
