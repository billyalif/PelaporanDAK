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

        $role=['admin', 'KK', 'Satker'];
        for($i=0;$i<3;$i++){
            DB::table('tabel_role')->insert([
                'jenis_role' => $role[$i],
            ]);
        }

        \App\Models\User::factory(10)->create();
    }
}
