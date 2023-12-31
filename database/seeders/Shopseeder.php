<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Shopseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'エシカルＡ店',
                'information' => 'エシカルなアイテムを取り揃えるセレクトショップです。',
                'filename' => 'sample1.jpg',
                'is_selling' =>true
            ],

            [
                'owner_id' => 2,
                'name' => 'エシカルＢ店',
                'information' => 'エシカルなアイテムを取り揃えるセレクトショップです。',
                'filename' => 'sample2.jpg',
                'is_selling' =>true
            ],
        
        
        
        ]);
    }
}
