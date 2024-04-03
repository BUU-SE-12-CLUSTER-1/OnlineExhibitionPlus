<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    public $table = 'oe_projects';
    public $timestamps = false;
    protected $fillable = ['proj_name', 'proj_main_image', 'proj_created_year','proj_student_year', 'proj_company_id', 'proj_advisor_id', 'proj_status', 'proj_view_quantity', 'proj_like_quantity'];
    protected $primaryKey = 'proj_id';
}
