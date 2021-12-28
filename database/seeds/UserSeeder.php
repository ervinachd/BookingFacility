<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'id'=>'1',
                'company_id' => '1',
                'name'=>'User',
                'gender'=>'Female',
                'phonenumber'=>'081542743321',
                'unit'=>'Damar 12-8',
                'address'=>'Apartemen Pantai Mutiara Lantai 12 No.8
                Jl. Raya Pantai Mutiara Blok R-1, Pluit 14450',
                'DOB'=>'1997-11-11',
                'username'=>'user',
                'email'=>'user@user.com',
                'password' => bcrypt('user'),
                'role' => 'user',
           
        ]);
       
        DB::table('users')->insert([
            'id'=>'2',
            'company_id' => '1',
            'name'=>'Admin',
            'gender'=>'Female',
            'phonenumber'=>'086765743321',
            'unit'=> null ,
            'address'=> null ,
            'DOB'=>'1994-10-11',
            'username'=>'admin',
            'email'=>'admin@admin.com',
            'role' => 'admin',
            'password' =>  bcrypt('admin'),

        ]);

        DB::table('users')->insert([
            'id'=>'3',
            'company_id' => '1',
            'name'=>'User_1',
            'gender'=>'Female',
            'phonenumber'=>'086765743321',
            'unit'=> null ,
            'address'=> null ,
            'DOB'=>'1994-10-11',
            'username'=>'user_1',
            'email'=>'ervinachandra18@gmail.com',
            'role' => 'user',
            'password' =>  bcrypt('vina'),

        ]);
    }
}
