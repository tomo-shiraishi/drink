<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slack;
use App\Notifications\SlackNotification;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        $ids = Slack::getUserIds($request->email);
        Slack::sendMessage($ids, $request->message);
        return view('index');
    }

}
