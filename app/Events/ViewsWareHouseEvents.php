<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\WareHouse;

class ViewsWareHouseEvents
{
    use InteractsWithSockets, SerializesModels;
    public $viewwarehouse;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(WareHouse $viewwarehouse)
    {
        $this->viewwarehouse = $viewwarehouse;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return [];
        // return new PrivateChannel('channel-name');
    }
}
