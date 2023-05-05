<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisions';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];
}