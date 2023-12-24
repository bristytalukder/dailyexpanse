<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InModel;
use App\Models\ExpModel;
class DashboardController extends BaseController
{
    public function index()
    {
        $totalIn = new InModel();
		$result = $totalIn->select('sum(in_amount) as sumQuantities')->first();
		$data['Insum'] = $result['sumQuantities'];

        $totalex = new ExpModel();
		$result = $totalex->select('sum(ex_amount) as sumQuantities')->first();
		$data['exSum'] = $result['sumQuantities'];

        return view('dashboard',$data);
    }
   
}
