<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;


class WeightLogController extends Controller
{
   public function index()
   {
      $logs = WeightLog::Paginate(8);
      $user_id = auth()->id();
      $target = weightTarget::where('user_id', $user_id)->first();
      $latest_log = weightLog::where('user_id', $user_id)->latest('date')->first();
      $hd = (object) [
         'target_weight' => $target ? $target->target_weight : 0,
         'weight' => $latest_log ? $latest_log->weight :0,
      ];
      return view('index', compact('logs', 'hd'));
   }

}
