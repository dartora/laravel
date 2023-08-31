<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function broadcast($request)
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();
        return view('broadcast', ['message', $request->get('message')]);
    }
    public function receive($request)
    {

        return view('receive', ['message' => $request->get('message')]);
    }
}
