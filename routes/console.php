<?php

use Nano\Framework\Console\Schedule;

/** @var Schedule $schedule */

// Example:
// $schedule->command('inspire')->hourly();

// $schedule->call(function () {
//     echo "Custom callback";
// })->daily();

$schedule->command('queue:work --once')->everyMinute();
