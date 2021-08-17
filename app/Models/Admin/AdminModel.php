<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table='Admin';
    protected $fillable=[
        'id',
        'name',
        'email',
        'user_id',
        'password',
        'created_at',
        'updated_at'
    ];
}
