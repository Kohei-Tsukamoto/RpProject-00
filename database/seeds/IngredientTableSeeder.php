<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $param = [
            'ingredient' => 'キャベツ',
            'category_id' => 1,
            'unit' => '玉',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'レタス',
            'category_id' => 1,
            'unit' => '玉',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '白菜',
            'category_id' => 1,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '玉ねぎ',
            'category_id' => 1,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '長ねぎ',
            'category_id' => 1,
            'unit' => '本',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'もやし',
            'category_id' => 1,
            'unit' => '袋',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'トマト',
            'category_id' => 1,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'プチトマト',
            'category_id' => 1,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'きゅうり',
            'category_id' => 1,
            'unit' => '本',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'なす',
            'category_id' => 1,
            'unit' => '本',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ピーマン',
            'category_id' => 1,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'カボチャ',
            'category_id' => 1,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'にんじん',
            'category_id' => 1,
            'unit' => '本',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '大根',
            'category_id' => 1,
            'unit' => '本',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '生姜',
            'category_id' => 1,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'レンコン',
            'category_id' => 1,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '牛薄切り肉',
            'category_id' => 2,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '牛焼肉用',
            'category_id' => 2,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '牛ステーキ',
            'category_id' => 2,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '牛ブロック',
            'category_id' => 2,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '豚薄切り肉',
            'category_id' => 3,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '豚焼肉用',
            'category_id' => 3,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '豚生姜焼き用肉',
            'category_id' => 3,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '豚ブロック肉',
            'category_id' => 3,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '鳥もも肉',
            'category_id' => 4,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '鳥むね肉',
            'category_id' => 4,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '牛ひき肉',
            'category_id' => 2,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '豚ひき肉',
            'category_id' => 3,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '鳥ひき肉',
            'category_id' => 4,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);



        $param = [
            'ingredient' => 'ハム',
            'category_id' => 5,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ソーセージ',
            'category_id' => 5,
            'unit' => '本',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ベーコン',
            'category_id' => 5,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '鮭・サーモン',
            'category_id' => 7,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ぶり',
            'category_id' => 7,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'さば',
            'category_id' => 7,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'さんま',
            'category_id' => 7,
            'unit' => '尾',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'しらす',
            'category_id' => 7,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ツナ缶',
            'category_id' => 7,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'エビ',
            'category_id' => 7,
            'unit' => '尾',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'イカ',
            'category_id' => 7,
            'unit' => '杯',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '貝類',
            'category_id' => 7,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '魚卵',
            'category_id' => 7,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ちくわ',
            'category_id' => 7,
            'unit' => '本',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '海苔',
            'category_id' => 8,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'コンニャク',
            'category_id' => 8,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '昆布',
            'category_id' => 8,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'わかめ',
            'category_id' => 8,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'しいたけ',
            'category_id' => 9,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'しめじ',
            'category_id' => 9,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'エリンギ',
            'category_id' => 9,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'えのき',
            'category_id' => 9,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'まいたけ',
            'category_id' => 9,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '卵',
            'category_id' => 10,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'うずら',
            'category_id' => 10,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'じゃがいも',
            'category_id' => 11,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'さつまいも',
            'category_id' => 11,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '里芋',
            'category_id' => 11,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '長芋',
            'category_id' => 11,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '食パン',
            'category_id' => 12,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'フランスパン',
            'category_id' => 12,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '白米',
            'category_id' => 13,
            'unit' => '合',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '餅',
            'category_id' => 13,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '牛乳',
            'category_id' => 14,
            'unit' => 'ml',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'バター',
            'category_id' => 14,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'チーズ',
            'category_id' => 14,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);


        $param = [
            'ingredient' => 'ヨーグルト',
            'category_id' => 14,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '生クリーム',
            'category_id' => 14,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '豆腐',
            'category_id' => 15,
            'unit' => '',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '油揚げ',
            'category_id' => 15,
            'unit' => '枚',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '納豆',
            'category_id' => 15,
            'unit' => '個',
        ];
        DB::table('ingredients')->insert($param);


        $param = [
            'ingredient' => 'うどん',
            'category_id' => 16,
            'unit' => '人前',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'そば',
            'category_id' => 16,
            'unit' => '',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'そうめん',
            'category_id' => 16,
            'unit' => '人前',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '中華麺',
            'category_id' => 16,
            'unit' => '人前',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'パスタ',
            'category_id' => 16,
            'unit' => '人前',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '白ワイン',
            'category_id' => 17,
            'unit' => 'ml',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '薄力粉',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '塩',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '塩コショウ',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '黒胡椒',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '水',
            'category_id' => 17,
            'unit' => 'ml',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'コンソメ',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '醤油',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '酒',
            'category_id' => 17,
            'unit' => 'ml',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '砂糖',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ニンニク',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'パセリ',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'オリーブオイル',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'みりん',
            'category_id' => 17,
            'unit' => 'ml',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '味噌',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'だし汁',
            'category_id' => 17,
            'unit' => 'ml',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => 'ごま油',
            'category_id' => 17,
            'unit' => 'ml',
        ];
        DB::table('ingredients')->insert($param);

        $param = [
            'ingredient' => '牛脂',
            'category_id' => 17,
            'unit' => 'g',
        ];
        DB::table('ingredients')->insert($param);
    }
}
