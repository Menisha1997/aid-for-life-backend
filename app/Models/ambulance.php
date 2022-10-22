<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ambulance extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table = 'ambulances';

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
