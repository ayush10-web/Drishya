<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            [
                'key' => 'name',
                'value' => '',
            ],
            [
                'key' => 'address',
                'value' => '',
            ],

            [
                'key' => 'email',
                'value' => '',
            ],
            
            [
                'key' => 'phoneNumber',
                'value' => '',
            ],
            
            [
                'key' => 'mobileNumber',
                'value' => '',
            ],
            [
                'key' => 'logo',
                'value' => '',
            ],
            [
                'key' => 'facebook',
                'value' => '',
            ],
            [
                'key' => 'twitter',
                'value' => '',
            ],
            [
                'key' => 'instagram',
                'value' => '',
            ],
            [
                'key' => 'youtube',
                'value' => '',
            ],
            [
                'key' => 'website',
                'value' => '',
            ],
            [
                'key' => 'room',
                'value' => '',
            ],
            [
                'key' => 'checkin',
                'value' => '',
            ],
            [
                'key' => 'checkout',
                'value' => '',
            ],
            [
                'key' => 'roomimage',
                'value' => '',
            ]
        ]);
    }
}
