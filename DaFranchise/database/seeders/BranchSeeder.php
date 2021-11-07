<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('branches')->insert([
            'branch_location' => 'Ciputra World LG, Jl. Mayjen Sungkono No.89, Surabaya, Indonesia',
            'branch_phone' => '+623151200270',
            'branch_rating' => '4.3',
            'franchise_id' => '1',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Jl. Ahmad Yani No.72-74, Surabaya, Indonesia',
            'branch_phone' => '+62318283888',
            'branch_rating' => '4.6',
            'franchise_id' => '2',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Jl. HR Muhammad No. 102, Surabaya, Indonesia',
            'branch_phone' => '+623199147388',
            'branch_rating' => '4.8',
            'franchise_id' => '2',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Plaza Surabaya, No.11-14, Jl. Pemuda No.33, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271',
            'branch_phone' => '+62315315780',
            'branch_rating' => '4.4',
            'franchise_id' => '2',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Supermal Pakuwon Indah, Lantai 1, Jl. Mayjen Yono Suwoyo No. 2, Surabaya, Indonesia',
            'branch_phone' => '+62317390075',
            'branch_rating' => '4.6',
            'franchise_id' => '2',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Jl. Pacar Keling No.25, Surabaya, Indonesia',
            'branch_phone' => '+62315058133',
            'branch_rating' => '4.3',
            'franchise_id' => '3',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Pakuwon Mall, Jl. Mayjen Yono Suwoyo No.2, Surabaya, Indonesia',
            'branch_phone' => '+6281216672320',
            'branch_rating' => '4.5',
            'franchise_id' => '4',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
