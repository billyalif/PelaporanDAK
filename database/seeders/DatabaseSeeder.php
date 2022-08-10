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
                'password' => bcrypt('banyuwangi123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Blitar',
                'alamat_user' => 'Jl. Sudanco Supriadi No. 17, Kabupaten Blitar, Jawa Timur',
                'telp_user' => '(0342)802001',
                'username_user' => 'adminkab.blitar',
                'password' => bcrypt('blitar123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Bojonegoro',
                'alamat_user' => 'Jl. P. Mas Tumapel No. 1, Kabupaten Bojonegoro, Jawa Timur',
                'telp_user' => '(0353)881945',
                'username_user' => 'adminkab.bojonegoro',
                'password' => bcrypt('bojonegoro123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Bondowoso',
                'alamat_user' => 'Jl. Letjen Suprapto, Potos, Badean, Kec. Bondowoso, Kabupaten Bondowoso, Jawa Timur 68211',
                'telp_user' => '(0353)881945',
                'username_user' => 'adminkab.bojonegoro',
                'password' => bcrypt('bondowoso123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Gresik',
                'alamat_user' => 'Jl. Dr. Wahidin Sudirohusodo No. 245, Kabupaten Gresik, Jawa Timur',
                'telp_user' => '(031)3952825',
                'username_user' => 'adminkab.gresik',
                'password' => bcrypt('gresik123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Jember',
                'alamat_user' => 'Jl. Sudirman No. 1, Kabupaten Jember, Jawa Timur',
                'telp_user' => '(0331)481945',
                'username_user' => 'adminkab.jember',
                'password' => bcrypt('jember123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Jombang',
                'alamat_user' => 'Jl. K.H Wahid Hasyim No. 137A, Kaliwungu, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61419',
                'telp_user' => '(0321)861945',
                'username_user' => 'adminkab.jombang',
                'password' => bcrypt('jombang123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Kediri',
                'alamat_user' => 'Jl. Soekarno-Hatta No. 1 Kediri, Jawa Timur',
                'telp_user' => '(0354)6899015',
                'username_user' => 'adminkab.kediri',
                'password' => bcrypt('kediri123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Lamongan',
                'alamat_user' => 'Jl. K.H Ahmad Dahlan No. 1 Lamongan, Jawa Timur',
                'telp_user' => '(0322)321012',
                'username_user' => 'adminkab.lamongan',
                'password' => bcrypt('lamongan123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Lumajang',
                'alamat_user' => 'Jl. Alun-Alun Utara No. 7 Lumajang, Jawa Timur',
                'telp_user' => '(0334)881255',
                'username_user' => 'adminkab.lumajang',
                'password' => bcrypt('lumajang123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Madiun',
                'alamat_user' => 'Jl. Alun-Alun No. 4, Kabupaten Madiun, Jawa Timur',
                'telp_user' => '(0352)451325',
                'username_user' => 'adminkab.madiun',
                'password' => bcrypt('madiun123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Magetan',
                'alamat_user' => 'Jl. Basuki Rahmat Timur No. 1, Kabupaten Magetan, Jawa Timur',
                'telp_user' => '(0351)895280',
                'username_user' => 'adminkab.magetan',
                'password' => bcrypt('magetan123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Malang',
                'alamat_user' => 'Jl. Merdeka Timur No. 3-5, Kota Malang, Jawa Timur',
                'telp_user' => '(0341)326791',
                'username_user' => 'adminkab.malang',
                'password' => bcrypt('malang123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Mojokerto',
                'alamat_user' => 'Jl. Ahmad Yani No. 16, Mergelo, Purwotengah, Kec. Magersari, Kota Mojokerto, Jawa Timur',
                'telp_user' => '(0321)321744',
                'username_user' => 'adminkab.mojokerto',
                'password' => bcrypt('mojokerto123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Admin BAPPEDA',
                'alamat_user' => 'Jl. Pahlawan 102',
                'telp_user' => '0312371923',
                'username_user' => 'superadmin.bappeda',
                'password' => bcrypt('bappedaoke'),
                'id_role' =>'1'
            ],



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
