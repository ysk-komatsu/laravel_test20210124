<?php

use Illuminate\Database\Seeder;

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
            'favorite' => 4    
        ];
        DB::table('quotations')->insert($param);
       
        $param = [
            'name' => 'マーク・ザッカーバーグ',
            'quotation' => 'The biggest risk is not taking any risk
                            最大のリスクは、リスクを取らないことだ',
            'favorite' => 3
        ];
        DB::table('quotations')->insert($param);
       
        $param = [
            'name' => 'スティーブ・ジョブズ',
            'quotation' => 'Stay hungry. Stay foolish.
                            ハングリーであれ。愚か者であれ',
            'favorite' => 4
        ];
        DB::table('quotations')->insert($param);
       
        $param = [
            'name' => '本田圭佑',
            'quotation' => 'プロフェッショナルを今後「ケイスケ　ホンダ」にしてしまえばいい。「お前ケイスケホンダ」だなみたいな',
            'favorite' => 5
        ];
        DB::table('quotations')->insert($param);
    }
}
