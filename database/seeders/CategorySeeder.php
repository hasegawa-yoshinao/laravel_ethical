<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => '食品・飲料',
                'sort_order' => 1,
            ],
            [
                'name' => '雑貨',
                'sort_order' => 2,
            ],
            [
                'name' => 'ファッション',
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => 'FAIR TRADE認証',
                'sort_order' => 1,
                'primary_category_id' =>1 
            ],
            [
                'name' => 'レインフォレスト・アライアンス認証',
                'sort_order' => 2,
                'primary_category_id' =>1 
            ],
            [
                'name' => '海のエコラベル・MSC認証',
                'sort_order' => 3,
                'primary_category_id' =>1 
            ],
            [
                'name' => '有機JASマーク',
                'sort_order' => 4,
                'primary_category_id' =>1 
            ],
            [
                'name' => 'エコマーク',
                'sort_order' => 5,
                'primary_category_id' =>2
            ],
            [
                'name' => 'FSC認証',
                'sort_order' => 6,
                'primary_category_id' =>2
            ],
            [
                'name' => 'RSPO認証',
                'sort_order' => 7,
                'primary_category_id' =>2
            ],
            [
                'name' => 'オーガニックテキスタイル世界基準',
                'sort_order' => 8,
                'primary_category_id' =>3
            ],
        ]);
    }
}
