<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teaTask;
use App\brokersname;

class InventoryController extends Controller
{
    public function teaInventory() {
        $data = teaTask::all();
        $brokers = brokersname::all();

	    return view('tea_inventory', [
            'row_data' => $data,
            'brokers' => $brokers
        ])->render();
    }

}
