<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Send message
     */
    public function sendMessage(Request $request)
    {
        $message = $request->message;

        MessageSent::dispatch($message);

        return response()->json([
            'message' => 'Message sent successfully'
        ], 201);
    }
}
