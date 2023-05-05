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
        'family',
        'middle',
        'gender',
        'date',
        'address',
        'discipline_id',
        'division_id'
    ];
}