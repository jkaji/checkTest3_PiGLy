<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeightTargetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weight_targets')->truncate();

        $param = [
            'user_id' => 1,
            'target_weight' => 45.0,
            'created_at' => now(),
            'updated_at' => now()
        ];
        DB::table('weight_targets')->insert($param);
    }
}
