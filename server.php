<?php
// First, run 'composer require pusher/pusher-php-server'

require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
  "xx",    // Replace with 'key' from dashboard
  "xx", // Replace with 'secret' from dashboard
  "xx",     // Replace with 'app_id' from dashboard
  array(
    'cluster' => 'eu', // Replace with 'cluster' from dashboard
    'useTLS' => true
  )
);

// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
while (true) {
  $pusher->trigger('price-btcusd', 'new-price', array(
    'value' => rand(0, 5000)
  ));
  sleep(1);
}