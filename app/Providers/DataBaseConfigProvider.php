<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class DataBaseConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $host = Cache::get('db_config.host', env('DB_HOST', '127.0.0.1'));
        // $port = Cache::get('db_config.port', env('DB_PORT', '3306'));
        // $database = Cache::get('db_config.database', env('DB_DATABASE'));
        // $username = Cache::get('db_config.username', env('DB_USERNAME'));
        // $password = Cache::get('db_config.password', env('DB_PASSWORD', ''));

        // config(['database.connections.mysql.host' => $host]);
        // config(['database.connections.mysql.port' => $port]);
        // config(['database.connections.mysql.database' => $database]);
        // config(['database.connections.mysql.username' => $username]);
        // config(['database.connections.mysql.password' => $password]);

        // DB::reconnect('mysql');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
