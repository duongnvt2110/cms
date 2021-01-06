<?php

namespace Demo\CustomField\Services;

use Demo\CustomField\Models\GroupField;
use Demo\CustomField\Models\ItemField;
use Illuminate\Support\Str;

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

    public function getFieldItem(){
        $items = ItemField::get();
        return $items;
    }
}
