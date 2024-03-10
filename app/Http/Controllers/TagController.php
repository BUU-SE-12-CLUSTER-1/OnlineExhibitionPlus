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
}
