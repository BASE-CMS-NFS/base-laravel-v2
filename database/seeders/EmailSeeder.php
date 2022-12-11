<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cms_emails')->insert([
            [
                'name'  =>'Forget Password',
                'image'=>'emails/VndOiDVBu1EIU8w9Qeh7LaF8XHmvonMMHWyAUjkCunejrpIUYP.jpg',
                'slug'=>'forgot_password',
                'subject'=>'Lupa Password',
                'content'=>'<p>Berikut adalah password baru anda, silahkan gunakan untuk login.</p><p>&nbsp;</p>',
                'description'=>'<p>&nbsp;</p><p>Best Regars</p><p>Admin</p>',
                'from_name'=>'whatspro.id',
                'from_email'=>'admin@whatspro.id',
            ]
        ]);
    }
}
