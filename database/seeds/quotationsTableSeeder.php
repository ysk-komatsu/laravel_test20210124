<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class quotationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '安西先生',
            'quotation' => '諦めたらそこで試合終了ですよ',
            'score' => 4,
            'category_id' => 4
        ];
        DB::table('quotations')->insert($param);
       
        $param = [
            'name' => 'マーク・ザッカーバーグ',
            'quotation' => 'The biggest risk is not taking any risk
                            最大のリスクは、リスクを取らないことだ',
            'score' => 3,
            'category_id' => 1
        ];
        DB::table('quotations')->insert($param);
       
        $param = [
            'name' => 'スティーブ・ジョブズ',
            'quotation' => 'Stay hungry. Stay foolish.
                            ハングリーであれ。愚か者であれ',
            'score' => 4,
            'category_id' => 1
        ];
        DB::table('quotations')->insert($param);
       
        $param = [
            'name' => '本田圭佑',
            'quotation' => 'プロフェッショナルを今後「ケイスケ　ホンダ」にしてしまえばいい。「お前ケイスケホンダ」だなみたいな',
            'score' => 5,
            'category_id' => 2
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => '及川徹',
            'quotation' => '才能は開花させるもの、センスは磨くもの',
            'score' => 5,
            'category_id' => 4
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => 'ダルビッシュ有',
            'quotation' => '土、日の休みが消え。夏休みが消え。冬休みが消え。
                            友達が遊んでる時に練習してた。だから今がある',
            'score' => 5,
            'category_id' => 2
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => 'イーロン・マスク',
            'quotation' => "Don't be afraid of new arenas.
                            新しい舞台に立つことを恐れるな",
            'score' => 3,
            'category_id' => 1
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => 'イチロー',
            'quotation' => '壁というのは、できる人にしかやってこない。超えられる可能性がある人にしかやってこない。
                            だから、壁がある時はチャンスだと思っている',
            'score' => 5,
            'category_id' => 2
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => '煉獄杏寿郎',
            'quotation' => '己の弱さや不甲斐なさにどれだけ打ちのめされようと　心を燃やせ　歯を食いしばって前を向け',
            'score' => 5,
            'category_id' => 2
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => '阿久津真矢',
            'quotation' => 'いい加減目覚めなさい',
            'score' => 4,
            'category_id' => 3
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => '川藤幸一',
            'quotation' => '未知を切り開くのは自信と勇気だ',
            'score' => 5,
            'category_id' => 3
        ];
        DB::table('quotations')->insert($param);

        $param = [
            'name' => '柊一颯',
            'quotation' => '自分の言葉に、自分の行動に、責任を持てよ',
            'score' => 5,
            'category_id' => 3
        ];
        DB::table('quotations')->insert($param);
    }
}
