<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTagModel extends Model
{
    use HasFactory;
    public $table = 'oe_project_tag';
    public $timestamps = false;
    protected $fillable = ['projtag_proj_id','projtag_tag_id'];
    protected $primaryKey = 'projtag_id';
}
