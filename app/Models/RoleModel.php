<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    public $table = 'oe_roles';
    public $timestamps = false;
    public $primary = 'role_id';
}
