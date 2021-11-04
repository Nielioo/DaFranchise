<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FranchiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('franchises')->insert([
			'franchise_name' => 'Excelso',
			'franchise_founded' => '1991',
			'franchise_type' => 'Food and Beverage',
			'franchise_outlet' => '126',
			'franchise_investment' => '250 juta s/d 1.5 milyar',
			'franchise_website' => 'https://excelso-coffee.com',
			'franchise_description' => 'Excelso adalah merek kopi dan kafe asli dari Indonesia yang merupakan bagian dari Kapal Api Grup, produsen kopi terbesar di Indonesia. Selain tersedia kopi kemasan premium, Excelso juga memiliki kafe yang pertama kali dibuka pada bulan September 1991 di Plaza Indonesia, Jakarta. Excelso telah berkembang menjadi salah satu kafe yang memiliki reputasi di Indonesia, hingga kini telah memiliki jaringan lebih dari 100 outlet dan hadir di lebih dari 30 kota besar di Indonesia.',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now(),
		]);

        DB::table('franchises')->insert([
			'franchise_name' => 'Lotte Grosir',
			'franchise_founded' => '1993',
			'franchise_type' => 'Retail',
			'franchise_outlet' => '47',
			'franchise_investment' => '77 juta',
			'franchise_website' => 'https://www.lottemart.co.id/',
			'franchise_description' => 'Perusahaan ritel kenamaan Korea Selatan, LOTTE Grosir dan LOTTE Mart, yang merupakan bagian dari LOTTE GROUP, perusahaan Korea pertama yang melakukan penetrasi pasar dalam industri wholesale dan ritel di Indonesia.',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now(),
		]);

    }
}
