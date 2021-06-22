<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    protected $table = 'login'; //Database tabel name

    protected $fillable = [
        //Required proparty
        'email',
        'password'
    ];
}
