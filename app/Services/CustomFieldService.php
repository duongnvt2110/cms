<?php

namespace App\Services;

use App\GroupField;
use App\ItemFiled;
use Illuminate\Support\Str;
use App\Mail\EmailRegister;


class CustomFieldService {

    public function __construct()
    {

    }

    public function getAllowCustomField(){
        $groupFields = GroupField::get();
        foreach($groupFields as $groupField){
            $data[] = unserialize($groupField->group_rules)[0];
        }
        return collect($data)->pluck('param');
    }
}
