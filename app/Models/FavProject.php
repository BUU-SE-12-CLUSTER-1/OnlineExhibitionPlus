<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikedProject extends Model
{
    use HasFactory;
    public $table = 'oe_companies';
    protected $fillable = ['company_name'];
    public $primaryKey = 'company_id';
}
