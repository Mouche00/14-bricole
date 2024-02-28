<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chatForm($id, User $user)
    {

        $id = auth()->user()->id;
    }

    public function sendMessage()
    {
    }
}
