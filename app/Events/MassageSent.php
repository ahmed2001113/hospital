<?php

namespace App\Events;

use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Patient;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MassageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $sender;
    public $massage;
    public $receiver;
    public $conversation;
// فانكشن بتبحث في جدول المريض علي حسب اسم المريض الي مبعوت و نفس الكلام في جدول الرسائل
    public function __construct(Patient $sender, Message $massage, Conversation $conversation, Doctor $receiver)
    {
        $this->sender = $sender;
        $this->massage = $massage;
        $this->conversation = $conversation;
        $this->receiver = $receiver;
    }
// فانكشن علشان نخزن البيانات الي تخص الرساله و احنا رايحين للراوت
    public function broadcastWith()
    {
        return [
            'sender_email' => $this->sender->email,
            'message' => $this->massage->id,
            'conversation_id' => $this->conversation->id,
            'receivere_email' => $this->receiver->email,
        ];
    }
// فانكشن علشان يروح للراوت الي عملناه و ياخد معاه الاي دي بتاع الي بعت الرساله
    public function broadcastOn()
    {
        return new PrivateChannel('chat.'.$this->receiver->id);
    }
}
