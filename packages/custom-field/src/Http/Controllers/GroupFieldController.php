<?php

namespace Demo\CustomField\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Demo\CustomField\Models\GroupField;
use Demo\CustomField\Models\ItemField;

class GroupFieldController extends Controller
{
    //
    public function index(){
        $groupFields = GroupField::with('items')->get();
        return view('custom_field::custom_field.group_field.index',compact('groupFields'));
    }

    public function create(){
        return view('custom_field::custom_field.group_field.create');
    }

    public function store(Request $request){
        $itemsField = $request->only('field_label','field_name','field_type');
        $groupRules = $request->only('param','operator','content');
        $groupField = $request->only('group_title');

        $groupRules = $this->buildFieldForm($groupRules,'');
        $groupField = array_merge($groupField,['group_rules'=>serialize($groupRules)]);
        $group_id = GroupField::insertGetId($groupField);
        if(isset($group_id)){
            $optionField = [
                'field_rules'=>serialize('{}'),
                'group_field_id'=>$group_id
            ];
            $items = $this->buildFieldForm($itemsField,function($datas) use ($optionField){
                return array_merge($datas,$optionField);;
            });
            ItemField::insert($items);
        }
        return view('custom_field::custom_field.group_field.create');
    }

    public function buildFieldForm($customFieldForm,$callback){
        $items = [];
        foreach($customFieldForm as $field_key => $field){
            foreach($field as $key => $value){
                $items[$key][$field_key] = $value;
                if($callback instanceof \Closure){
                    $items[$key] = $callback($items[$key]);
                }
            }
        }
        return $items;
    }

    public function getField(Request $request){
        return 1;
    }
}
