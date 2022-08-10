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

        \App\Models\User::insert([
            [
                'nama_user' => 'Kabupaten Bangkalan',
                'alamat_user' => 'Jalan Soekarno Hatta No 35 Bangkalan, Kabupaten Bangkalan',
                'telp_user' => '0313061179',
                'username_user' => 'adminkab.bangkalan',
                'password' => bcrypt('bangkalan123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Banyuwangi',
                'alamat_user' => 'Jl. A. Yani No. 100, Kabupaten Banyuwangi',
                'telp_user' => '(0333)427344',
                'username_user' => 'adminkab.banyuwangi',
                'password' => bcrypt('bwi12345'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Blitar',
                'alamat_user' => 'Jl. Sudanco Supriadi No. 17, Kabupaten Blitar, Jawa Timur',
                'telp_user' => '(0342)802001',
                'username_user' => 'adminkab.blitar',
                'password' => bcrypt('adminpemkotblitar123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Bojonegoro',
                'alamat_user' => 'Jl. P. Mas Tumapel No. 1, Kabupaten Bojonegoro, Jawa Timur',
                'telp_user' => '(0353)881945',
                'username_user' => 'adminkab.bojonegoro',
                'password' => bcrypt('kotabojonegoro'),
                'id_role' =>'2'
            ]



        ]);

        $dak=['Fisik', 'Non-Fisik'];
        for($i=0;$i<2;$i++){
            DB::table('tabel_dak')->insert([
                'nama_dak' => $dak[$i],
            ]);
        }

        DB::table('tabel_batch')->insert([
            'triwulan_batch' => '1',
            'tahun_batch' => '2022'
        ]);

        DB::table('tabel_batch')->insert([
            'triwulan_batch' => '2',
            'tahun_batch' => '2022'
        ]);

        DB::table('tabel_batch')->insert([
            'triwulan_batch' => '3',
            'tahun_batch' => '2022'
        ]);
    }
}
