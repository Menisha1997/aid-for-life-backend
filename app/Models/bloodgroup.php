<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bloodgroup extends Model
{
    use HasFactory;
    protected $table = 'bloodgroups';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titile',
        'desc'
    ];
}
