<?php

use Illuminate\Database\Seeder;

class AppIdInitializer extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('app_id')->insert([
            'number' => '786',
        ]);
    }
}
