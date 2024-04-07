<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagModel extends Model
{
    use HasFactory;
    public $table = 'oe_tags';

    protected $fillable = ['tag_name'];
    protected $primaryKey = 'tag_id';
    public $timestamps = false;

}
