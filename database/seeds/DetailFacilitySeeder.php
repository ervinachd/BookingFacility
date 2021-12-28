<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DetailFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('DetailFacility')->insert([
            'id' => '1',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
              'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '09:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '2',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '10:00:00',
            'Time_End' => '12:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '3',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '13:00:00',
            'Time_End' => '15:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '4',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '16:00:00',
            'Time_End' => '18:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '5',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '19:00:00',
            'Time_End' => '21:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '6',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '09:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '7',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '10:00:00',
            'Time_End' => '12:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '8',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '13:00:00',
            'Time_End' => '15:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '9',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '16:00:00',
            'Time_End' => '18:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '10',
            'facility_id' =>'1',
            'FacilityDesc'=>'SwimmingPool Description',
            'FacilityKuota'=> '40' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '19:00:00',
            'Time_End' => '21:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '11',
            'facility_id' =>'2',
            'FacilityDesc'=>'Gym Description',
            'FacilityKuota'=> '5' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '09:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '12',
            'facility_id' =>'2',
            'FacilityDesc'=>'Gym Description',
            'FacilityKuota'=> '5' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '10:00:00',
            'Time_End' => '12:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '13',
            'facility_id' =>'2',
            'FacilityDesc'=>'Gym Description',
             'FacilityKuota'=> '5' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '13:00:00',
            'Time_End' => '15:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '14',
            'facility_id' =>'2',
            'FacilityDesc'=>'Gym Description',
             'FacilityKuota'=> '5' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '16:00:00',
            'Time_End' => '18:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '15',
            'facility_id' =>'2',
            'FacilityDesc'=>'Gym Description',
            'FacilityKuota'=> '5' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '19:00:00',
            'Time_End' => '21:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '16',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '09:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '17',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '10:00:00',
            'Time_End' => '12:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '18',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '13:00:00',
            'Time_End' => '15:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '19',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '16:00:00',
            'Time_End' => '18:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '20',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
             'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '19:00:00',
            'Time_End' => '21:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '21',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '09:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '22',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '10:00:00',
            'Time_End' => '12:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '23',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '13:00:00',
            'Time_End' => '15:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '24',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '16:00:00',
            'Time_End' => '18:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '25',
            'facility_id' =>'3',
            'FacilityDesc'=>'BasketBall Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '19:00:00',
            'Time_End' => '21:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '26',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '09:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '27',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '10:00:00',
            'Time_End' => '12:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '28',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '13:00:00',
            'Time_End' => '15:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '29',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '16:00:00',
            'Time_End' => '18:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '30',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '19:00:00',
            'Time_End' => '21:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '31',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '09:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '32',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '10:00:00',
            'Time_End' => '12:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '33',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '13:00:00',
            'Time_End' => '15:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '34',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '16:00:00',
            'Time_End' => '18:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '35',
            'facility_id' =>'4',
            'FacilityDesc'=>'Tennis Court Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '0' ,
            'Slot' => 'Slot B',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '19:00:00',
            'Time_End' => '21:00:00', 
        ]);

        DB::table('DetailFacility')->insert([
            'id' => '36',
            'facility_id' =>'5',
            'FacilityDesc'=>'Function Hall Description',
            'FacilityKuota'=> '1' ,
            'FacilityPrice'=> '700000' ,
            'Slot' => 'Slot A',
            'Date' => Carbon::parse('2022-01-01'),
            'Time_Start' => '07:00:00',
            'Time_End' => '21:00:00', 
        ]);


    }
}
