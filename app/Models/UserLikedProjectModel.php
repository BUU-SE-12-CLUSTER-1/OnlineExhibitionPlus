<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLikedProjectModel extends Model
{
    use HasFactory;
    public $table ="oe_user_liked_project";
    public $timestamps = false;
    protected $fillable = ['ulp_proj_id, ulp_user_id'];
    public $primaryKey = "ulp_id";
}
