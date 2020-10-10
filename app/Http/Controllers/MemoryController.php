<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoryController extends Controller
{
    public function home(){
        return view('home');
    }
    public function range(){
        $memory = ['before' => memory_get_usage()/1000000 . ' MB'];
        $range = range(0, 1000000);
        $memory += ['after' => memory_get_usage()/1000000 . ' MB'];
        unset($range);
        $memory += ['unset' => memory_get_usage()/1000000 . ' MB'];
        return view('range', ['memory' => $memory]);
    }
    public function x_range(){
        function xrange($start, $limit, $step = 1) {
            if ($start <= $limit) {
                if ($step <= 0) {
                    throw new LogicException('Шаг должен быть положительным');
                }

                for ($i = $start; $i <= $limit; $i += $step) {
                    yield $i;
                }
            } else {
                if ($step >= 0) {
                    throw new LogicException('Шаг должен быть отрицательным');
                }

                for ($i = $start; $i >= $limit; $i += $step) {
                    yield $i;
                }
            }
        }

        $memory = ['before' => memory_get_usage()/1000000 . ' MB'];
        xrange(0,1000000 );
        $memory += ['after' => memory_get_usage()/1000000 . ' MB'];
        return view('x_range', ['memory' => $memory]);
    }
}
