<?php

namespace App\Http\Controllers;

use App\Models\TagModel;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function insertTag(Request $request){
        $tag = new TagModel();
        $tag->tag_name = request('tag_name');
        $tag->save();
        return view('success');
      }

    public function showTagList(){
        $tag_data = TagModel::all();
        return view('tag_list',['oe_tags' => $tag_data]);
    }
}
