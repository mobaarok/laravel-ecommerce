<?php

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
        $data=array(
            'description'=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt nim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.",
            'short_des'=>"Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat..",
            'photo'=>"image.jpg",
            'logo'=>'/storage/photos/1/logo.png',
            'address'=>"Grand Hoq Tower, Mizan Road, Feni",
            'email'=>"eshop@gmail.com",
            'phone'=>"01635449686",
        );
        DB::table('settings')->insert($data);

    }
}
