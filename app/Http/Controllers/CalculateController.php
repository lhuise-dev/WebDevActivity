<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Utils;
use Illuminate\Support\Facades\Log;

class CalculateController extends Controller
{
    public function index($num1, $num2) {

        Log::debug("========== start index ===========");
        $sum = $this->add($num1, $num2);

        $util = new Utils();
        $difference = $util->subtraction($num1, $num2);
        Log::info("sum: " .$sum);
        $product = $util->product($num1, $num2);
        $quotient = $util->quotient($num1, $num2);


        Log::debug("========== end index ===========");
        return view('calculate.compute', compact(
            'sum',
            'difference',
            'product',
            'quotient'
        ));
    }

    private function add($param1, $param2){
        Log::info($param1 . "+" . $param2);
        return $param1 + $param2;
    }
}