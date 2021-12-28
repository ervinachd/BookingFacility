<?php

use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facility')->insert([
            'facility_id'=>'1',
            'company_id' => '1',
            'FacilityImg'=>'kolamrenang.png',
            'FacilityName'=>'Swimming Pool',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'2',
            'company_id' => '1',
            'FacilityImg'=>'gym.jpg',
            'FacilityName'=>'Gym',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'3',
            'company_id' => '1',
            'FacilityImg'=>'lapbasket.jpg',
            'FacilityName'=>'BasketBall Court',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'4',
            'company_id' => '1',
            'FacilityImg'=>'laptenis.jpeg',
            'FacilityName'=>'Tennis Court',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'5',
            'company_id' => '1',
            'FacilityImg'=>'function.jpg',
            'FacilityName'=>'Function Hall',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'6',
            'company_id' => '2',
            'FacilityImg' => 'Sauna.jpg',
            'FacilityName'=>'Sauna',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'7',
            'FacilityImg'=>'function.jpg',
            'company_id' => '2',
            'FacilityName'=>'Function Hall',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'8',
            'company_id' => '2',
            'FacilityImg'=>'laptenis.jpeg',
            'FacilityName'=>'Tennis Court',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'9',
            'company_id' => '2',
            'FacilityImg'=>'lapbasket.jpg',
            'FacilityName'=>'BasketBall Court',
        ]);

        DB::table('facility')->insert([
            'facility_id'=>'10',
            'company_id' => '2',
            'FacilityImg'=>'kolamrenang.png',
            'FacilityName'=>'Swimming Pool',
        ]);

    }
}
