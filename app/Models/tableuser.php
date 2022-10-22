<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tableuser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table = 'tableusers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fullName',
        'phone_no',
        'NIC',
        'dateOfBirth',
        'gender',
        'bloodGroup',
        'email',
        'password',
        'userType',
        'ambulanceId',
        'HospitalId',

    ];


    public $timestamps = true;
}
