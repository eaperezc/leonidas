<?php

namespace App\Http\Controllers;

class PointsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function balance()
    {
        return 100;
    }
    
    public function credit()
    {
        return ['new_balance'=>120];
    }

    public function debit()
    {
        return ['new_balance'=>0];
    }
}
