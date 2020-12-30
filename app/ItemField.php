<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class ItemField extends Model
{
    //
    protected $guarded = [];

    protected $table = 'item_field';

    public function group(){
        return $this->belongsTo(GroupField::class,'group_field_id','id');
    }
}
