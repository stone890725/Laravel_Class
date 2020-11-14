<?php
    require 'package/vendor/autoload.php' ;
    use Carbon\Carbon;
    $now = Carbon::now()->setTimezone('Asia/Taipei');
    echo "Time is " . $now;
    echo "<br>";
    $tomorrow = Carbon::now()->addDay(-5);
    $lastWeek = Carbon::now()->subWeek(10);
    echo "tomorrow = " . $tomorrow;
    echo "<br>";
    echo "lastWeek = " . $lastWeek;
    echo "<br>";
    $howOldAmI = Carbon::createFromDate(2000, 7, 25)->age;
    echo "年紀 = " . $howOldAmI;
    echo "<br>";