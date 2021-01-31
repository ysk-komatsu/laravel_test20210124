<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected $table = 'quotations';
    protected $guarded = array('id');
    
    public function category() {

        return $this->belongsTo('App\Category');
    }
}
