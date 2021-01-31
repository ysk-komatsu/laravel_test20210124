<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $guarded = array('id');

    public function quotation() {

        return $this->belongsTo('App\Quotation');
    }

    public function user() {

        return $this->belongsTo('App\User');
    }
}
