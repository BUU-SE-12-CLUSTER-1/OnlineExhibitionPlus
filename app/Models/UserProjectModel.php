<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProjectModel extends Model
{
    use HasFactory;
    public $table ="oe_user_project";
    public $timestamps = false;
    public $primaryKey = "userproj_id";
}
