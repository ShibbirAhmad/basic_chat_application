<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Message implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $username;
    public $message;

    public function __construct($username,$message)
    {
        $this->message = $message;
        $this->username = $username;
    }



    public function broadcastOn()
    {
        return ['my-channel'];
    }



    public function broadcastAs()
    {
        return 'my-event';
    }




}
