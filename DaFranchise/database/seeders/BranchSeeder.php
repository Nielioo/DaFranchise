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
            'branch_location' => 'Supermal Pakuwon Indah, Lantai 1, Jl. Mayjen Yono Suwoyo No. 2, Surabaya, Indonesia',
            'branch_phone' => '+62317390075',
            'branch_rating' => '4.6',
            'franchise_id' => '1',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Jl. HR Muhammad No. 102, Surabaya, Indonesia',
            'branch_phone' => '+623199147388',
            'branch_rating' => '4.8',
            'franchise_id' => '1',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('branches')->insert([
            'branch_location' => 'Pakuwon Mall, Jl. Mayjen Yono Suwoyo No.2, Surabaya, Indonesia',
            'branch_phone' => '+6281216672320',
            'branch_rating' => '4.5',
            'franchise_id' => '2',

            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
