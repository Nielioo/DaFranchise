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
			'franchise_name' => 'Century',
			'franchise_founded' => '1993',
			'franchise_type' => 'Pharmacy',
			'franchise_outlet' => '280',
			'franchise_investment' => '400 juta',
			'franchise_website' => 'https://century-pharma.com',
			'franchise_description' => 'Century percaya pada pentingnya kesehatan yang utuh. Kami memposisikan diri untuk membantu setiap manusia agar berinvestasi dalam kesehatan utuh mereka; sehingga mereka dapat mewujudkan tujuan hidup dengan lebih baik, dan menjadi bagian dari masyarakat yang lebih berkualitas di masa depan.',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now(),
		]);

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
			'franchise_name' => 'JNE',
			'franchise_founded' => '1990',
			'franchise_type' => 'Expedition',
			'franchise_outlet' => '6800',
			'franchise_investment' => '50 juta',
			'franchise_website' => 'https://www.jne.co.id/id/beranda',
			'franchise_description' => 'Dengan pengalaman selama 30 tahun, JNE melayani kebutuhan pelanggan setianya, dengan jasa pengiriman dalam dan luar negeri.',

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

        DB::table('franchises')->insert([
			'franchise_name' => 'Melia',
			'franchise_founded' => '1996',
			'franchise_type' => 'Laundry',
			'franchise_outlet' => '70 (Workshop) & 600 (Counter)',
			'franchise_investment' => '650 juta',
			'franchise_website' => 'https://www.melia-laundry.com',
			'franchise_description' => 'Jaringan waralaba laundry terbesar di Indonesia versi Majalah Swa dan juga sebagai penerima Excellent Franchise & Business Concept Award 2006 dari Asosiasi Franchise Indonesia, serta telah beroperasi di 24 kota besar di Indonesia, termasuk di Bali.',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now(),
		]);

        DB::table('franchises')->insert([
			'franchise_name' => 'Mr Montir',
			'franchise_founded' => '2010',
			'franchise_type' => 'Automotive',
			'franchise_outlet' => '34',
			'franchise_investment' => '211 juta s/d 369 juta',
			'franchise_website' => 'https://www.mrmontir.com',
			'franchise_description' => 'A national chain of motorcycle workshop and retails that caters the need of comfortable, quality services for motorcycles <250cc as well as the rider\'s lifestyle. Mr. MONTIR was established in 2011 as a brand of PT. Techno Motor Indonesia.',

			'created_at' => \Carbon\Carbon::now(),
			'updated_at' => \Carbon\Carbon::now(),
		]);

    }
}
