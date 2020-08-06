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
        //1//
        $param = [
            'category_name' => '野菜',
        ];
        DB::table('categories')->insert($param);
        //2//
        $param = [
            'category_name' => '牛肉',
        ];
        DB::table('categories')->insert($param);
        //3//
        $param = [
            'category_name' => '豚肉',
        ];
        DB::table('categories')->insert($param);
        //4//
        $param = [
            'category_name' => '鶏肉',
        ];
        DB::table('categories')->insert($param);
        //5//
        $param = [
            'category_name' => 'ハム・ソーセージ・ベーコン',
        ];
        DB::table('categories')->insert($param);
        //6//
        $param = [
            'category_name' => '果物',
        ];
        DB::table('categories')->insert($param);
        //7//
        $param = [
            'category_name' => '魚介類',
        ];
        DB::table('categories')->insert($param);
        //8//
        $param = [
            'category_name' => '乾物・海藻類',
        ];
        DB::table('categories')->insert($param);
        //9//
        $param = [
            'category_name' => 'きのこ',
        ];
        DB::table('categories')->insert($param);
        //10//
        $param = [
            'category_name' => '卵',
        ];
        DB::table('categories')->insert($param);
        //11//
        $param = [
            'category_name' => 'いも',
        ];
        DB::table('categories')->insert($param);
        //12//
        $param = [
            'category_name' => 'パン',
        ];
        DB::table('categories')->insert($param);
        //13//
        $param = [
            'category_name' => 'ごはん類',
        ];
        DB::table('categories')->insert($param);
        //14//
        $param = [
            'category_name' => '乳製品',
        ];
        DB::table('categories')->insert($param);
        //15//
        $param = [
            'category_name' => '豆腐類',
        ];
        DB::table('categories')->insert($param);
        //16//
        $param = [
            'category_name' => '麺類',
        ];
        DB::table('categories')->insert($param);
        //17//
        $param = [
            'category_name' => 'その他',
        ];
        DB::table('categories')->insert($param);
    }
}
