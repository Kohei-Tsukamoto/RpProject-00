<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category_name' => '野菜',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '牛肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '豚肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '鶏肉',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'ハム・ソーセージ・ベーコン',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '果物',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '魚介類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '乾物・海藻類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'きのこ',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '卵',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'いも',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'パン',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'ごはん類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '乳製品',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '豆腐類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => '麺類',
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category_name' => 'その他',
        ];
        DB::table('categories')->insert($param);
    }
}
