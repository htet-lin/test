<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['name' => 'ပြည်သူ့ကျန်းမာရေးဦးစီးဌာန', 'prefix' => 'ပကရ'],
            ['name' => 'ကုသရေးဦးစီးဌာန', 'prefix' => 'ကုသ'],
            ['name' => 'ကျန်းမာရေးနှင့် အားကစားဝန်ကြီးဌာန', 'prefix' => 'ကအ']
            // [ 'name' => 'Department of Medical Services', 'prefix' => '']
            // 'Department of Food and Drug Administration',
            // 'Department of Human Resources for Health',
            // 'Department of Medical Research',
            // 'Department of Traditional Medicine',
            // 'Department of Sports and Physical Education'
        ];

        foreach ($departments as $department) {
            DB::table('departments')->insert([
                'name' => $department['name'],
                'prefix' => $department['prefix'],
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
