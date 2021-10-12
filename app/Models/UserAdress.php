<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'adress',
        'exterior_number',
        'suburb',
        'zipcode',
        'city'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
