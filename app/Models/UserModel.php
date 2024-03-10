<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $table = 'oe_users';
    public $timestamps = false;
    protected $fillable = ['user_student_id', 'user_fname', 'user_lname','user_email', 'user_password', 'user_phone', 'user_profile_image', 'user_role_id', 'user_major_id'];
    protected $primaryKey = 'user_id';


}
