<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonData extends Model
{
    protected $table = 'people';

    protected $fillable = [
        'Name',
        'LastName',
        'Age',
        'Street',
        'HouseNumber',
        'City',
        'Country',
        'PhoneNumber'
    ];

    public $timestamps = true;
}
