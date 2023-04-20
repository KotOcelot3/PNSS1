<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record  extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'title',
        'date',
        'diagnosis_id',
        'user_id',
        'doctor_id',
    ];

}