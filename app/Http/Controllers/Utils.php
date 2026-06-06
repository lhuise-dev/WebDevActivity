<?php

namespace App\Http\Controllers;

use Brick\Math\Exception\NumberFormatException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class Utils extends Controller
{
    public function subtraction($a, $b)
    {
        Log::info("==========ERROR HERE ===========");
        return $a - $b;
    }

    public function product($a, $b)
    {
        Log::info("==========ERROR HERE ===========");
        return $a * $b;
    }

    public function quotient($a, $b)
    {
        // if ($b == 0) {
        //     return "Cannot divide by zero";
        // }

        $quotient = 0;
        try {
            $quotient = $a/$b;
        } catch(Throwable $error) {
            Log::error($error->getMessage());
        } catch(NumberFormatException $e) {
            
        } finally{
            
        }
            return $quotient;
    }
}