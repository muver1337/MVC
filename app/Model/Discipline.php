<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $table = 'disciplines';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'division_id',
        'discipline'
    ];
}