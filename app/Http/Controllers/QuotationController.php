<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* 各モデルを有効にする */
use App\Quotation;

/* バリデーションを有効にする */
use App\Http\Requests\QuotationRequest;

use Log;

class QuotationController extends Controller
{
    /* メインページ */
    public function index(Request $request) {
        /* Comicモデルからデータベースを取得 */
        $items = Quotation::all();
        $score = config('score');
        
        return view('quotation.index', ['items' => $items, 'score' => $score]);
    }

    /* 追加ページ */
    public function create(Request $request) {
        
        return view('quotation.add');
    }

    /* 追加処理 */
    public function store(QuotationRequest $request) {       

        $quotation = new Quotation;
        $form = $request->all();
        unset($form['_token']);
        $quotation->fill($form)->save();  

        return redirect('/quotation');
    }

    /* 編集ページ */
    public function edit($id) {

        $item = Quotation::find($id);
        
        return view('quotation.update', ['item' => $item]);
    }

    /* 編集処理 */
    public function update(Request $request, $id) {       

        $quotation = Quotation::find($id);
        $form = $request->all();
        unset($form['_token']);
        $quotation->fill($form)->save();  

        return redirect('/quotation');
    }

    /* 削除処理 */
    public function destroy($id) {       

        $quotation = Quotation::find($id);
        $quotation->delete();

        return redirect('/quotation');
    }
}
