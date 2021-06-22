<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAccountModel extends Model
{
    use HasFactory;

    protected $table = 'useraccount'; //Database tabel name

    protected $fillable = [
        //Required proparty
        'firstname',
        'lastname',
        'email',
        'password'
    ];
}
