<?php

namespace App\Http\Controllers\CustomField;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ItemField;

class CustomFieldController extends Controller
{
    //
    public function index(){
        return view('custom_filed.index');
    }

    public function store(Request $request){

        ItemField::insert([
            'field_label'=>'test',
            'field_name'=>'test',
            'field_rules'=> serialize('{}'),
            'field_type'=>'test',
            'field_group_id'=>'1'
        ]);
    }

    public function formatMultiRows($customFieldForm){
        $data = [];
        foreach($customFieldForm as $field_key => $field){
            foreach($field as $key => $value){
                $data[$key][$field_key] = $value;
            }
        }
        return $data;
    }
}
