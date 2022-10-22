<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class firstaid extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table = 'firstaids';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'desc',
        'symptoms',
        'firstAid'

    ];


    public $timestamps = true;
}
