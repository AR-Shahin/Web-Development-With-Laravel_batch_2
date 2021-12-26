<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\SendUserNotification;
use Illuminate\Http\Request;
use Exception;
use Vonage\SMS\Client;
use App\Http\Controllers\Controller;

class NotificationController extends Controller
{
    function mail()
    {
        $user = User::find(2);
        $user->notify(new SendUserNotification($user));
        return "Notification has been Sent!";
    }


    public function index()
    {
        $code = rand(100, 500);
        $basic  = new \Vonage\Client\Credentials\Basic("9d68629f", "GBVfpt6FHrIod89Y");
        $client = new \Vonage\Client($basic);
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("8801754100439", 'test', "Your verification code is $code")
        );

        $message = $response->current();

        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
