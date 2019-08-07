<?php

namespace Tests\Commands\Upgrade\V5_5_5_0\Seeds;

use Illuminate\Database\Seeder;

class ConsolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('consoles')->delete();

        \DB::table('consoles')->insert([
            [
                'id'         => 1,
                'name'       => 'App\Console\Commands\Upgrade\V5_5_4_1',
                'created_at' => '2018-09-27 22:26:00',
                'updated_at' => '2018-09-27 22:26:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 2,
                'name'       => 'App\Console\Commands\Upgrade\V5_5_4_3',
                'created_at' => '2018-09-27 22:26:00',
                'updated_at' => '2018-09-27 22:26:00',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'name'       => 'App\Console\Commands\Upgrade\V5_5_6_0',
                'created_at' => '2018-09-28 10:26:00',
                'updated_at' => '2018-09-28 10:26:00',
                'deleted_at' => null,
            ],
        ]);
    }
}
