<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'oe_comments';
    protected $fillable = ['comment_text','comment_proj_id','comment_user_id'];
    public $primaryKey = 'comment_id';
}
