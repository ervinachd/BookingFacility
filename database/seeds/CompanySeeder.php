<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->insert([
            'id' => '1',
            'company_name' => 'Apartemen Season City',
            'company_address' => 'Jln. Raya Mangga Besar Utara no 42d',
            'company_phonenumber' => '085565126561'
        ]);

        DB::table('company')->insert([
            'id' => '2',
            'company_name' => 'Apartemen Pullman',
            'company_address' => 'Jln. Yos Sudarso 12',
            'company_phonenumber' => '08728676711'
        ]);
    }
}
