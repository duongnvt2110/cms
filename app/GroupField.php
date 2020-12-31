<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class GroupField extends Model
{
    //
    protected $guarded = [];

    protected $table = 'group_field';

    public $timestamps = true;

    public function items(){
        return $this->hasMany(ItemField::class,'group_field_id','id');
    }
}
