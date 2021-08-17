<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    protected $table='users';
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
