<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_settings')->insert([
            [
                'name'       => 'app',
                'value'      => 'app',
                'description'=> 'silahkan isi nama aplikasi',
            ],
            [
                'name'       => 'email',
                'value'      => 'demo@gmail.com',
                'description'=> 'silahkan isi email smtp',
            ],
            [
                'name'       => 'domain',
                'value'      => 'demo.com',
                'description'=> 'silahkan isi domain',
            ],
            [
                'name'       => 'phone',
                'value'      => '088111222334',
                'description'=> 'silahkan isi phone',
            ],
            [
                'name'       => 'favicon',
                'value'      => 'favicon',
                'description'=> 'silahkan isi favicon',
            ],
            [
                'name'       => 'logo',
                'value'      => 'logo',
                'description'=> 'silahkan isi logo',
            ],
            [
                'name'       => 'profile_image',
                'value'      => 'isikan profile image user default',
                'description'=> 'silahkan isi profile',
            ],
            

        ]);
    }
}
