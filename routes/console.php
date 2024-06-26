<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Illuminate\Support\Facades\Storage;
use App\Console\Commands\BackUpDB;
use mysqldump;
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
 
Schedule::command('user:expiration')->everyMinute();
Schedule::command('database:BackUpDB')->daily();