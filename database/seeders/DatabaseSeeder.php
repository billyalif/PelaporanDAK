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
                'username_user' => 'adminkab.bondowoso',
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
                'nama_user' => 'Kabupaten Nganjuk',
                'alamat_user' => 'JL. Basuki Rachmat, No. 1, Kabupaten Nganjuk, Jawa Timur',
                'telp_user' => '(0358) 232001',
                'username_user' => 'adminkab.nganjuk',
                'password' => bcrypt('nganjuk123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Ngawi',
                'alamat_user' => 'Jl. Tengku Umar No. 12, Kabupaten Ngawi, Jawa Timur.',
                'telp_user' => '(0351) 749001',
                'username_user' => 'adminkab.ngawi',
                'password' => bcrypt('ngawi123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Pacitan',
                'alamat_user' => 'Jl.J.A. Suprapto No 8 Pacitan',
                'telp_user' => '(0357) 881032',
                'username_user' => 'adminkab.pacitan',
                'password' => bcrypt('123'),
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
                'nama_user' => 'Kabupaten Pamekasan',
                'alamat_user' => 'Jl. Pamong Praja No. 1, Kabupaten Pamekasan, Jawa Timur',
                'telp_user' => '(0324)321324',
                'username_user' => 'adminkab.pamekasan',
                'password' => bcrypt('pamekasan123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Pasuruan',
                'alamat_user' => 'Jl. Hayam Wuruk No. 14, Pasuruan, Jawa Timur',
                'telp_user' => '(0343)429064',
                'username_user' => 'adminkab.pasuruan',
                'password' => bcrypt('pasuruan123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Ponorogo',
                'alamat_user' => 'Jl. Alun-Alun Utara No. 9, Kabupaten Ponorogo, Jawa Timur',
                'telp_user' => '(0352)82917',
                'username_user' => 'adminkab.ponorogo',
                'password' => bcrypt('ponorogo123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Probolinggo',
                'alamat_user' => 'Jl. Raya Dringu No. 901, Kabupaten Probolinggo, Jawa Timur',
                'telp_user' => '(0335)421702',
                'username_user' => 'adminkab.probolinggo',
                'password' => bcrypt('probolinggo123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Sampang',
                'alamat_user' => 'Jl. Jamaluddin No. 1A, Kabupaten Sampang, Jawa Timur',
                'telp_user' => '(0323)321550',
                'username_user' => 'adminkab.sampang',
                'password' => bcrypt('sampang123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Sidoarjo',
                'alamat_user' => 'Jl. Gubernur Suryo No. 1, Sidoarjo, Jawa Timur',
                'telp_user' => '(031)8921946',
                'username_user' => 'adminkab.sidoarjo',
                'password' => bcrypt('sidoarjo123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Situbondo',
                'alamat_user' => 'Jl. Pb. Sudirman No. 1, Plaosan, Patokan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur',
                'telp_user' => '(0338)671161',
                'username_user' => 'adminkab.situbondo',
                'password' => bcrypt('situbondo123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Sumenep',
                'alamat_user' => 'Jl. DR. Cipto No. 33, Kabupaten Sumenep, Jawa Timur',
                'telp_user' => '(0328)662610',
                'username_user' => 'adminkab.sumenep',
                'password' => bcrypt('sumenep123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Trenggalek',
                'alamat_user' => 'Jl. Pemuda No. 1, Kabupaten Trenggalek, Jawa Timur',
                'telp_user' => '(0355)927373',
                'username_user' => 'adminkab.trenggalek',
                'password' => bcrypt('trenggalek123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Tuban',
                'alamat_user' => 'Jl. Ronggolawe No. 2, Kutorejo, Kec. Tuban, Kabupaten Tuban, Jawa Timur',
                'telp_user' => '(0321)321744',
                'username_user' => 'adminkab.tuban',
                'password' => bcrypt('tuban123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kabupaten Tulungagung',
                'alamat_user' => 'Jl. Jend. A. Yani Timur, Tamanan, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur',
                'telp_user' => '(0355)321945',
                'username_user' => 'adminkab.tulungagung',
                'password' => bcrypt('tulungagung123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kota Batu',
                'alamat_user' => 'Jl. Panglima Sudirman No. 87, Kota Batu, Jawa Timur',
                'telp_user' => '(0341)591032',
                'username_user' => 'adminkota.batu',
                'password' => bcrypt('batu123'),
                'id_role' =>'2'
            ],

            [
                'nama_user' => 'Kota Surabaya',
                'alamat_user' => 'Jl. Taman Surya No. 1, Ketabang, Kec. Genteng, Kota Surabaya, Jawa Timur',
                'telp_user' => '(031)5312144',
                'username_user' => 'adminkota.surabaya',
                'password' => bcrypt('surabaya123'),
                'id_role' =>'2'
            ],

            // ADMIN BAPPEDA
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
