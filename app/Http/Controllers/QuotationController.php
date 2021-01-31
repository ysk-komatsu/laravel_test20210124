<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/* 各モデルを有効にする */
use App\Quotation;
use App\Registration;


/* バリデーションを有効にする */
use App\Http\Requests\QuotationRequest;

use Log;

class QuotationController extends Controller
{
    /* メインページ */
    public function index(Request $request) {
        /* Comicモデルからデータベースを取得 */
        $items = Quotation::orderBy('score', 'desc')->take(10)->get();
        
        return view('quotation.index', ['items' => $items]);
    }

    /* 追加ページ */
    public function create(Request $request) {
        
        return view('quotation.create');
    }

    /* 追加処理 */
    public function store(QuotationRequest $request) {       

        $quotation = new Quotation;
        $form = $request->all();
        unset($form['_token']);
        $quotation->fill($form)->save();

        $registration = new Registration;
        $user_id = Auth::user()->id;
        $quote_id = DB::table('quotations')->orderBy('id', 'desc')->first()->id;
        $registration->user_id = $user_id;
        $registration->quotation_id = $quote_id;
        $registration->save();

        return redirect('/quotation/list')->with('flash_message', 'My名言集に追加しました！');
    }

    /* 編集ページ */
    public function edit($id) {

        $item = Quotation::find($id);
        
        return view('quotation.update', ['item' => $item, 'id' => $id]);
    }

    /* 編集処理 */
    public function update(Request $request, $id) {       

        $quotation = Quotation::find($id);
        $form = $request->all();
        unset($form['_token']);
        $quotation->fill($form)->save();

        return redirect('/quotation/mybook');
    }

    /* 削除処理 */
    public function destroy($id) {       

        $quotation = Registration::find($id);
        $quotation->delete();

        return redirect('/quotation/mybook');
    }

    public function add(Request $request) {

        $user_id = Auth::user()->id;
        
        $items = Registration::where('user_id', $user_id)->get();

        return view('quotation.mybook', ['items' => $items]);
    }

    public function list(Request $request) {

        $category_id = $request->category_id;
        if ($category_id == 0) {
            $items = Quotation::all();
        }else {
            $items = Quotation::where('category_id', $category_id)->get();
        }
        
        return view('quotation.list', ['items' => $items]);
    }

    public function addcheck(Request $request, $id) {
        
        $item = Quotation::find($id);
        
        return view('quotation.add', ['item' => $item, 'id' => $id]);
    }

    public function regist(QuotationRequest $request) {

        $quote_id = $request->quote_id;
        $user_id = Auth::user()->id;
        $flag = Registration::where('user_id', $user_id)->where('quotation_id', $quote_id)->count();
        if($flag == 0) {
            $registration = new Registration;
            $quotation = Quotation::find($quote_id);
            $quotation->score = $quotation->score + 1;
            $registration->user_id = $user_id;
            $registration->quotation_id = $quote_id;
            $registration->save();
            $quotation->save();

            return redirect('quotation/list')->with('flash_message', 'マイ名言集に追加しました！');

        }else {

            return redirect('quotation/list')->with('flash_message', '既にマイ名言集に追加済みです！');
        }
    }
}
