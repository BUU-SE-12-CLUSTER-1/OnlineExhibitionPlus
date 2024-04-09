<?php

namespace App\Http\Controllers;

use App\Models\TagModel;
use Illuminate\Http\Request;
use App\Models\ProjectTagModel;

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

    public function deleteTag($tag_id){
        $tag = TagModel::find($tag_id);
        $project_tags = ProjectTagModel::all();
        foreach($project_tags as $project_tag){
            if($project_tag->projtag_tag_id == $tag_id){
            $project_tag->delete();
        }
        }
        $tag->delete();
        return back();
    }
}
