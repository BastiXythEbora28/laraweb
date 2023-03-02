<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
                                                        

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('free_models')->insert([
            'name'=>'Cbastienxyth',
            'Emailaddress'=>'ccabstienxyth@gmail.com',
            'Phonenumber'=>'2212508',
            'message'   => 'banga!'
        ]);
    }
}
