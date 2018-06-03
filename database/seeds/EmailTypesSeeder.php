<?php

use Illuminate\Database\Seeder;

class EmailTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('email_types')->get()->count() == 0){
            DB::table('email_types')->insert([
                [
                    'id' => 1,
                    'name' => 'Questions',
                    'template_route' => '',
                ],
                [
                    'id' => 2,
                    'name' => 'Register confirmation',
                    'template_route' => '',
                ],
                [
                    'id' => 3,
                    'name' => 'Disable register confirmation',
                    'template_route' => '',
                ],
                [
                    'id' => 4,
                    'name' => 'Delete data confirmation',
                    'template_route' => '',
                ],
            ]);
        } else { echo "\e[31mTable combustibles is not empty"; }
    }
}
