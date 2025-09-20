<?php

namespace App\Listeners;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Events\DiagnosingHealth;

class RedisCheckEventListener
{
    /**
     * Handle the event.
     */
    public function handle(DiagnosingHealth $event): void
    {
        $response = DB::select('SELECT 1');
        // if ($response == 'SELECT 1') // down
        if ($response) // up
        {
            Log::info("Mysql is up");
        } 
        else {
            Log::error('Mysql is down');
            throw new Exception('Mysql is down');
        }
    }
}
