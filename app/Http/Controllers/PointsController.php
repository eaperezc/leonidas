<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function balance()
    {
        return 100;
    }

    public function credit(Request $request)
    {
        $credit_response = [];
        if (isset($this->request['account_id'])) {
            $credit_response = ['new_balance'=>120];
        } else {
            $credit_response = ['error' =>  app('translator')->trans('messages.must_send_valid_account_id')];
        }
        return $credit_response;
    }

    public function debit(Request $request)
    {
        $debit_response = [];
        if (isset($this->request['account_id'])) {
            $debit_response = ['new_balance'=>0];
        } else {
            $credit_response = ['error' =>  app('translator')->trans('messages.must_send_valid_account_id')];
        }
        return $debit_response;
    }

    /**
    * Gets the request object
    */
    private function getRequest(Request $request)
    {
        //Gets the request input
        if ($request->isJson()) {
            $this->request = $request->json()->all();
        } else {
            $this->request = $request->all();
        }
    }
}
