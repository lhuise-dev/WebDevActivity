<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ConversionController extends Controller
{
    public function index() {
        return view('conversion.conversionUI');
    }

    public function fetchData(Request $request) {
        Log::debug("==========START HERE ===========");
        $val1       = $request->val1;        
        $choiceVal1 = $request->choiceVal1;  
        $choiceVal2 = $request->choiceVal2;  
        $result = $val1;
        
        if ($choiceVal1 == 'celsius') {
            $result = $this->celsiusConversion($val1, $choiceVal2);
        } elseif ($choiceVal1 == 'fahrenheit') {
            $result = $this->fahrenheitConversion($val1, $choiceVal2);
        } elseif ($choiceVal1 == 'kelvin') {
            $result = $this->kelvinConversion($val1, $choiceVal2);
        }
        return view('conversion.conversionUI', compact('result'));
        Log::debug("==========END HERE ===========");
    }

    public function celsiusConversion($val1, $choiceVal2) {
        Log::debug("==========START HERE ===========");
        switch ($choiceVal2) {
            case 'fahrenheit':
                Log::debug("==========END HERE ===========");
                return (1.8 * $val1) + 32;

            case 'kelvin': 
                return $val1 + 273.15;

            case 'celsius': 
                return $val1;

            default:
                return null;
        }
        Log::debug("==========END HERE ===========");
    }

    public function fahrenheitConversion($val1, $choiceVal2) {
        Log::debug("==========START HERE ===========");
        switch ($choiceVal2) {
            case 'celsius': 
                return ($val1 - 32) / 1.8;

            case 'kelvin': 
                return ($val1 - 32) * 5/9 + 273.15;

            case 'fahrenheit':
                return $val1;

            default:
                return null;
        }
        Log::debug("==========END HERE ===========");
    }

    public function kelvinConversion($val1, $choiceVal2) {
        Log::debug("==========START HERE ===========");
        switch ($choiceVal2) {
            case 'celsius': 
                return $val1 - 273.15;

            case 'fahrenheit':
                return ($val1 - 273.15) * 9/5 + 32;

            case 'kelvin':
                return $val1;

            default:
                return null;
        }
        Log::debug("==========END HERE ===========");
    }
}