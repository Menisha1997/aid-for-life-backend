<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospitals extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table = 'hospitals';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'location',
        'type',
        'contactNo',
        'longitude',
        'latitude',

    ];


    public $timestamps = true;
}
