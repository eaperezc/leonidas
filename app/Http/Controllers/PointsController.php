<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Point;

class PointsController extends Controller
{
    private $request;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->request = array();
    }

    public function balance(Request $request)
    {

        $balance_response = [];
        //Get the request params
        $this->getRequest($request);
        if (isset($this->request['account_id'])) {
            $balance_response = ['new_balance'=>100];
        } else {
            $balance_response = [
                'error' =>  app('translator')->trans('messages.must_send_valid_account_id')
            ];
        }
        return $balance_response;
    }

    public function credit(Request $request)
    {
        $account_id = $request->input('account_id');
        $amount = $request->input('amount');

        $record = Point::where('account_id', $account_id)->first();
        $record->points += $amount;

        $record->save();

        return $record;
    }

    public function debit(Request $request)
    {
        $account_id = $request->input('account_id');
        $amount = $request->input('amount');

        $record = Point::where('account_id', $account_id)->first();
        $record->points -= $amount;

        $record->save();

        return $record;
    }


    public function test($account_id)
    {
        return Point::where('account_id', $account_id)->first();
    }


    public function register($account_id)
    {
        $point = new Point;
        $point->account_id = $account_id;
        $point->points = 20;

        $point->save();
    }



}
