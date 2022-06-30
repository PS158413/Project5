<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $client = new Client();
        $res = $client->request('GET', 'http://127.0.0.1:8181/api/oefenings');
        $result = $res->getBody();
        $oefenings = json_decode($result, true);
        return view('home')->with('oefenings', $oefenings);
    }

}
