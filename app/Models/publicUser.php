<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicUser extends Model
{
    use HasFactory;
    
    protected $table = 'users';

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'phoneNumber',
        'email',
    ];
}
