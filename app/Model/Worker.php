<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $table = 'workers';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'family_name',
        'middle_name',
        'gender',
        'date_birth',
        'address',
        'position_id',
        'division_id'
    ];
}