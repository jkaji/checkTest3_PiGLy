<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;

class WeightLogController extends Controller
{
   public function index()
   {
      $logs = WeightLog::all();
      $logs = WeightLog::Paginate(8);
      return view('index', ['logs' => $logs]);
   }

}
