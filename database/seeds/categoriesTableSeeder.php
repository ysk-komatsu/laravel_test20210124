<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category' => '著名人',    
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'スポーツ',    
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'ドラマ',    
        ];
        DB::table('categories')->insert($param);

        $param = [
            'category' => 'アニメ',    
        ];
        DB::table('categories')->insert($param);
    }
}
