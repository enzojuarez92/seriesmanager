<?php

namespace App\Http\Controllers\config;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class ConnectionController extends Controller
{
    public function showConnection()
    {
        return view('config.show-connection');
    }

    public function connection(Request $request)
    {
        $config = [
            'driver' => 'mysql',
            'host' => $request->input('host'),
            'port' => $request->input('port'),
            'database' => $request->input('database'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];

        cache(['database_config' => $config], now()->addHours(24)); 
        return redirect()->route('dashboard');
    }
}
