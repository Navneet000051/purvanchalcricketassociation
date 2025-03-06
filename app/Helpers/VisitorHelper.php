<?php
// app/Helpers/VisitorHelper.php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;

class VisitorHelper
{
    public static function incrementVisitorCount()
    {
        $filePath = Config::get('app.visitor_count_file');

        // Cookie name to check visit state
        $cookieName = 'site_visit';

        if (!isset($_COOKIE[$cookieName])) {
            // Set a session cookie that will expire when the browser is closed
            setcookie($cookieName, 'true', 0, '/');

            // Check if the file exists, if not, create it with initial count
            $count = 0;
            if (!file_exists($filePath)) {
                file_put_contents($filePath, '0');
            } else {
                $count = (int) file_get_contents($filePath);
            }

            // Increment the count by 1
            $count++;
            file_put_contents($filePath, $count);

            return $count;
        } else {
            // Read the current count from the file without incrementing
            return (int) file_get_contents($filePath);
        }
    }
}
